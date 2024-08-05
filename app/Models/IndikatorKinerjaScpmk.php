<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndikatorKinerjaScpmk extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'indikator_kinerja_scpmk';
    protected $guarded = ['id_indikator_kinerja_scpmk'];
    protected $primaryKey = 'id_indikator_kinerja_scpmk';

    protected $keyType = 'string';
    public $incrementing = false;

    public function mappingCapaianPembelajaranLulusan()
    {
        return $this->belongsTo(MappingCapaianPembelajaranLulusan::class, 'id_mapping_cpl', 'id_mapping_cpl');
    }

    public function subCapaianPembelajaranMataKuliah()
    {
        return $this->belongsTo(SubCapaianPembelajaranMataKuliah::class, 'indikator_kode_scpmk', 'id_scpmk');
    }
}
