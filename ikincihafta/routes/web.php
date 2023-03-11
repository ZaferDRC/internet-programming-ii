<?php

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/haber/{id}-{islem}',function (int $id,string $islem) {

    // Kıvırcık parantezin içerisindekiler argüman.


    echo "$id numaralı haber içeriği $islem işlemi";

}); */


/*Route::prefix('hafta2') ->group(function () {  // Routeleri gruplamamızı sağladı. Yani hafta2'nin altından ulaşabiliyoruz diğerlerine.

    Route::get('/haber/{id?}',function (?int $id = null) {

        // Kıvırcık parantezin içerisindekiler argüman.
        // Soru işaretleri değerin null olabileceğini belirtir.

        echo "$id numaralı haber içeriği";

    });


    Route::get('/haber/{id?}',function (?int $id = null) {

        echo "$id numaralı haber içeriği";

    })->name("haber");   // buradaki name, php artisan route:list kısmında bu routenin isminin de listelenmesini sağlar.


    Route::get('/ornek',function () {

        return redirect() -> route('haber');   // routenin name'ini vererek bu route'nin oraya yönlenmesini sağlar.
    });

}); */

Route::prefix('member')->group(function (){

    //MemberController'da tanımladığımız fonksiyonlara member grubu altından belirtilen url'lerle(register,pass..)
    // erişiyoruz.

    Route::get('/register', [\App\Http\Controllers\MemberController::class, 'register']);
    Route::get('/pass', [\App\Http\Controllers\MemberController::class,'ForgotMyPass']);
    Route::get('/login', [\App\Http\Controllers\MemberController::class,'Login']);
});





