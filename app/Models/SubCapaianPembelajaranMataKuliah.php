<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCapaianPembelajaranMataKuliah extends Model
{
    use HasFactory;

    protected $table = 'sub_capaian_pembelajaran_mata_kuliah';
    protected $guarded = ['id_scpmk'];
    protected $primaryKey = 'id_scpmk';

    public function capaianPembelajaranMataKuliah()
    {
        return $this->belongsTo(CapaianPembelajaranMataKuliah::class, 'id_cpmk', 'id_cpmk');
    }
}
