<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('image');
            $table->integer('price');
            $table->integer('purchase')->nullable();
            $table->string('demo_link')->nullable();
            $table->date('create_date');
            $table->date('Update_date')->nullable();
            $table->string('technology')->nullable();
            $table->string('tag')->nullable();
            $table->string('title');
            $table->string('thumbnail');
            $table->string('short');
            $table->Text('long_desp');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
