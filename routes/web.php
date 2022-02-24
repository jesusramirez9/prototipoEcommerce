<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WebhooksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Livewire\CreateOrder;
use App\Http\Livewire\PaymentOrder;
use App\Http\Livewire\ShoppingCart;
use App\Http\Livewire\ShowPost;
use App\Models\Order;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('search', SearchController::class)->name('search');

Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');

    Route::get('orders/create', CreateOrder::class)->name('orders.create');

    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');


    // Route::get('orders/{order}/payment', [OrderController::class,'payment'])->name('orders.payment');

    Route::get('orders/{order}/payment', PaymentOrder::class, 'payment')->name('orders.payment');

    Route::post('orders/{order}/payment', PaymentOrder::class, 'store')->name('orders.store');

    Route::post('orders/{order}/pay', [OrderController::class, 'pay'])->name('orders.pay');

    Route::post('webhooks', WebhooksController::class);



});



Route::get('conocenos', function () {
    return view('web.conocenos');
})->name('conocenos');

// Route::get('servicios', function () {
//     return view('web.servicios');
// })->name('servicios');

Route::get('noticia', function(){
    return view('web.noticias');
})->name('noticia.show');

Route::get('servicios', function(){
    return view('web.service');
})->name('servicios');

Route::get('contactanos',[ContactoController::class, 'index'])->name('contacto');

Route::post('contactanos',[ContactoController::class, 'store'])->name('contacto.store');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
    $userExist = User::where('external_id', $user->id)->where('external_auth', 'google')->firts();
    if($userExist){
        Auth::login($userExist);
    }else{
      $userNew =  User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google'
        ]);

        Auth::login($userNew);
    }

    return redirect('/');
});


// Route::middleware([' ', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
