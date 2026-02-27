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
		{   $c52 = 'color:blue';
        return view('Zakat9.css', ['c52'=>$c52]);		        
        }
		

		public function z3()
		
		{   
			$c52 = 'color:blue';
		    $c54 = 'color:red';
		    $c55 = 'color:blue';
			$c56 = 'color:green';
        return view('Zakat9.p53-55', ['c52'=>$c52, 'c54'=>$c54, 'c55'=> $c55, 'c56'=>$c56] );		        
        }


		public function z4()
		
		{   
			$c52 = 'color:blue';
		    $c54 = 'color:red';
		    $c55 = 'color:blue';
			$c56 = 'color:green';
        return view('Zakat9.p53-55', ['c52'=>$c52, 'c54'=>$c54, 'c55'=> $c55, 'c56'=>$c56] );		        
        }
    
		public function Z()
		
		{   $c52 = 'color:blue';
		    $c54 = 'color:red';
		    $c55 = 'color:blue';
			$c56 = 'color:green';
			$text = 'Ссылка в главное меню';
		   	$href = 'http://ufzhdut-m1.prof.ru/public/';
         return view('Zakat9.p53-55', ['text'=>$text,'href'=>$href,'c52'=>$c52, 'c54'=>$c54, 'c55'=> $c55, 'c56'=>$c56] );		        
        }
    






    }
        