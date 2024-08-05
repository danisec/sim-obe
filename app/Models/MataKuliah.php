<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'mata_kuliah';
    protected $guarded = ['id_mata_kuliah'];
    protected $primaryKey = 'id_mata_kuliah';

    public function subCapaianPembelajaranMataKuliah()
    {
        return $this->hasMany(SubCapaianPembelajaranMataKuliah::class, 'id_scpmk', 'id_scpmk');
    }
}
