<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string("slug", 100)->unique();
            $table->string("description", 200);
            $table->foreignId("category_id")->constrained();
        });
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
