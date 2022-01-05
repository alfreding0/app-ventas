<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->float('precio_unitario');
            $table->timestamps();

            $table->unsignedBigInteger('id_venta');
            $table->foreign('id_venta')->references('id')->on('venta')->cascadeOnUpdate()->cascadeOnDelete();

            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('producto')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_venta');
    }
}
