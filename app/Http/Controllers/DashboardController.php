<?php

namespace App\Http\Controllers;

use App\Models\CapaianPembelajaranLulusan;
use App\Models\Dashboard;
use App\Models\ScoreCPL;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $predikatCPL = [
            [
                'range' => '85 - 100',
                'predikat' => 'Sangat kompeten (Exemplary)',
            ],
            [
                'range' => '75 - 84',
                'predikat' => 'Kompeten (Competent)',
            ],
            [
                'range' => '60 - 74',
                'predikat' => 'Berkembang (Developing)',
            ],
            [
                'range' => '0 - 59',
                'predikat' => 'Tidak memuaskan (Unstatisfactory)',
            ],
        ];

        $getCpl = CapaianPembelajaranLulusan::with(['capaianPembelajaranMatakuliah.subCapaianPembelajaranMataKuliah'])->get();

        // Dapatkan kode_cpl, deskripsi_cpl
        $cpl = [];
        foreach ($getCpl as $key => $value) {
            $cpl[$key]['kode_cpl'] = $value->kode_cpl;
            $cpl[$key]['deskripsi_cpl'] = $value->deskripsi_cpl;
            $cpl[$key]['aspek'] = $value->capaianPembelajaranMatakuliah->pluck('subCapaianPembelajaranMataKuliah')->flatten()->pluck('aspek')->unique()->toArray();
            $cpl[$key]['kemampuan'] = $value->capaianPembelajaranMatakuliah->pluck('subCapaianPembelajaranMataKuliah')->flatten()->pluck('kemampuan')->toArray();
        }


        $scoreCPLData = ScoreCPL::all();

        // Buat array baru untuk $scoreCPL
        $scoreCPL = [];
        foreach ($scoreCPLData as $score) {
            $column = $score->column;
            $scoreValue = $score->score;

            // Masukkan ke dalam array dengan format yang diinginkan
            $scoreCPL[$column] = $scoreValue;
        }

        // Masukkan skor CPL ke dalam array CPL berdasarkan kode_cpl
        foreach ($cpl as $key => $cplItem) {
            $kodeCPL = $cplItem['kode_cpl'];

            // Cek jika kode_cpl ada dalam array scoreCPL
            if (isset($scoreCPL[$kodeCPL])) {
                // Masukkan nilai skor ke dalam array cpl
                $cpl[$key]['score'] = $scoreCPL[$kodeCPL];
            } else {
                // Jika tidak ada skor, set nilai skor menjadi 0 atau nilai default lainnya
                $cpl[$key]['score'] = 0;
            }
        }

        return view('pages.dashboard.home.index', [
            'title' => 'Dashboard',
            'scoreCPL' => $scoreCPL,
            'predikatCPL' => $predikatCPL,
            'cpl' => $cpl,
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
