<?php
	namespace App\Http\Controllers;
	
		class PostController extends Controller
	{
		public function Name()
		{
			return view('Zakat9/zakat', ['name' => 'Магомед', 'surname' => 'Ахмедов']);
		}

	}


	
		
	
