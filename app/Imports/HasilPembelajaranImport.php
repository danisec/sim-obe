<?php

namespace App\Imports;

use App\Models\NilaiHasilPembelajaran;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class HasilPembelajaranImport implements ToCollection, WithHeadingRow
{
    protected $idHasilPembelajaran;

    public function __construct($idHasilPembelajaran)
    {
        $this->idHasilPembelajaran = $idHasilPembelajaran;
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        // Hapus data yang sudah ada untuk id_hasil_pembelajaran ini
        NilaiHasilPembelajaran::where('id_hasil_pembelajaran', $this->idHasilPembelajaran)->delete();
        
        foreach ($rows as $row) {
            NilaiHasilPembelajaran::create([
                'id_hasil_pembelajaran' => $this->idHasilPembelajaran,
                'partisipasi' => $row['partisipasi'],
                'proyek' => $row['proyek'],
                'tugas' => $row['tugas'],
                'kuis' => $row['kuis'],
                'evaluasi_tengah_semester' => $row['evaluasi_tengah_semester'],
                'evaluasi_akhir_semester' => $row['evaluasi_akhir_semester'],
            ]);
        }
    }
}
