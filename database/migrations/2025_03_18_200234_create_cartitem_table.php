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
        Schema::create('cartitem', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->integer("quantity");
            $table->dateTime("create_at");
            $table->dateTime("updated_at");
            $table->timestamps();
            $table->timestamps();
         //clave foranea
            $table->unsignedBigInteger("products");
            $table->foreign("products_id")->references("id")->on("prdocuts");
         // foreing key users    
            $table->unsignedBigInteger("users_id");
            $table->foreign("users_id")->references("id")->on("users");
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartitem');
    }
};
