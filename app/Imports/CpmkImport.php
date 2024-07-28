<?php

namespace App\Imports;

use App\Models\CapaianPembelajaranLulusan;
use App\Models\CapaianPembelajaranMataKuliah;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CpmkImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $cpl = CapaianPembelajaranLulusan::where('kode_cpl', $row[0])->first();
            if ($cpl) {
                CapaianPembelajaranMataKuliah::create([
                    'id_cpl' => $cpl->id,
                    'kode_cpmk' => $row[2],
                    'deskripsi_cpmk' => $row[3],
                ]);
            }
        }
    }
}
