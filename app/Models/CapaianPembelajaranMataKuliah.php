<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapaianPembelajaranMataKuliah extends Model
{
    use HasFactory;

    protected $table = 'capaian_pembelajaran_mata_kuliah';
    protected $guarded = ['id_cpmk'];
    protected $primaryKey = 'id_cpmk';

    public function capaianPembelajaranLulusan()
    {
        return $this->belongsTo(CapaianPembelajaranLulusan::class, 'id_cpl', 'id_cpl');
    }

    public function subCapaianPembelajaranMataKuliah()
    {
        return $this->hasMany(SubCapaianPembelajaranMataKuliah::class, 'id_cpmk', 'id_cpmk');
    }
}
