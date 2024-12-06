<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public function render() {
        $categories = Category::where('is_active', 1)->get();

        $productQuery = Product::where('is_featured', 1)->get();

        return view('livewire.home', [
            'categories' => $categories,
            'products' => $productQuery,
        ])
            ->layout('layouts.app');
    }
}
