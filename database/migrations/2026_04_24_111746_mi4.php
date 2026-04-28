<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
		{
			Schema::create('posts4', function (Blueprint $table) {
			    $table->increments('id');
			    $table->string('Name');
                $table->string('name_s', 300);
                $table->date('created_at');
			});
		}
	
		public function down()
		{
			Schema::dropIfExists('posts4');
		}
};
