<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\p6Controller;
use App\Http\Controllers\p7Controller;
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





///////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////// ^^ //////////////////////
///////////////                                       /////////////////////////////
///////////////  П Р А К Т И К А     Н О М Е Р     3  /////////////////////////////
///////////////                                       /////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////// 

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
///////////////////////////////////////////////////////// ^^ //////////////////////
///////////////                                       /////////////////////////////
///////////////  П Р А К Т И К А     Н О М Е Р     4  /////////////////////////////
///////////////                                       /////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
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






/////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////// ^^ ///////////////////////
////////////////                                        /////////////////////////////
////////////////   П Р А К Т И К А     Н О М Е Р    5   /////////////////////////////
////////////////                                        /////////////////////////////
////////////////                B L A D E               /////////////////////////////
////////////////             In   L A R A V E L         /////////////////////////////
////////////////                                        /////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////


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


// N 30 && 31
Route::get('/53031', [User2Controller::class, 'Z3031']);

// N 32
Route::get('/532', [User2Controller::class, 'Z32']);

// N 33 

Route::get('/533', [User2Controller::class, 'Z33']);

// N 34

Route::get('/534', [User2Controller::class, 'Z34']);

// N 35

Route::get('/535', [User2Controller::class, 'Z35']);

// N 36

Route::get('/536', [User2Controller::class, 'Z36']);


///////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////// ^^ //////////////////////
///////////////                                       /////////////////////////////
///////////////  П Р А К Т И К А     Н О М Е Р    6   /////////////////////////////
///////////////                                       /////////////////////////////
///////////////           К О Л Л Е К Ц И И           /////////////////////////////
///////////////                                       /////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////



//Sum. Суммирует числа в arr
Route::get('/63', action: [p6Controller::class, 'collect']);

//Avg. Среднее число между указанными в arr.
Route::get('/64', action: [p6Controller::class, 'avg']);

//Chunk. Разбивает коллекцию на несколько меньших коллекций указанного размера
Route::get('/65', action: [p6Controller::class, 'chunk']);

//ChunkWhile. Разбивает коллекцию на несколько меньших по размеру коллекций на основе результата переданного замыкания
Route::get('/66', action: [p6Controller::class, 'chunkwhile']);

//Collapse. Сворачивает коллекцию массивов в единую плоскую коллекцию
Route::get('/67', action: [p6Controller::class, 'collapse']);

//Combine. Объединяет значения коллекции в качестве ключей со значениями другого массива или коллекции
Route::get('/68', action: [p6Controller::class, 'combine']);

//Concat. Добавляет значения переданного массива или коллекции в конец другой коллекции
Route::get('/69', action: [p6Controller::class, 'concat']);

//CrossJoin. Перекрестно соединяет значения коллекции среди переданных массивов или коллекций, возвращая декартово произведение со всеми возможными перестановками
Route::get('/610', action: [p6Controller::class, 'crossjoin']);

//Diff. Сравнивает коллекцию с другой коллекцией или простым массивом PHP на основе его значений
Route::get('/611', action: [p6Controller::class, 'diff']);

//Dump. Выводит элементы коллекции
Route::get('/612', action: [p6Controller::class, 'dump']);

//Duplicates. Извлекает и возвращает повторяющиеся значения из коллекции
Route::get('/613', action: [p6Controller::class, 'duplicates']);

//Except. Возвращает все элементы из коллекции, кроме тех, которые имеют указанные ключи
Route::get('/614', action: [p6Controller::class, 'except']);

//Filter. Фильтрует коллекцию, используя переданное замыкание, сохраняя только те элементы, которые проходят указанный тест истинности
Route::get('/615', action: [p6Controller::class, 'filter']);

//Flatten. Объединяет многомерную коллекцию в одноуровневую
Route::get('/616', action: [p6Controller::class, 'flatten']);

//Flip. Меняет местами ключи коллекции на их соответстующие значения
Route::get('/617', action: [p6Controller::class, 'flip']);

//Forget. Удаляет элемент из коллекции по его ключу
Route::get('/618', action: [p6Controller::class, 'forget']);

//Get. Возвращает элемент по указанному ключу
Route::get('/619', action: [p6Controller::class, 'get']);

//Implode. Объединяет элементы коллекции
Route::get('/620', action: [p6Controller::class, 'implode']);

//Intersect. Удаляет любые значения из исходной коллекции, которых нет в указанном массиве или коллекции
Route::get('/621', action: [p6Controller::class, 'intersect']);

//KeyBy. Возвращает коллекцию, элементы которой будут образованы путем присвоения ключей элементам базовой коллекции
Route::get('/622', action: [p6Controller::class, 'keyby']);

//Keys. Возвращает все ключи коллекции
Route::get('/623', action: [p6Controller::class, 'keys']);

//Map. Выполняет итерацию по коллекции и передает каждое значение указанному замыканию
Route::get('/624', action: [p6Controller::class, 'map']);

//Max. Возвращает максимальное значение переданного ключа
Route::get('/625', action: [p6Controller::class, 'max']);

//Median. Возваращает медиану переданного ключа
Route::get('/626', action: [p6Controller::class, 'median']);

//Метод merge объединяет переданный массив или коллекцию с исходной коллекцией.
//Если строковый ключ в переданных элементах соответствует строковому ключу в исходной
//коллекции,то значение переданного элемента перезапишет значение в исходной коллекции:
Route::get('/627', action: [p6Controller::class, 'merge']);
// Если ключи переданных элементов являются числовыми, то значения будут добавлены в конец коллекции:
Route::get('/628', action: [p6Controller::class, 'merge2']);

// Метод mergeRecursive рекурсивно объединяет переданный массив или коллекцию с исходной коллекцией.
// Если строковый ключ в переданных элементах совпадает со строковым ключом в исходной коллекции, 
// тогда значения этих ключей объединяются в массив, и это делается рекурсивно:
Route::get('/629', action: [p6Controller::class, 'mergeRecursive']);
// Метод min возвращает минимальное значение переданного ключа:
Route::get('/630', action: [p6Controller::class, 'mergeRecursive2']);


///////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////// ^^ //////////////////////
///////////////                                       /////////////////////////////
///////////////  П Р А К Т И К А     Н О М Е Р     7  /////////////////////////////
///////////////                                       /////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////