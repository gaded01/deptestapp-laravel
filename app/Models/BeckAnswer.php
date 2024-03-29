<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeckAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        "test_take_id",
        "beck_option_id",
    ];


    public function beckOption()
    {
        return $this->belongsTo(BeckOption::class, 'beck_option_id');
    }
    public function testTake()
    {
        return $this->belongsTo(TestTake::class, 'test_take_id');
    }

    
}
