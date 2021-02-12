<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function generators()
    {
        return $this->hasMany(Generator::class);
    }

    public function sluggable(): array
    {
        return ['slug' => ['source' => 'title']];
    }
}
