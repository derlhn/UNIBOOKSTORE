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
        Schema::create('data_penerbit', function (Blueprint $table) {
            $table->id     ('ID_Penerbit');
            $table->string ('Nama');
            $table->string ('Alamat');
            $table->string ('Kota');
            $table->integer('Telepon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_penerbit');
    }
};
