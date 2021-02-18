<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Category;
use App\Models\Generator;
use App\Models\Name;

class ProcessImport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $json;

    /**
     * Create a new job instance.
     *
     * @param array  $json
     * @return void
     */
    public function __construct(array $json)
    {
        $this->json = $json;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->json as $category) {
            $cat = Category::create([
                "title" => $category["category_title"],
                "description" => $category["category_desc"]
            ]);

            foreach ($category["generators"] as $generator) {
                $gen = Generator::create([
                    "title" => $generator["generator_title"],
                    "description" => $generator["generator_desc"],
                    "category_id" => $cat->id
                ]);

                foreach ($generator["names"] as $name) {
                    Name::create([
                        "value" => $name,
                        "generator_id" => $gen->id
                    ]);
                }
            }
        }
    }
}
