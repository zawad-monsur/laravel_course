<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Fillable Example
    // protected $fillable = ['name', 'email', 'number', 'active'];

    //Guarded Example
    protected $guarded = [];

    use HasFactory;

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }
}
