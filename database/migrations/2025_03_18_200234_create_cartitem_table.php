<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cartitems', function (Blueprint $table) {
            $table->id(); // Solo una vez
            $table->integer("quantity");
            $table->timestamps(); // Esto crea created_at y updated_at

            // Clave foránea producto
            $table->foreignId("product_id")->constrained("products");

            // Clave foránea usuario
            $table->foreignId("user_id")->constrained("users");
        });
    }

    public function down()
    {
        Schema::dropIfExists('cartitems');
    }
};