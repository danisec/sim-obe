<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalHasilPembelajaran extends Model
{
    use HasFactory;

    protected $table = 'total_hasil_pembelajaran';
    protected $guarded = ['id_total_hasil_pembelajaran'];
    protected $primaryKey = 'id_total_hasil_pembelajaran';

    public function hasilPembelajaran()
    {
        return $this->belongsTo(HasilPembelajaran::class, 'id_hasil_pembelajaran', 'id_hasil_pembelajaran');
    }
}
