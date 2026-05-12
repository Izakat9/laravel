<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
	{
		public function up()
		{
		 Schema::create('mi12', function (Blueprint $table) {
        $table->id(); 
        $table->string('title'); 
    });
		}
		
		public function down()
		{
			Schema::dropIfExists('mi12');
		}
	}  // php artisan migrate:rollback --step=2 - для отката миграции на 2 шага назад
?>
