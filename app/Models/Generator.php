<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

use Cviebrock\EloquentSluggable\Sluggable;

class Generator extends Model
{
    use HasFactory;
    use Sluggable;
    use Searchable;

    protected $fillable = [
        'title',
        'description',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function names()
    {
        return $this->hasMany(Name::class);
    }

    public function sluggable(): array
    {
        return ['slug' => ['source' => 'title']];
    }
}
