<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreCPL extends Model
{
    use HasFactory;

    protected $table = 'score_cpl';
    protected $guarded = ['id_score_cpl'];
    protected $primaryKey = 'id_score_cpl';
}
