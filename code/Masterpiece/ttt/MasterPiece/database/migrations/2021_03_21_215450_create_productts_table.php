<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->string('desc');
            $table->string('image');
            $table->timestamps();
            $table->foreignId('category_id')->constrained('categoryyos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productts');
    }
}
