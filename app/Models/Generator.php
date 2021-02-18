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

    /**
     * MARKOV CHAIN GENERATION
     */
    public function generateName(array $chain = []): string
    {
        $namesList = [];
        foreach ($this->names as $name)
            $namesList[] = $name->value;

        if (!$chain)
            $chain = $this->generateChain($namesList);

        $pair = array_rand($chain["_initial"]);
        $result = [$pair];

        while (true) {
            $pair = array_rand($chain[$pair]);
            $last_c = substr($pair, -1);

            if ($last_c === '%')
                break;

            $result[] = $last_c;
        }

        $name = implode("", $result);
        if (in_array($name, $namesList))
            return $this->generateName($chain);
        else
            return $name;
    }

    private function generateChain(array $names, int $chainLength = 3): array
    {
        $chain = ["_initial" => []];

        foreach ($names as $name) {
            $nameWrapped = $name . "%";
            for ($i = 0; $i < strlen($nameWrapped) - $chainLength; $i++) {
                $tuple = substr($nameWrapped, $i, $i + $chainLength);
                $next = substr($nameWrapped, $i + 1, $i + $chainLength + 1);

                if (!isset($chain[$tuple]))
                    $chain[$tuple] = [];

                if ($i === 0) {
                    if (!isset($chain["_initial"][$tuple]))
                        $chain["_initial"][$tuple] = 1;
                    else
                        $chain["_initial"][$tuple]++;
                }

                if (!isset($chain[$tuple][$next]))
                    $chain[$tuple][$next] = 1;
                else
                    $chain[$tuple][$next]++;
            }
        }

        return $chain;
    }
}
