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
        // migracion para crear foreing key entre provincias y ciudades
        Schema::table('ciudades', function (Blueprint $table) {
            $table->unsignedBigInteger('id_provincia')->nullable();
            $table->foreign('id_provincia')->references('id_provincia')->on('provincias')->onDelete('set null')->onUpdate('cascade');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ciudades', function (Blueprint $table) {
          $table->dropForeign('ciudades_id_provincia_foreign');
          $table->dropColumn('id_provincia');
        });

    }
};
