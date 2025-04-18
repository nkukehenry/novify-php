<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BillCategory extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    public function billers(): HasMany
    {
        return $this->hasMany(Biller::class);
    }
} 