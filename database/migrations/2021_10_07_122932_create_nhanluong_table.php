<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanluongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanluong', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nhanvien_id')->constrained('nhanvien');
            $table->integer('luongcb');
            $table->float('hesoluong', 5, 2);
            $table->float('phucap', 5, 2);
            $table->integer('songaycong');
            $table->integer('nghihl');
            $table->integer('nghikhl');
            $table->integer('thuong');
            $table->integer('phat');
            $table->integer('tamung');
            $table->integer('khautru');
            $table->integer('thang');
            $table->integer('nam');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanluong');
    }
}
