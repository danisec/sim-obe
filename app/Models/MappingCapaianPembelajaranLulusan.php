<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappingCapaianPembelajaranLulusan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'mapping_cpl';
    protected $guarded = ['id_mapping_cpl'];
    protected $primaryKey = 'id_mapping_cpl';

    protected $keyType = 'string';
    public $incrementing = false;

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('kode_mata_kuliah', 'like', '%'. $search . '%')
                ->orWhere('nama_mata_kuliah', 'like', '%' . $search . '%')
        );
    }

    public function capaianPembelajaranLulusan()
    {
        return $this->belongsTo(CapaianPembelajaranLulusan::class, 'kode_cpl', 'kode_cpl');
    }

    public function capaianPembelajaranMataKuliah()
    {
        return $this->belongsTo(CapaianPembelajaranMataKuliah::class, 'kode_cpmk', 'kode_cpmk');
    }

    public function subCapaianPembelajaranMatakuliah()
    {
        return $this->belongsTo(SubCapaianPembelajaranMataKuliah::class, 'kode_scpmk', 'kode_scpmk');
    }

    public function indikatorKinerjaScpmk()
    {
        return $this->hasMany(IndikatorKinerjaScpmk::class, 'id_mapping_cpl', 'id_mapping_cpl');
    }

    public function mataKuliah()
    {
        return $this->hasMany(MataKuliah::class, 'kode_mata_kuliah', 'kode_mata_kuliah');
    }
}
