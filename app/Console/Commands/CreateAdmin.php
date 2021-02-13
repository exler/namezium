<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Database\QueryException;

use App\Models\User;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates an user with administrator priviliges.';

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
        $username = $this->ask("Username");
        $password = $this->secret("Password");

        try {
            $user = new User;
            $user->username = $username;
            $user->password = Hash::make($password);
            $user->admin = true;
            $user->save();

            if (!App::environment("testing"))
                printf("User '%s' successfully created!", $username);

            return 0;
        } catch (QueryException $e) {
            if (!App::environment("testing"))
                printf("User '%s' already exists in database!", $username);

            return 1;
        }
    }
}
