<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
		{
			Schema::create('posts5', function (Blueprint $table) {
			    $table->increments('id');
			    $table->string('User');
                $table->string('Surname', 30);
                $table->string('Lastname', 40);
                $table->date('Birst day');
                $table->dateTime('created_users');
			});
		}
	
		public function down()
		{
			Schema::dropIfExists('posts5');
		}
};
