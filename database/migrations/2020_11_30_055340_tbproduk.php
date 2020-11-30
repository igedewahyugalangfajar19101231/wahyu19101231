<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbproduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('produks', function(Blueprint $tb){
            $tb->ID();
            $tb->string('NAMA') [20];
            $tb->integer('ID_KATEGORI');
            $tb->float('HARGA_BELI');
            $tb->float('HARGA_JUAL');
            $tb->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('produks');
    }
}
