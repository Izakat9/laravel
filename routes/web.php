<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User2Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/vasya', function() {
    return 'petya';
}); 

// Route::get('/', function() {
//     return '!!!';
// });

 Route::get('/',function() {
    return 'это главная страница';
}); 

 Route::get('/posts',function(){
    return 'список постов';
}); 

 Route::get('/post/1', function(){
    return 'первый пост';
}); 

 Route::get('/post/{id}',function(){
    return'';
}); 



//N1
Route::get('/test', function (){
    return 'Ошибок нет1';
});

//N2
Route::get('/dir/test', function (){
    return 'Дир вверх2';
});

//N3
Route::get('/user/{str}', function($str){
    return 'Sap3'.$str;
});

//N4 
Route::get('/user/{surname}/{name}', function($surname,$name){
    return 'Sap4 '.$surname.' '.$name;
});

//N5 
Route::get('/city/{city?}', function($city='Omsk') {
    return 'Welcome in 5'.$city;
});

//N6
Route::get('/user6/{id}', function($id) {
    return 'Bablegum 6'.$id;
})->where('id','[0-9]+');




// W O R K    3     Контроллеры в Laravel 

// N 1
Route::get('/post31', [UserController::class, 'show']);

 
// N 2
Route::get('/user32', [UserController::class, 'show']);

// N 3
Route::get('/user33/all', [UserController::class, 'all']);

// N 4
// php artisan make:controller ArticleController

// N 5
// php artisan make:controller CategoryController

// N 6 and 7

Route::get('/67/{name}', [UserController::class, 'SixSeven']);

Route::get('/67/{name}/{surname?}', [UserController::class, 'SixSeven']);

// N 8
// A && B
Route::get('/38/{name}', [UserController::class, 'Name']);





///////////////////////////////////////////////////////////////////////////////////
//////////////// П Р А К Т И К А     Н О М Е Р     4 //////////////////////////////
///////////////////////////////////////////////////////////////////////////////////


// N 1 and 2
Route::get('/412', [PostController::class, 'Name']);

// N 3
Route::get('/43', [PostController::class, 'Name']);

// N 4
Route::get('/44', [PostController::class, 'Name']);

// N 5
Route::get('/45', [UserController::class, 'show2']);

// N 6
Route::get('/', [UserController::class, 'show2']);

// N 7, 8, 9
Route::get('/78and9', [UserController::class, 'show3']);

// N 10 && 11
Route::get('/10and11', [UserController::class, 'show4']);






///////////////////////////////////////////////////////////////////////////////////
//////////////// П Р А К Т И К А     Н О М Е Р     5 //////////////////////////////
///////////////////////////////////////////////////////////////////////////////////


// N 1
Route::get('/51', [User2Controller::class, 'z1']);

// N 2
Route::get('/52', [User2Controller::class, 'z2']);

// N 3, 4, 5 все в одном
Route::get('/5345', [User2Controller::class, 'Z345']);

// N 6
Route::get('/56', [User2Controller::class, 'Z6']);

// N 7
Route::get('/57', [User2Controller::class, 'Z7']);

// N 8
Route::get('/58', [User2Controller::class, 'Z8']);

// N 9
Route::get('/59', [User2Controller::class, 'Z9']);

// N 10
Route::get('/510', [User2Controller::class, 'Z10']);

// N 11
Route::get('/511', [User2Controller::class, 'Z11']);

// N 12 && N 13
Route::get('/51213', [User2Controller::class, 'Z1213']);

// N 14, 15, 16
Route::get('/5141516/{age}', [User2Controller::class, 'Z141516']);

// N 17
Route::get('/517/{age}', [User2Controller::class, 'Z17']);

// N 18
Route::get('/518', [User2Controller::class, 'Z18']);

// N 19
Route::get('/519', [User2Controller::class, 'Z19']);

// N 20, 21
Route::get('/52021', [User2Controller::class, 'Z2021']);

// N 22, 23
Route::get('/52223', [User2Controller::class, 'Z2223']);

// N 24
Route::get('/524', [User2Controller::class, 'Z24']);

// N 25
Route::get('/525', [User2Controller::class, 'Z25']);

// N 26
Route::get('/526', [User2Controller::class, 'Z26']);


// N 27 28
Route::get('/527', [User2Controller::class, 'Z2728']);

// N 29
Route::get('/529', [User2Controller::class, 'Z29']);

