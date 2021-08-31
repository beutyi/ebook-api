<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

// // string 
// Route::get('/me',function(){
//     return 'beuty';
// });

// // array
// Route::get('/me', function(){
//     return['Beauty','iklima','KK4B','12 RPL 2'];
// });

// //route array ->json
// Route::get('/me',function(){
//     return response()->json(
//         [
//         'nama' => 'Beauty iklima maryam',
//         'kelas' => '12 RPL 2'
//         ]
//         );
// });

//rederec ke yang lainya  home page
//Route::get('/me', function(){
//    return redirect('/');
// });

//buat routh tugas 
Route::get('/me',[AuthController::class, 'me']);