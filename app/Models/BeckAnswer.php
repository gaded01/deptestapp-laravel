<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeckAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "beck_option_id",
    ];


    public function beckOption()
    {
        return $this->belongsTo(BeckOption::class, 'beck_option_id');
    }
}
