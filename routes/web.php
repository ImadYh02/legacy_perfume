<?php

use App\Livewire\Home\index;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('livewire.home.app');
});

Route::get('/shop', function() {
    return view('livewire.shop.app');
});

Route::get('/track-order', function() {
    return view('livewire.track-order.app');
});

Route::get('/contact', function() {
    return view('livewire.contact.app');
});

Route::get('/shop/detail', function() {
    return view('livewire.shop.product-details');
});

Route::get('/cart', function() {
    return view('livewire.shop.cart');
});

Route::get('/shop/checkout', function() {
    return view('livewire.shop.checkout');
});

Route::get('/checkout/order-received', function() {
    return view('livewire.track-order.order-confirmation');
});