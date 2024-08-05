<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapaianPembelajaranMataKuliah extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'capaian_pembelajaran_mata_kuliah';
    protected $guarded = ['id_cpmk'];
    protected $primaryKey = 'id_cpmk';

    protected $keyType = 'string';
    public $incrementing = false;

    public function capaianPembelajaranLulusan()
    {
        return $this->belongsTo(CapaianPembelajaranLulusan::class, 'id_cpl', 'id_cpl');
    }

    public function subCapaianPembelajaranMataKuliah()
    {
        return $this->hasMany(SubCapaianPembelajaranMataKuliah::class, 'id_cpmk', 'id_cpmk');
    }
}
