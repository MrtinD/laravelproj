<?php
/*
/Това го ползваме , за да не пишем app\task:: а вместо пишем task::
/use App\Task;
*/



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/users/{id}', function ($id) {
//     return "This is user ".$id;
// });

Route::get('/', 'PostsController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

//Функцията казва като напишеш в url нещо си завършващо на /tasks ми върни от сървъра файла pages/tasks

//като аргумент предаваме какво да стане на този URL
// Route::get('/tasks',function(){
//     //на този адрес правим заявка до базата като го заредим
//     $tasks = DB::table('tasks')->get();
//     $name="Martin";
//     $manames=[
//         'Martin',
//         'Viktorov',
//         'Dekov',
//     ];
//     //връшаме файла съдържащ и променлива $tasks == 'tasks' като в файла намиращ се в pages/tasks също трябва да се казва $tasks
//     return view('pages/tasks/index',compact('tasks','name','manames'));;


// });

//Прави същото като горната функция, но с elequent и модел Tasks.php
// Route::get('/tasks',function(){
//     За разлика от горе използваме модела Task в namespace App и метода му app
//     $tasks = App\Task::all();
//     $name="Martin";
//     $manames=[
//         'Martin',
//         'Viktorov',
//         'Dekov',
//     ];
//     //връшаме файла съдържащ и променлива $tasks == 'tasks' като в файла намиращ се в pages/tasks също трябва да се казва $tasks
//     return view('pages/tasks/index',compact('tasks','name','manames'));;
// });


// Route::get('tasks/{asd}',function($vaza){
//     $asd = App\Task::find($vaza);
//     //$asd=DB::table('tasks')->find($vaza);
//     //dd($asd);
//     return view('pages/tasks/show',compact('asd'));
// });
Route::get('tasks/{asd}','TasksController@show');
Route::get('post/{id}','PostsController@show');
Route::get('posts/create','PostsController@create');
//Route::resource('posts','PostsController');
Route::get('/posts','PostsController@index');
Route::post('/posts','PostsController@store');
Route::get('/tasks','TasksController@index');