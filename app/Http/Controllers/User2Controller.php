<?php
	namespace App\Http\Controllers;
	class User2Controller extends Controller 
		{

		public function z1()
		{  
            return view('Zakat9.p5',[
                'name' => 'Мага',
			    'age' => 22,
			    'salary' => '2222$',
        ]);
        }
		public function z2()
		{   return view('Zakat9.css',[
			$css52 = 'blue';
		]);       
        }



    
    }
        