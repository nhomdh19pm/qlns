<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mucluong_id');
            $table->unsignedInteger('bangcap_id');
            $table->unsignedInteger('chuyenmon_id');
            $table->unsignedInteger('ngoaingu_id');
            $table->unsignedInteger('dantoc_id');
            $table->unsignedInteger('tongiao_id');
            $table->string('hovaten', 100);
            $table->boolean('gioitinh')->default(false);
            $table->date('ngaysinh');
            $table->string('cmnd', 50);
            $table->string('sdt', 15);
            $table->string('diachi', 255)->nullable();
            $table->string('quequan', 255)->nullable();
            $table->boolean('trangthai')->default(false);
            $table->date('ngaynghilam')->nullable();
            $table->float('hesoluong', 5, 2);
            $table->string('photo_path', 100)->nullable();
            $table->timestamps();
            $table->foreign('mucluong_id','fk_nhanvien_mucluong_id')->references('id')->on('mucluong')->onUpdate('CASCADE');
            $table->foreign('bangcap_id','fk_nhanvien_bangcap_id')->references('id')->on('bangcap')->onUpdate('CASCADE');
            $table->foreign('chuyenmon_id','fk_nhanvien_chuyenmon_id')->references('id')->on('chuyenmon')->onUpdate('CASCADE');
            $table->foreign('ngoaingu_id','fk_nhanvien_ngoaingu_id')->references('id')->on('ngoaingu')->onUpdate('CASCADE');
            $table->foreign('dantoc_id','fk_nhanvien_dantoc_id')->references('id')->on('dantoc')->onUpdate('CASCADE');
            $table->foreign('tongiao_id','fk_nhanvien_tongiao_id')->references('id')->on('tongiao')->onUpdate('CASCADE');
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
        Schema::table('nhanvien', function(Blueprint $table)
        {
            $table->dropForeign('fk_nhanvien_mucluong_id');
            $table->dropForeign('fk_nhanvien_bangcap_id');
            $table->dropForeign('fk_nhanvien_ngoaingu_id');
            $table->dropForeign('fk_nhanvien_chuyenmon_id');
            $table->dropForeign('fk_nhanvien_dantoc_id');
            $table->dropForeign('fk_nhanvien_tongiao_id');
            $table->dropColumn('mucluong_id');
            $table->dropColumn('bangcap_id');
            $table->dropColumn('chuyenmon_id');
            $table->dropColumn('ngoaingu_id');
            $table->dropColumn('dantoc_id');
            $table->dropColumn('tongiao_id');
        });
        Schema::dropIfExists('nhanvien');
    }
}
