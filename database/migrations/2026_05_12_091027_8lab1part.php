<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
	{
	public function up(): void
	{
		Schema::create('posts3', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->string('slug');
			$table->integer('likes')->default(0);
			$table->timestamps(); 
		});
	}

		public function down()
		{
			Schema::dropIfExists('posts3');
		}
	};
