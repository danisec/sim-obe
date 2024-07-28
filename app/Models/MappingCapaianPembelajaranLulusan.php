<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappingCapaianPembelajaranLulusan extends Model
{
    use HasFactory;

    protected $table = 'mapping_cpl';
    protected $guarded = ['id_mapping_cpl'];
    protected $primaryKey = 'id_mapping_cpl';

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('kode_mata_kuliah', 'like', '%'. $search . '%')
                ->orWhere('nama_mata_kuliah', 'like', '%' . $search . '%')
        );
    }
}
