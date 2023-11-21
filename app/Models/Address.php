<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'city',
        'state',
    ];

    public function scopeFilter($query): void
    {
        if (request('name')) {
            $query->where('name', 'like', '%'.request('name').'%');
        }
    }
}
