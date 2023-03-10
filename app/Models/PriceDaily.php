<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceDaily extends Model
{
    use HasFactory;

    protected $guarded = '';

    public function menuprice()
    {
        return $this->belongsTo(MenuPrice::class);
    }
}
