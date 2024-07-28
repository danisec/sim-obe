<?php

namespace App\Imports;

use App\Models\CapaianPembelajaranLulusan;
use App\Models\CapaianPembelajaranMataKuliah;
use App\Models\SubCapaianPembelajaranMataKuliah;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;

class ImportData implements ToCollection, WithHeadingRow
{
    protected $previousCplId = null;
    protected $previousCpmkId = null;

    public function collection(Collection $rows)
    {
        DB::beginTransaction();

        try {
            foreach ($rows as $row) {
                // Import ke tabel CapaianPembelajaranLulusan
                if (!empty($row['kode_cpl'])) {
                    $cpl = CapaianPembelajaranLulusan::updateOrCreate(
                        ['kode_cpl' => $row['kode_cpl']],
                        ['deskripsi_cpl' => $row['deskripsi_cpl']]
                    );
                    $this->previousCplId = $cpl->id_cpl; // Simpan id_cpl untuk digunakan di baris berikutnya
                }

                // Import ke tabel CapaianPembelajaranMataKuliah
                if (!empty($row['kode_cpmk'])) {
                    $cpmk = CapaianPembelajaranMataKuliah::updateOrCreate(
                        ['kode_cpmk' => $row['kode_cpmk']],
                        [
                            'id_cpl' => $this->previousCplId,
                            'deskripsi_cpmk' => $row['deskripsi_cpmk']
                        ]
                    );
                    $this->previousCpmkId = $cpmk->id_cpmk; // Simpan id_cpmk untuk digunakan di baris berikutnya
                }

                // Import ke tabel SubCapaianPembelajaranMataKuliah
                if (!empty($row['kode_scpmk'])) {
                    SubCapaianPembelajaranMataKuliah::updateOrCreate(
                        ['kode_scpmk' => $row['kode_scpmk']],
                        [
                            'id_cpmk' => $cpmk->id_cpmk, // Pastikan $cpmk telah didefinisikan di atas
                            'deskripsi_scpmk' => $row['deskripsi_scpmk']
                        ]
                    );
                }
            }

            DB::commit();
            Log::info('Data import successful');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error importing data: ' . $e->getMessage());
        }
    }
}
