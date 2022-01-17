<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destillery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function spirits() {
        return $this->hasMany(Spirit::class, 'destillery');
    }
}
