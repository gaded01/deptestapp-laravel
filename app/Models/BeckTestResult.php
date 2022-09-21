<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeckTestResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'score',
        'depression_level_id',
    ];


    public function beckDepressionLevel()
    {
        return $this->hasOne(BeckDepressionLevel::class, 'id', 'depression_level_id');
    }
}
