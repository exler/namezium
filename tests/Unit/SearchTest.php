<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\Category;
use App\Models\Generator;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    public function test_search_driver_works()
    {
        $category = Category::factory()->create();
        $generator = new Generator;
        $generator->title = "Lorem ipsum";
        $generator->category_id = $category->id;
        $generator->save();

        $result = Generator::search("lorem")->get();
        $this->assertNotEmpty($result);

        $result = Generator::search("ipsum")->get();
        $this->assertNotEmpty($result);

        $result = Generator::search("not")->get();
        $this->assertEmpty($result);
    }
}
