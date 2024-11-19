<?php

namespace App\Livewire\Shop;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function render() {
        $productQuery = Product::get();

        return view('livewire.shop.app', [
            'products' => $productQuery,
        ])
            ->layout('layouts.app');
    }
}
