<?php

use App\Http\Controllers\TokobukuController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Tokobuku;
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
//     return view('welcome', ["title"=> "Toko Buku"]);
// });

Route::get('/', function () {
    return view('home', [
        "tokobukus" => Tokobuku::all()
    ]);
})->middleware(['auth']);

Route::get('/', function () {
    return view('home', [
        "tokobukus" => [
            [
                'id' => '1',
                'nama' => 'Sang Pemimpi',
                'jenis' => 'fiksi',
                'harga' => '30000',
                'foto' => 'Sang Pemimpi.jpg'
            ],
            [
                'id' => '2',
                'nama' => 'Laskar Pelangi',
                'jenis' => 'fiksi',
                'harga' => '115000',
                'foto' => 'Laskar Pelangi.jpg'
            ],
            [
                'id' => '3',
                'nama' => 'Perahu Kertas',
                'jenis' => 'fiksi',
                'harga' => '40000',
                'foto' => 'Perahu Kertas.jpg'
            ],
        ]
    ]);
});
    


// Route::get('/login', function () {
//     return view('Login', [
//         'title' => 'Halaman Login'
//     ]);
// })->name('login');

Route::get('/user/{nama}', function ($name) {
    return 'Halo ' . $name;
    });

Route::get('/login', [AuthController::class,
    'loginView'])->name("login");
    
Route::post('/action-login', 
    [AuthController::class, 'actionLogin']);

Route::get('/register', function (){
    return view('register');
})->name("register");

Route::post('/action-register', 
[AuthController::class, 'actionRegister']);

Route::post('login', [AuthController::class, 'getLogin']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/tokobuku', [TokobukuController::class, 'index'])->name('tokobuku.index');
Route::get('/tokobuku/create', [TokobukuController::class, 'create'])->name('tokobuku.create');
Route::post('/tokobuku', [TokobukuController::class, 'store'])->name('tokobuku.store')->middleware('auth');
Route::get('/tokobuku/show/{id}', [TokobukuController::class, 'show'])->name('tokobuku.show')->middleware('auth');