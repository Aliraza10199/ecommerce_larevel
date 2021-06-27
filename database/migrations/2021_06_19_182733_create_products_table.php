<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string("category");
            $table->string("name");
            $table->string("image");
            $table->string("slug");
            $table->string("brand");
            $table->string("model");
            $table->longText("shot_desc");
            $table->longText("desc");
            $table->longText("keywords");
            $table->longText("technical_specification");
            $table->longText("uses");
            $table->longText("waranty");
            $table->integer("status");
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
}
