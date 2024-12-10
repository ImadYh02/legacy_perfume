<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Shop;
use App\Livewire\Cart;
use App\Livewire\Checkout;
use App\Livewire\ProductDetails;

Route::get('/', Home::class);

Route::get('/shop', Shop::class);

// Route::get('/shop', function() {
//     return view('livewire.shop.app');
// });

Route::get('/track-order', function() {
    return view('livewire.track-order');
});

Route::get('/contact', function() {
    return view('livewire.contact');
});

Route::get('/shop/{slug}', ProductDetails::class);

Route::get('/cart', Cart::class);

Route::get('/checkout', Checkout::class);

Route::get('/checkout/order-received', function() {
    return view('livewire.order-confirmation');
});