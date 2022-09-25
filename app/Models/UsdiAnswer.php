<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsdiAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        "usdi_test_take_id",
        "usdi_question_id",
        "usdi_option_id",
    ];
}
