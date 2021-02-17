<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'generator_id'
    ];

    public function generator()
    {
        return $this->belongsTo(Generator::class);
    }
}
