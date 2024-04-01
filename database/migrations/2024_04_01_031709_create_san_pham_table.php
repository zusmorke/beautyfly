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
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('sanpham_id');
            $table->string('ten', 255);
            $table->string('mota', 255);
            $table->decimal('gia', 10, 2);
            $table->decimal('sale', 10, 2);
            $table->string('hinh', 255)->nullable();
            $table->integer('soluongtrongkho');
            $table->integer('soluongdaban')->default(0);
            $table->unsignedInteger('danhmucsp_id');
            $table->foreign('danhmucsp_id')->references('danhmucsp_id')->on('danh_muc_sp');
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
        Schema::dropIfExists('san_pham');
    }
};