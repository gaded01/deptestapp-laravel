<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsdiResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_score',
        'usdi_depression_level_id',
    ];


    public function usdiDepressionLevel()
    {
        return $this->hasOne(UsdiDepressionLevel::class, 'id', 'usdi_depression_level_id');
    }
}
