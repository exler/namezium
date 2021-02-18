<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Generator;
use App\Models\Name;

class GenerateMarkovName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:markov {slug}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a random name for given generator slug using Markov chains.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $generator = Generator::whereSlug($this->argument("slug"))->first();
        if (!$generator) {
            printf("No generator with such slug!");
            return 1;
        }

        $name = $generator->generateName();
        printf("New name generated: %s", $name);

        $shouldAdd = $this->choice("Add this name to database?", ["Yes", "No"]);
        if ($shouldAdd)
            Name::create(["value" => $name, "generator_id" => $generator->id]);

        return 0;
    }
}
