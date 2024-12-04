<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home\App;
use App\Livewire\Shop\Index;
use App\Livewire\Shop\ProductDetails;

Route::get('/', App::class);

Route::get('/shop', Index::class);

// Route::get('/shop', function() {
//     return view('livewire.shop.app');
// });

Route::get('/track-order', function() {
    return view('livewire.track-order.app');
});

Route::get('/contact', function() {
    return view('livewire.contact.app');
});

Route::get('/shop/{slug}', ProductDetails::class);

Route::get('/cart', function() {
    return view('livewire.shop.cart');
});

Route::get('/checkout', function() {
    return view('livewire.shop.checkout');
});

Route::get('/checkout/order-received', function() {
    return view('livewire.track-order.order-confirmation');
});