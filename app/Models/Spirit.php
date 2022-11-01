<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spirit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'destillery',
        'alc_percent',
        'size',
        'image'
    ];

    public function destillery() {
        return $this->belongsTo(Destillery::class, 'destillery');
    }
}
