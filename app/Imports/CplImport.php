<?php

namespace App\Imports;

use App\Models\CapaianPembelajaranLulusan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CplImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            CapaianPembelajaranLulusan::create([
                'kode_cpl' => $row[0],
                'deskripsi_cpl' => $row[1],
            ]);
        }
    }
}
