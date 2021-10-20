<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamcongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamcong', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nhanvien_id');
            $table->timestamps();
            $table->foreign('nhanvien_id','fk_chamcong_nhanvien_id')->references('id')->on('nhanvien')->onUpdate('CASCADE');
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
        Schema::table('chamcong', function(Blueprint $table)
        {
            $table->dropForeign('fk_chamcong_nhanvien_id');
            $table->dropColumn('nhanvien_id');
        });
        Schema::dropIfExists('chamcong');
    }
}
