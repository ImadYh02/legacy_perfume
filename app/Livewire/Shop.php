<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Title('Products - Perfum Shop')]

class Shop extends Component {
    #[Url]

    // Put the Selected Categories in this Array 
    public $selected_categories = [];

    public $minPrice;
    public $maxPrice;

    public $selectedMinPrice;
    public $selectedMaxPrice;

    public function mount() {
        $this->minPrice = Product::min('price');
        $this->maxPrice = Product::max('price');

        $this->selectedMinPrice = $this->minPrice;
        $this->selectedMaxPrice = $this->maxPrice;
    }

    public function render() {
        // $productQuery = Product::get();
        $productQuery = Product::whereBetween('price', [$this->selectedMinPrice, $this->selectedMaxPrice])->get();

        if (!empty($this->selected_category)) {
            $productQuery->whereIn('category_id', $this->selected_categories);
        }
        $categories = Category::where('is_active', 1)->get();

        return view('livewire.shop', [
            'products' => $productQuery,
            'categories' => $categories,
        ])
            ->layout('layouts.app');
    }
}
