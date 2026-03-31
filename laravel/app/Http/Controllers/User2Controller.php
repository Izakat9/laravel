<?php
	namespace App\Http\Controllers;
	class User2Controller extends Controller 
		{

		public function z1()
		{  
            return view('Zakat9.p5.p5',[
                'name' => 'Мага',
			    'age' => 22,
			    'salary' => '2222$',
        ]);
        }
		public function z2()
		{   $c52 = 'color:blue';
        return view('Zakat9.p5.css', ['c52'=>$c52]);		        
        }
		

    
		public function Z345()
		
		{   $c52 = 'color:blue';
		    $c54 = 'color:red';
		    $c55 = 'color:blue';
			$c56 = 'color:green';
			$text = 'Ссылка в главное меню';
		   	$href = 'http://ufzhdut-m1.prof.ru/public/';
         return view('Zakat9.p5.p5345', ['text'=>$text,'href'=>$href,'c52'=>$c52, 'c54'=>$c54, 'c55'=> $c55, 'c56'=>$c56] );		        
        }


		public function Z6()
		
		{   
			$date='';
         return view('Zakat9.p5.p56', ['date'=>$date] );		        
        }
    
	public function Z7()
		
		{   
           return view('Zakat9.p5.p57', 
		  	['users' => [
			[ 	"name" => 'Алина',
				"age" => 19,
				"salary" => '47500' ] ,

			[ 	"name" => 'Алиса',
				"age" => 18,
				"salary" => '45000' ] , 

			[ 	"name" => 'Алёна',
				"age" => 20,
				"salary" => '50000' ] 
				  ]
            ]);
		    }
	public function Z8()
		
		{   
           return view('Zakat9.p5.p58', 
		  	[
			'users' =>
			  [1,2,3,4,5,6,7,8,9]
            ]);
		    }
	public function Z9($city='Москва')
		{

		$city = [
		'Москва',
		'Омск',
		'Севостополь',
		'Краснодар',
		'Волгоград',
		'Амстердам'
	];
			return view('Zakat9.p5.p59', ['city'=>$city]);
		}


	public function Z10($city='Москва', $country = 'Россия')
		{

		$location  = [
			[
			'country' => $country??'Россия',
			],
			[
			'country' => 'Китай',
			'city'=> 'Шанхай',
			],
			[
			'city'=> 'Шанхай'
			],
				];
			return view('Zakat9.p5.p510', ['location'=>$location]);
		}

	public function Z11($year = null, $month = null, $day = null)
		{ 
 
			$year = $year ?? date('y') ;
			$month = $month ?? date('m')  ;
			$day = $day ?? date('d') ;

			return view('Zakat9.p5.p511', ['year' => $year, 'month' => $month , 'day'=>$day]);
		}


	public function Z1213()
		{ 
			$str = 'My hero... <b>XXXtentancion</b>';
			return view('Zakat9.p5.p51213', ['str' => $str] );
		}

	public function Z141516($age)
		{ 
			return view('Zakat9.p5.p5141516', ['age'=>$age] );
		}

	public function Z17($age)
		{ 
			return view('Zakat9.p5.p517', ['age'=>$age] );
		}

	public function Z18()
		{ 	$muss = [ 1, 2, 3, 4, 5, 6, 7, 8, 9 ];
			return view('Zakat9.p5.p518', ['muss'=>$muss] ); }

	public function Z19()
		{ 	$muss = [ 1, 2, 3, 4, 5, 6, 7, 8, 9 ];
			return view('Zakat9.p5.p519', ['muss'=>$muss] ); }

	public function Z2021()
		{ 	$ss = [ 1, 2, 3, 4, 5, 6, 7, 8, 9 ];
			$muss = [ 4, 16, 25, 36, 49, 64, 81, 100, 121 ];
			return view('Zakat9.p5.p52021', ['muss'=>$muss, 'ss'=>$ss ] ); }
	
	public function Z22()
		{ 	$muss = [ 
			
			 ];
			return view('Zakat9.p5.p519', ['muss'=>$muss] ); }



    }
        