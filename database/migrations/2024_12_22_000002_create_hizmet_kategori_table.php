<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHizmetKategoriTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hizmet_kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('parent_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('hizmet_kategori');
    }
};
