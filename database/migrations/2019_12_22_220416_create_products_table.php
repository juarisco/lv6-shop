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
            $table->bigIncrements('id');

            $table->string('name')->comment('nombre');
            $table->string('slug');
            $table->unsignedBigInteger('quantity')->default(0)->comment('cantidad');
            $table->decimal('current_price', 12, 2)->default(0)->comment('precio_actual');
            $table->decimal('old_price', 12, 2)->default(0)->comment('precio_anterior');
            $table->unsignedInteger('discount')->default(0)->comment('porcentaje_descuento');
            $table->text('short_description')->comment('descripcion_corta');
            $table->text('long_description')->comment('descripcion_larga');
            $table->text('details')->comment('especificaciones');
            $table->text('data_of_interest')->comment('datos_de_interes');
            $table->unsignedBigInteger('views')->default(0)->comment('visitas');
            $table->unsignedBigInteger('sales')->default(0)->comment('ventas');
            $table->string('status')->comment('estado');
            $table->char('active', 2)->comment('activo');
            $table->char('featured', 2)->comment('slideprincipal');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

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
