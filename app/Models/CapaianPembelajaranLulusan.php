<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapaianPembelajaranLulusan extends Model
{
    use HasFactory;

    protected $table = 'capaian_pembelajaran_lulusan';
    protected $guarded = ['id_cpl'];
    protected $primaryKey = 'id_cpl';

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('kode_cpl', 'like', '%'. $search . '%')
        );
    }

    public function capaianPembelajaranMatakuliah()
    {
        return $this->hasMany(CapaianPembelajaranMatakuliah::class, 'id_cpl', 'id_cpl');
    }
}
