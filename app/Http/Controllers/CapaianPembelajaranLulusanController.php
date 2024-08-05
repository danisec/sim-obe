<?php

namespace App\Http\Controllers;

use App\Imports\ImportData;
use App\Models\CapaianPembelajaranLulusan;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CapaianPembelajaranLulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dashboard.cpl-cpmk-scpmk.index', [
            'title' => 'CPL-CPMK-SCPMK',
            'capaianPembelajaranLulusan' => CapaianPembelajaranLulusan::orderBy('kode_cpl', 'asc')->filter(request(['search']))->paginate(10)->withQueryString(),
        ]);
    }

    /**
     * Show the form for import a new resource.
     */
    public function import()
    {
        return view('pages.dashboard.cpl-cpmk-scpmk.import', [
            'title' => 'Import Data CPL-CPMK-SCPMK',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // import file excel
        $request->validate([
            'import_file' => 'required|mimes:xlsx,xls',
        ]);

        // MataKuliah::query()->delete();

        $file = $request->file('import_file')->store('temp');

        // Mengimport data dari file excel ke setiap tabel
        Excel::import(new ImportData, $file);

        $notif = notify()->success('Data berhasil diimpor');
        return back()->with('notif', $notif);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('pages.dashboard.cpl-cpmk-scpmk.show', [
            'title' => 'Detail CPL-CPMK-SCPMK',
            'cplCpmkScpmk' => CapaianPembelajaranLulusan::with('capaianPembelajaranMatakuliah.subCapaianPembelajaranMataKuliah.mataKuliah')->where('id_cpl', $id)->first(),
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
            CapaianPembelajaranLulusan::where('id_cpl', $id)->delete();

            $notif = notify()->success('Data mapping cpl mata kuliah berhasil dihapus');
            return back()->with('notif', $notif);
        } catch (\Throwable $th) {
            $notif = notify()->error('Terjadi kesalahan saat menghapus data mapping cpl');
            return back()->with('notif', $notif);
        }
    }
}
