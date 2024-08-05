<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiHasilPembelajaran extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'nilai_hasil_pembelajaran';
    protected $guarded = ['id_nilai_hasil_pembelajaran'];
    protected $primaryKey = 'id_nilai_hasil_pembelajaran';

    protected $keyType = 'string';
    public $incrementing = false;

    public function hasilPembelajaran()
    {
        return $this->belongsTo(HasilPembelajaran::class, 'id_hasil_pembelajaran', 'id_hasil_pembelajaran');
    }
}
