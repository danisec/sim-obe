<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCapaianPembelajaranMataKuliah extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'sub_capaian_pembelajaran_mata_kuliah';
    protected $guarded = ['id_scpmk'];
    protected $primaryKey = 'id_scpmk';

    protected $keyType = 'string';
    public $incrementing = false;

    public function capaianPembelajaranMataKuliah()
    {
        return $this->belongsTo(CapaianPembelajaranMataKuliah::class, 'id_cpmk', 'id_cpmk');
    }

    public function mataKuliah()
    {
        return $this->hasMany(MataKuliah::class, 'id_scpmk', 'id_scpmk');
    }
}
