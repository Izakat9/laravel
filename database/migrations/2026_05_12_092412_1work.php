<?php
namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; 

 class PostController extends Controller
	{
		public function show()
		{
			$posts = DB::table('users2')->get();
			dump($posts);
		}
	};
