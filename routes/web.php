<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pelangganController;
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

Route ::get('/aboutus', function() {
    echo "Ini Merupakan Contoh Sebuah Page(page about)";
})->name ("tentang");

Route::get('/show/{id?}',function($id=1){
    echo "Parameter ID: ".$id;
})->where('id','[0-9]+');

Route::get('/utama',function(){
    echo "Ini Page Utama";
    echo "<br>";
    echo "<a href='".route ('tentang')."'>about</a>";
});
Route::get('/halaman',function(){
    $title = 'Harry Pooter';
    $konten = 'harry potter and the deathly hallows: part 2';
    return view('konten.halaman',compact('title','konten'));
});

Route::get ('/produk',[produkController::class ,'index']);

Route::get ('/produk/show',[produkController::class ,'show']);

Route::get ('/pelanggan',[pelangganController::class ,'index']);

