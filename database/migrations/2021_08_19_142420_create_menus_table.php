<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu', 50);
            $table->enum('level_menu', ['main_menu','sub_menu'])->nullable()->default('main_menu');
            $table->integer('master_menu')->nullable();
            $table->string('url')->nullable();
            $table->char('icon', 50)->nullable();
            $table->enum('aktif', ['Y','N'])->default('Y');
            $table->integer('nomor_urut');
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
        Schema::dropIfExists('menus');
    }
}
