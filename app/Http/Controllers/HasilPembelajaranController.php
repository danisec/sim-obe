<?php

namespace App\Http\Controllers;

use App\Imports\HasilPembelajaranImport;
use App\Models\CapaianPembelajaranLulusan;
use App\Models\HasilPembelajaran;
use App\Models\MappingCapaianPembelajaranLulusan;
use App\Models\ScoreCPL;
use App\Models\TotalHasilPembelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class HasilPembelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalHasilPembelajaran = HasilPembelajaran::with('totalHasilPembelajaran')->get();

        $totalArray = [];
        foreach ($totalHasilPembelajaran as $item) {
            // Akses kode mata kuliah dan total hasil pembelajaran
            $kodeMK = $item->kode_mata_kuliah;
            $total = $item->totalHasilPembelajaran->total ?? 0;

            // Masukkan ke dalam array dengan format yang diinginkan
            $totalArray[$kodeMK] = $total;
        }

        // Cari kode_mata_kuliah berada di cpl mana saja
        $cplKodeMataKuliah = HasilPembelajaran::with(['mataKuliah.subCapaianPembelajaranMataKuliah.capaianPembelajaranMataKuliah.capaianPembelajaranLulusan'])->get();

        // Dapatkan kode_cpl dari $cplKodeMataKuliah
        $kodeCPL = [];
        foreach ($cplKodeMataKuliah as $item) {
            $kode_mata_kuliah = $item->kode_mata_kuliah;

            foreach (
                $item->mataKuliah->pluck('subCapaianPembelajaranMataKuliah')->flatten()
                ->pluck('capaianPembelajaranMataKuliah')->flatten()
                ->pluck('capaianPembelajaranLulusan')->flatten()
                ->pluck('kode_cpl')->toArray()
                as $value
            ) {
                $kodeCPL[$kode_mata_kuliah][] = $value;
            }
        }

        // Mengambil hanya nilai yang unik
        foreach ($kodeCPL as $kode_mata_kuliah => $values) {
            $kodeCPL[$kode_mata_kuliah] = array_unique($values);
        }

        $allCplCodes = array_unique(array_merge(...array_values($kodeCPL)));
        sort($allCplCodes);

        return view('pages.dashboard.hasil-pembelajaran.index', [
            'title' => 'Hasil Pembelajaran',
            'hasilPembelajaran' => HasilPembelajaran::orderBy('kode_mata_kuliah', 'asc')->filter(request(['search']))->paginate(10)->withQueryString(),
            'totalHasilPembelajaran' => $totalArray,
            'capaianPembelajaranLulusan' => CapaianPembelajaranLulusan::all(),
            'allCplCodes' => $allCplCodes,
            'kodeCPL' => $kodeCPL,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.hasil-pembelajaran.create', [
            'title' => 'Tambah Hasil Pembelajaran',
            'mataKuliah' => MappingCapaianPembelajaranLulusan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Import file excel
        $request->validate([
            'kode_mata_kuliah' => 'required',
            'nama_mata_kuliah' => 'required',
            'import_file_nilai' => 'required|mimes:xlsx,xls',
        ], [
            'kode_mata_kuliah.required' => 'Kode Mata Kuliah harus diisi',
            'nama_mata_kuliah.required' => 'Nama Mata Kuliah harus diisi',
            'import_file_nilai.required' => 'File harus diisi',
            'import_file_nilai.mimes' => 'File harus berformat xlsx atau xls',
        ]);

        DB::beginTransaction();

        try {
            // Insert data ke tabel hasil_pembelajaran
            $hasilPembelajaran = HasilPembelajaran::updateOrCreate([
                'kode_mata_kuliah' => $request->kode_mata_kuliah,
                'nama_mata_kuliah' => $request->nama_mata_kuliah,
            ]);
    
            // Simpan file excel ke storage sementara
            $file = $request->file('import_file_nilai')->store('temp');
    
            // Mengimport data dari file excel ke setiap tabel
            Excel::import(new HasilPembelajaranImport($hasilPembelajaran->id_hasil_pembelajaran), $file);
    
            DB::commit();

            $notif = notify()->success('Data Nilai berhasil diimpor');
            return back()->with('notif', $notif);
        } catch (\Throwable $th) {
            DB::rollback();
            
            $notif = notify()->error('Terjadi kesalahan saat menyimpan data hasil pembelajaran');
            return back()->withInput();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeScore(Request $request)
    {
        $scores = $request->input('scores');

        foreach ($scores as $key => $value) {
            ScoreCPL::updateOrCreate(
                ['column' => $key],
                ['score' => $value]
            );
        }

        return response()->json(['message' => 'Data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function perhitunganHasilPembelajaran()
    {
        $hasilPembelajaran = HasilPembelajaran::with('nilaiHasilPembelajaran', 'mappingCapaianPembelajaranLulusan')->get();

        // Fungsi untuk menghitung rata-rata nilai
        function hitungRataRata($nilaiArray) {
            return array_sum($nilaiArray) / count($nilaiArray);
        }

        // Kelompokkan nilai hasil pembelajaran ke dalam array
        $getNilaiHasilPembelajaran = [];

        foreach ($hasilPembelajaran as $value) {
            $getNilaiHasilPembelajaran[] = [
                'partisipasi' => $value->nilaiHasilPembelajaran->pluck('partisipasi')->toArray(),
                'proyek' => $value->nilaiHasilPembelajaran->pluck('proyek')->toArray(),
                'tugas' => $value->nilaiHasilPembelajaran->pluck('tugas')->toArray(),
                'kuis' => $value->nilaiHasilPembelajaran->pluck('kuis')->toArray(),
                'evaluasi_tengah_semester' => $value->nilaiHasilPembelajaran->pluck('evaluasi_tengah_semester')->toArray(),
                'evaluasi_akhir_semester' => $value->nilaiHasilPembelajaran->pluck('evaluasi_akhir_semester')->toArray(),
            ];
        }

        // Hitung rata-rata nilai hasil pembelajaran
        $avgNilaiHasilPembelajaran = [];

        foreach ($getNilaiHasilPembelajaran as $value) {
            $avgNilaiHasilPembelajaran[] = [
                'partisipasi' => hitungRataRata($value['partisipasi']),
                'proyek' => hitungRataRata($value['proyek']),
                'tugas' => hitungRataRata($value['tugas']),
                'kuis' => hitungRataRata($value['kuis']),
                'evaluasi_tengah_semester' => hitungRataRata($value['evaluasi_tengah_semester']),
                'evaluasi_akhir_semester' => hitungRataRata($value['evaluasi_akhir_semester']),
            ];
        }

        // Hitung rata-rata * bobot nilai pada mapping CPL
        $avgBobotNilaiHasilPembelajaran = [];

        foreach ($hasilPembelajaran as $key => $value) {
            $bobotPartisipasi = $value->mappingCapaianPembelajaranLulusan->partisipasi;
            $bobotProyek = $value->mappingCapaianPembelajaranLulusan->proyek;
            $bobotTugas = $value->mappingCapaianPembelajaranLulusan->tugas;
            $bobotKuis = $value->mappingCapaianPembelajaranLulusan->kuis;
            $bobotEvaluasiTengahSemester = $value->mappingCapaianPembelajaranLulusan->evaluasi_tengah_semester;
            $bobotEvaluasiAkhirSemester = $value->mappingCapaianPembelajaranLulusan->evaluasi_akhir_semester;

            // Hitung rata-rata * bobot
            $avgBobotNilaiHasilPembelajaran[] = [
                'partisipasi' => $avgNilaiHasilPembelajaran[$key]['partisipasi'] * $bobotPartisipasi,
                'proyek' => $avgNilaiHasilPembelajaran[$key]['proyek'] * $bobotProyek,
                'tugas' => $avgNilaiHasilPembelajaran[$key]['tugas'] * $bobotTugas,
                'kuis' => $avgNilaiHasilPembelajaran[$key]['kuis'] * $bobotKuis,
                'evaluasi_tengah_semester' => $avgNilaiHasilPembelajaran[$key]['evaluasi_tengah_semester'] * $bobotEvaluasiTengahSemester,
                'evaluasi_akhir_semester' => $avgNilaiHasilPembelajaran[$key]['evaluasi_akhir_semester'] * $bobotEvaluasiAkhirSemester,
            ];
        }

        // Hitung total dari $avgBobotNilaiHasilPembelajaran
        $totalBobotNilaiHasilPembelajaran = [];

        foreach ($hasilPembelajaran as $key => $value) {
            $total = array_sum($avgBobotNilaiHasilPembelajaran[$key]);
            $totalBobotNilaiHasilPembelajaran[] = $total;

            // Simpan ke database
            TotalHasilPembelajaran::updateOrCreate(
                ['id_hasil_pembelajaran' => $value->id_hasil_pembelajaran],
                ['total' => $total]
            );
        }

        return view('pages.dashboard.hasil-pembelajaran.hasil', [
            'title' => 'Perhitungan Hasil Pembelajaran',
            'hasilPembelajaran' => HasilPembelajaran::with('nilaiHasilPembelajaran')->get(),
            'avgNilaiHasilPembelajaran' => $avgNilaiHasilPembelajaran,
            'avgBobotNilaiHasilPembelajaran' => $avgBobotNilaiHasilPembelajaran,
            'totalBobotNilaiHasilPembelajaran' => $totalBobotNilaiHasilPembelajaran,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('pages.dashboard.hasil-pembelajaran.show', [
            'title' => 'Detail Hasil Pembelajaran',
            'hasilPembelajaran' => HasilPembelajaran::with('nilaiHasilPembelajaran')->where('id_hasil_pembelajaran', $id)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            HasilPembelajaran::where('id_hasil_pembelajaran', $id)->delete();

            $notif = notify()->success('Data berhasil dihapus');
            return back()->with('notif', $notif);
        } catch (\Throwable $th) {
            $notif = notify()->error('Terjadi kesalahan saat menghapus data');
            return back()->with('notif', $notif);
        }
    }

    /**
     * Display a listing of the resource.
     * @params string $kodeMataKuliah
     */
    public function getMataKuliah($kodeMataKuliah)
    {
        $mappingCpl = MappingCapaianPembelajaranLulusan::where('kode_mata_kuliah', $kodeMataKuliah)->get();

        return response()->json($mappingCpl);
    }
}
