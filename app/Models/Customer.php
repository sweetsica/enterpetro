<?php

namespace App\Models;

use App\Http\Controllers\BillController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = '';

    public function bills()
    {
        return $this->hasMany(BillController::class);
    }
}
