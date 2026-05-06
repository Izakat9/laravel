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
	
	public function Z2223()
		{ 	$muss = [ 
				'0' => 'Moskow',
				'1' => 'Omsk',
				'2' => 'Astana',
							 ];
			return view('Zakat9.p5.p52223', ['muss'=>$muss] ); }

	public function Z24()
		{ 	$muss = [ 
				1, 2, 3, 4 , 5, 6, 7, 8, 9, 10
							 ];
			return view('Zakat9.p5.p524', ['muss'=>$muss] ); }

	public function Z25()
		{ 	$data = [ 1, 2, 3, 4, 5 ]; 
		// 1 or 2
		    $data = 67; 
			return view('Zakat9.p5.p525', ['data'=>$data] ); }

	public function Z26()
		{ 	$muss = [
        [ 1, 2, 3 ],
        [ 4, 5, 6 ],
    	[ 7, 8, 9 ]
		];
		    
			return view('Zakat9.p5.p526', ['muss'=>$muss] ); }

	public function Z2728()
{
    $employees = [
        ['name' => 'user1', 'surname' => 'surname1', 'salary' => 1000],
        ['name' => 'user2', 'surname' => 'surname2', 'salary' => 2000],
        ['name' => 'user3', 'surname' => 'surname3', 'salary' => 3000],
    ];
			return view('Zakat9.p5.p527',['employees' => $employees]); }
	public function Z29()
{
    $WW = [ 
		'User1',
		'User2',
		'User3',
		'User4',
		'User5',
	];
			return view('Zakat9.p5.p529',['WW' => $WW]); }

	public function Z3031()
{
    $WW = [ 
		'Именительный падеж',
		'Родительный падеж',
		'Дательный падеж',
		'Винительный падеж',
		'Творительный падеж',
		'Предложный падеж',
	];
			return view('Zakat9.p5.p53031',['WW' => $WW]); }
	public function Z32()
{
    $WW = [ 
		'Именительный падеж',
		'Родительный падеж',
		'Дательный падеж',
		'Винительный падеж',
		'Творительный падеж',
		'Предложный падеж',
	];
			return view('Zakat9.p5.p532',['WW' => $WW]); }
	
			public function Z33()
{
    $WW = [ 
		1, 2, 3, 4, 5, 6, 7, 8, 9
	];
			return view('Zakat9.p5.p533',['WW' => $WW]); }
			
			public function Z34()
{
    $WW = [
	];
			return view('Zakat9.p5.p534',['WW' => $WW]); }
		
			public function Z35()
{
    $WW = [ 
		1, 0, 2, 0, 3, 0, 4, 0, 5, 0, 6, 0, 7, 0, 8, 9
	];
			return view('Zakat9.p5.p535',['WW' => $WW]); }
		
			public function Z36()
{  
			return view('Zakat9.p5.p536',[]); }
		


    }
        