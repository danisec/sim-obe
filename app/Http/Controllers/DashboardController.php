<?php

namespace App\Http\Controllers;

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

        $scoreCPLData = ScoreCPL::all();

        // Buat array baru untuk $scoreCPL
        $scoreCPL = [];

        foreach ($scoreCPLData as $score) {
            $column = $score->column;
            $scoreValue = $score->score;

            // Masukkan ke dalam array dengan format yang diinginkan
            $scoreCPL[$column] = $scoreValue;
        }

        return view('pages.dashboard.home.index', [
            'title' => 'Dashboard',
            'scoreCPL' => $scoreCPL,
            'predikatCPL' => $predikatCPL,
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
