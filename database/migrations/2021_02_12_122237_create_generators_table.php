<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGeneratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generators', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title", 100)->unique();
            $table->string("slug", 100)->unique()->nullable();
            $table->foreignId("category_id")->constrained();
        });

        DB::statement('ALTER TABLE generators ADD searchable tsvector NULL');
        DB::statement('CREATE INDEX generators_searchable_index ON generators USING GIN (searchable)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generators');
    }
}
