<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiHasilPembelajaran extends Model
{
    use HasFactory;

    protected $table = 'nilai_hasil_pembelajaran';
    protected $guarded = ['id_nilai_hasil_pembelajaran'];
    protected $primaryKey = 'id_nilai_hasil_pembelajaran';

    public function hasilPembelajaran()
    {
        return $this->belongsTo(HasilPembelajaran::class, 'id_hasil_pembelajaran', 'id_hasil_pembelajaran');
    }
}
