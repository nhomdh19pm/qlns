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
            $table->increments('id');
            $table->unsignedInteger('nhanvien_id');
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
            $table->foreign('nhanvien_id','fk_nhanluong_nhanvien_id')->references('id')->on('nhanvien')->onUpdate('CASCADE');
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
        Schema::table('nhanluong', function(Blueprint $table)
        {
            $table->dropForeign('fk_nhanluong_nhanvien_id');
            $table->dropColumn('nhanvien_id');
        });
        Schema::dropIfExists('nhanluong');
    }
}
