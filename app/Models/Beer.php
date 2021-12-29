<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type'];

    public function hasType() {
        return $this->hasOne(Beer_type::class, 'type');
    }

    public function brewery() {
        return $this->belongsTo(Brewery::class, 'name');
    }
}
