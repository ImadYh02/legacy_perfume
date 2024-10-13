<?php

use App\Livewire\Home\index;
use Illuminate\Support\Facades\Route;

Route::get('/', index::class);

Route::get('/shop', function() {
    return view('livewire.shop.app');
});

Route::get('/track-order', function() {
    return view('livewire.track-order.app');
});

Route::get('/contact', function() {
    return view('livewire.contact.app');
});
