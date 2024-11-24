<?php

namespace App\Livewire\Home;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class App extends Component
{
    public function render() {
        $categories = Category::where('is_active', 1)->get();

        $productQuery = Product::where('is_featured', 1)->get();

        return view('livewire.home.app', [
            'categories' => $categories,
            'products' => $productQuery,
        ])
            ->layout('layouts.app');
    }
}
