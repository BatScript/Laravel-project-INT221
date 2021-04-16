<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/wpad', function () {
    return view('products', [
        'name' => 'wpad',
        'src1' => 'images/wpadmain.png',
        'srctxt1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id architecto unde dolore ratione earum veniam. Consequatur sunt voluptates architecto iste rem dolorem quam, vel praesentium expedita ullam, velit doloremque illo.',
        'src2' => 'images/wpadhands.png',
        'srctxt2' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id architecto unde dolore ratione earum veniam. Consequatur sunt voluptates architecto iste rem dolorem quam, vel praesentium expedita ullam, velit doloremque illo.'
    ]);
});

Route::get('/wphone', function() {
    return view('products', [
        'name' => 'wPhone',
        'src1' => 'images/wphonemain.png',
        'srctxt1' => 'lorem ipsum bla bla bla',
        'src2' => 'images/wphone.png',
        'srctxt2' => 'lorem ipsum bla bla bla 2'
    ]);
});

Route::get('/wbook', function() {
    return view('products', [
        'name' => 'wBook',
        'src1' => 'images/macbook.png',
        'srctxt1' => 'lorem ipsum bla bla bla',
        'src2' => 'images/macbook2.png',
        'srctxt2' => 'lorem ipsum bla bla bla 2'
    ]);
});

Route::post('form',[UsersController::class,'getData']);
Route::view('login', 'form');