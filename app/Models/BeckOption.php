<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeckOption extends Model
{
    use HasFactory;

    protected $fillable = [
        "beck_item_id",
    ];


    public function item()
    {
        return $this->hasOne(BeckItem::class, 'id', 'beck_item_id');
    }



}
