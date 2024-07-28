<?php

namespace App\Imports;

use App\Models\CapaianPembelajaranMataKuliah;
use App\Models\SubCapaianPembelajaranMataKuliah;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ScpmkImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $cpmk = CapaianPembelajaranMataKuliah::where('kode_cpmk', $row[2])->first();
            if ($cpmk) {
                SubCapaianPembelajaranMataKuliah::create([
                    'id_cpmk' => $cpmk->id,
                    'kode_scpmk' => $row[4],
                    'deskripsi_scpmk' => $row[5],
                ]);
            }
        }
    }
}
