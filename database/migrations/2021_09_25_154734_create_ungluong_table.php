<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUngluongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ungluong', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nhanvien_id');
            $table->integer('sotien');
            $table->string('lydo', 255);
            $table->integer('thang');
            $table->integer('nam');
            $table->timestamps();
            $table->foreign('nhanvien_id','fk_ungluong_nhanvien_id')->references('id')->on('nhanvien')->onUpdate('CASCADE');
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
        Schema::table('ungluong', function(Blueprint $table)
        {
            $table->dropForeign('fk_ungluong_nhanvien_id');
            $table->dropColumn('nhanvien_id');
        });
        Schema::dropIfExists('ungluong');
    }
}
