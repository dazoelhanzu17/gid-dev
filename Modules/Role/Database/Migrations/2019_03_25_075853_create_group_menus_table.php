<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user_group');
            $table->integer('id_menu');
<<<<<<< HEAD
            $table->string('role', 5)->nullable();
=======
            $table->string('role', 5);
>>>>>>> 420b9d3b97c7afd420f6cb1ac16db4a99d675365
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
        Schema::dropIfExists('group_menus');
    }
}
