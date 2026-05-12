<?php
	namespace App\Http\Controllers;
use Illuminate\Support\Collection;
class p7Controller extends Controller
{ 

class CreatePostsTable extends Migration
	{
		public function up()
		{
			Schema::create('posts', function (Blueprint $table) {
				$table->id();
				$table->string('name');
				$table->text('text');
			});
		}
	
		public function down()
		{
			Schema::dropIfExists('posts');
		}
	}
?>





} //end 