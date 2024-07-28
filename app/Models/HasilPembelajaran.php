<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPembelajaran extends Model
{
    use HasFactory;

    protected $table = 'hasil_pembelajaran';
    protected $guarded = ['id_hasil_pembelajaran'];
    protected $primaryKey = 'id_hasil_pembelajaran';

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('kode_mata_kuliah', 'like', '%'. $search . '%')
                ->orWhere('nama_mata_kuliah', 'like', '%' . $search . '%')
        );
    }

    public function nilaiHasilPembelajaran()
    {
        return $this->hasMany(NilaiHasilPembelajaran::class, 'id_hasil_pembelajaran', 'id_hasil_pembelajaran');
    }

    public function mappingCapaianPembelajaranLulusan()
    {
        return $this->belongsTo(MappingCapaianPembelajaranLulusan::class, 'kode_mata_kuliah', 'kode_mata_kuliah');
    }

    public function totalHasilPembelajaran()
    {
        return $this->hasOne(TotalHasilPembelajaran::class, 'id_hasil_pembelajaran', 'id_hasil_pembelajaran');
    }
}
