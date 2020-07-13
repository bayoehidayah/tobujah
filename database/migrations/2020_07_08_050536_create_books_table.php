<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer("category_id");
            $table->integer("penulis_id");
            $table->integer("penerbit_id");
            $table->string("judul");
            $table->text("sinopsis");
            $table->string("noisbn");
            $table->integer("tahun");
            $table->integer("stok");
            $table->integer("harga_pokok");
            $table->integer("harga_jual");
            $table->float("ppn");
            $table->float("diskon");
            $table->string("gambar");
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
        Schema::dropIfExists('books');
    }
}
