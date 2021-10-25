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
            $table->id();
            $table->foreignId('mucluong_id')->constrained('mucluong');
            $table->foreignId('bangcap_id')->constrained('bangcap');
            $table->foreignId('chuyenmon_id')->constrained('chuyenmon');
            $table->foreignId('ngoaingu_id')->constrained('ngoaingu');
            $table->foreignId('dantoc_id')->constrained('dantoc');
            $table->foreignId('tongiao_id')->constrained('tongiao');
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
        
        Schema::dropIfExists('nhanvien');
    }
}
