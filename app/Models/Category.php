<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

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
