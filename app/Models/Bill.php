<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function shellType()
    {
        return $this->belongsTo(ShellType::class, 'shellType');
    }

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'idSale','id');
    }
}
