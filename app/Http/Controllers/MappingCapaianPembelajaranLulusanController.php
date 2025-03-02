<?php

namespace App\Http\Controllers;

use App\Models\CapaianPembelajaranLulusan;
use App\Models\CapaianPembelajaranMataKuliah;
use App\Models\IndikatorKinerjaScpmk;
use App\Models\MappingCapaianPembelajaranLulusan;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MappingCapaianPembelajaranLulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dashboard.mapping-cpl.index', [
            'title' => 'Mapping CPL',
            'mappingCapaianPembelajaranLulusan' => MappingCapaianPembelajaranLulusan::orderBy('kode_mata_kuliah', 'asc')->filter(request(['search']))->paginate(10)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.mapping-cpl.create', [
            'title' => 'Tambah Mapping CPL',
            'capaianPembelajaranLulusan' => CapaianPembelajaranLulusan::all(),
            'kodeMataKuliah' => MataKuliah::select('kode_mata_kuliah', 'nama_mata_kuliah')->get()->unique('kode_mata_kuliah'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_mata_kuliah' => 'required|max:10',
            'nama_mata_kuliah' => 'required|max:50',
            'kode_cpl' => 'required',
            'kode_cpmk' => 'required',
            'kode_scpmk' => 'required',
            'partisipasi' => '',
            'proyek' => '',
            'tugas' => '',
            'kuis' => '',
            'evaluasi_tengah_semester' => '',
            'evaluasi_akhir_semester' => '',
        ], [
            'kode_mata_kuliah.required' => 'Kode mata kuliah wajib diisi',
            'kode_mata_kuliah.max' => 'Kode mata kuliah maksimal 10 karakter',
            'nama_mata_kuliah.required' => 'Nama mata kuliah wajib diisi',
            'nama_mata_kuliah.max' => 'Nama mata kuliah maksimal 50 karakter',
            'kode_cpl.required' => 'Kode CPL wajib diisi',
            'kode_cpmk.required' => 'Kode CPMK wajib diisi',
            'kode_scpmk.required' => 'Kode SCPMK wajib diisi',
        ]);

        // Hitung total bobot
        $totalBobot = (
            $request->input('partisipasi', 0) +
            $request->input('proyek', 0) +
            $request->input('tugas', 0) +
            $request->input('kuis', 0) +
            $request->input('evaluasi_tengah_semester', 0) +
            $request->input('evaluasi_akhir_semester', 0)
        );

        // Cek apakah total bobot di atas atau di bawah 100
        if ($totalBobot > 100) {
            $notif = notify()->warning('Total bobot melebihi 100%');
            return back()->withInput()->with('notif', $notif);
        } elseif ($totalBobot < 100) {
            $notif = notify()->warning('Total bobot kurang dari 100%');
            return back()->withInput()->with('notif', $notif);
        }

        DB::beginTransaction();

        try {
            $mappingCpl = MappingCapaianPembelajaranLulusan::create($validatedData);
            $idMappingCpl = $mappingCpl->id_mapping_cpl;

            $validatedIndikatorKinerjaScpmk = $request->validate([
                'nama_indikator' => 'array',
                'indikator_kode_scpmk' => 'array',
            ]);

            // Pastikan panjang array sesuai
            if (count($validatedIndikatorKinerjaScpmk['nama_indikator']) !== count($validatedIndikatorKinerjaScpmk['indikator_kode_scpmk'])) {
                throw new \Exception('Panjang array nama indikator dan indikator kode scpmk tidak sesuai');
            }

            $indikatorKinerjaScpmk = [];
            foreach ($validatedIndikatorKinerjaScpmk['nama_indikator'] as $key => $value) {
                $indikatorKinerjaScpmk[] = [
                    'id_indikator_kinerja_scpmk' => (string) \Str::uuid(),
                    'id_mapping_cpl' => $idMappingCpl,
                    'nama_indikator' => $value,
                    'indikator_kode_scpmk' => $validatedIndikatorKinerjaScpmk['indikator_kode_scpmk'][$key],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            
            IndikatorKinerjaScpmk::insert($indikatorKinerjaScpmk);

            DB::commit();

            $notif = notify()->success('Data mapping cpl mata kuliah berhasil disimpan');
            return redirect()->route('mappingCpl.index')->with('notif', $notif);
        } catch (\Throwable $th) {
            DB::rollback();

            $notif = notify()->error('Terjadi kesalahan saat menyimpan data mapping cpl');
            return back()->withInput()->with('notif', $notif);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('pages.dashboard.mapping-cpl.show', [
            'title' => 'Detail Mapping CPL',
            'mappingCpl' => MappingCapaianPembelajaranLulusan::with(['indikatorKinerjaScpmk'])->where('id_mapping_cpl', $id)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pages.dashboard.mapping-cpl.edit', [
            'title' => 'Ubah Mapping CPL',
            'mappingCpl' => MappingCapaianPembelajaranLulusan::with(['indikatorKinerjaScpmk'])->where('id_mapping_cpl', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode_mata_kuliah' => '',
            'nama_mata_kuliah' => '',
            'kode_cpl' => '',
            'kode_cpmk' => '',
            'kode_scpmk' => '',
            'partisipasi' => '',
            'proyek' => '',
            'tugas' => '',
            'kuis' => '',
            'evaluasi_tengah_semester' => '',
            'evaluasi_akhir_semester' => '',
        ]);

        // Hitung total bobot
        $totalBobot = (
            $request->input('partisipasi', 0) +
            $request->input('proyek', 0) +
            $request->input('tugas', 0) +
            $request->input('kuis', 0) +
            $request->input('evaluasi_tengah_semester', 0) +
            $request->input('evaluasi_akhir_semester', 0)
        );

        // Cek apakah total bobot di atas atau di bawah 100
        if ($totalBobot > 100) {
            $notif = notify()->warning('Total bobot melebihi 100%');
            return back()->withInput()->with('notif', $notif);
        } elseif ($totalBobot < 100) {
            $notif = notify()->warning('Total bobot kurang dari 100%');
            return back()->withInput()->with('notif', $notif);
        }

        DB::beginTransaction();

        try {
            // Update data di tabel mapping_cpl
            $mappingCpl = MappingCapaianPembelajaranLulusan::findOrFail($id);
            $mappingCpl->update($validatedData);

            $validatedIndikatorKinerjaScpmk = $request->validate([
                'nama_indikator' => 'array',
                'indikator_kode_scpmk' => 'array',
            ]);

            // Pastikan panjang array sesuai
            if (count($validatedIndikatorKinerjaScpmk['nama_indikator']) !== count($validatedIndikatorKinerjaScpmk['indikator_kode_scpmk'])) {
                throw new \Exception('Panjang array nama indikator dan indikator kode scpmk tidak sesuai');
            }

            // Hapus data indikator_kinerja_scpmk yang lama
            IndikatorKinerjaScpmk::where('id_mapping_cpl', $id)->delete();

            $indikatorKinerjaScpmk = [];
            foreach ($validatedIndikatorKinerjaScpmk['nama_indikator'] as $key => $value) {
                $indikatorKinerjaScpmk[] = [
                    'id_indikator_kinerja_scpmk' => (string) \Str::uuid(),
                    'id_mapping_cpl' => $id,
                    'nama_indikator' => $value,
                    'indikator_kode_scpmk' => $validatedIndikatorKinerjaScpmk['indikator_kode_scpmk'][$key],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            // Insert data indikator_kinerja_scpmk yang baru
            IndikatorKinerjaScpmk::insert($indikatorKinerjaScpmk);

            DB::commit();

            $notif = notify()->success('Data mapping cpl mata kuliah berhasil diubah');
            return redirect()->route('mappingCpl.edit', $id)->with('notif', $notif);
        } catch (\Throwable $th) {
            DB::rollback();

            $notif = notify()->error('Terjadi kesalahan saat mengubah data mapping cpl');
            return back()->withInput()->with('notif', $notif);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            MappingCapaianPembelajaranLulusan::where('id_mapping_cpl', $id)->delete();

            $notif = notify()->success('Data mapping cpl mata kuliah berhasil dihapus');
            return back()->with('notif', $notif);
        } catch (\Throwable $th) {
            $notif = notify()->error('Terjadi kesalahan saat menghapus data mapping cpl');
            return back()->with('notif', $notif);
        }
    }

    /**
     * Display a listing of the resource.
     * @params string $kodeMataKuliah
     */
    public function getNamaMataKuliah($kodeMataKuliah)
    {
        $namaMataKuliah = MataKuliah::where('kode_mata_kuliah', $kodeMataKuliah)->first();

        return response()->json($namaMataKuliah);
    }

    /**
     * Display a listing of the resource.
     * @params string $kodeCpl
     */
    public function getCpmk($kodeCpl)
    {
        $capaianPembelajaranLulusan = CapaianPembelajaranLulusan::with('capaianPembelajaranMatakuliah')->where('kode_cpl', $kodeCpl)->get();

        return response()->json($capaianPembelajaranLulusan);
    }

    /**
     * Display a listing of the resource.
     * @params string $kodeCpmk
     */
    public function getScpmk($kodeCpmk)
    {
        $capaianPembelajaranMataKuliah = CapaianPembelajaranMataKuliah::with('subCapaianPembelajaranMatakuliah')->where('kode_cpmk', $kodeCpmk)->get();

        return response()->json($capaianPembelajaranMataKuliah);
    }

    /**
     * Display a listing of the resource.
     * @params string $kodeMataKuliah
     */
    public function getIndikatorScpmk($kodeMataKuliah)
    {
        // Cari kode mata kuliah dalam table mata_kuliah berelasi dengan sub_capaian_pembelajaran_mata_kuliah berada di scpmk mana saja
        $getScpmkByKodeMataKuliah = MataKuliah::with('subCapaianPembelajaranMatakuliah')->where('kode_mata_kuliah', $kodeMataKuliah)->get();

        return response()->json($getScpmkByKodeMataKuliah);
    }
}
