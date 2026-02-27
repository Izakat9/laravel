<?php
	namespace App\Http\Controllers;
	class UserController extends Controller 
		{

		public function all()
		{	return "Это для задания 3 "; }

		
		public function show()
		{	return "Это для задания 2 "; }


		public function show2()// для задания 5 \практика 4
		{	return view('Zakat9/zakat', ['name' => 'Магомед', 'surname' => 'Ахмедов']);	}


		public function show3()// для задания 7,8,9 \практика 4
		{	return view('Zakat9.three'); }

		public function show4() // для задания 10 && 11 \практика 4
		{
			return view('Zakat9.three',[
				'title1' => 'Первый ',
				'title2' => 'Второй ',
				'title3' => 'Третий ',
			]);
		}


	public function SixSeven($name, $surname='X')
		{
			$user2 = [
				'Ivan' => 'Иван',
				"Bob" => 'Боб',
				"Lisa" => 'Лиса',
				"Samira" => 'Самира',
				"Petr" => 'Петр',
			];
			
			$user1 = [
				'B' => 'Бобров ',
				"O" => 'Ответствен ',
				"X" => 'Хакари ',
				"F" => 'Френч ',
				"H" => 'Никак ',
			];

		
			
			return $user1[$surname].$user2[$name];
		}
	

		
	public function Name($surname='X')
		{

		$users = [
		'user1' => 'city1',
		'user2' => 'city2',
		'user3' => 'city3',
		'user4' => 'city4',
		'user5' => 'city5',
	];
			return $users[$surname] ?? 'Такого имени нету';
		}
 
	}
	