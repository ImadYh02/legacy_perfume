<?php

namespace App\Livewire\Shop;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render() {
        $productQuery = Product::get();

        $categories = Category::where('is_active', 1)->get();

        return view('livewire.shop.app', [
            'products' => $productQuery,
            'categories' => $categories,
        ])
            ->layout('layouts.app');
    }
}
