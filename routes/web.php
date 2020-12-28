<?php

use Illuminate\Support\Facades\Route;

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
    
    $data = config('database_molisana');

    $long = [];
    $short = [];
    $veryShort = [];

    foreach ($data as $key => $card) {

        $card['id'] = $key;
        
        if( $card['tipo'] == 'lunga' ){

            $long[] = $card;
        }
        elseif( $card['tipo'] == 'corta' ){
            $short[] = $card;
        }
        elseif( $card['tipo'] == 'cortissima' ){
            $veryShort[] = $card;
        }
        
    }

    // dd($long, $short, $veryShort);
    

    return view('home', ['long' => $long, 'short' => $short, 'veryShort' => $veryShort ]);
})->name('home');

Route::get('/product/{id}', function ($id) {
    // dump($id);

    $data = config('database_molisana');
 
    $product = $data[$id];

    return view('product', ['product' => $product]);
      
})->name('product');

Route::get('/news', function () {
 
    return view('news');
      
})->name('news');