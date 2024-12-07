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
    public $selected_categories = [];

    #[Url]
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
    
    #[Url]
    public $sort = 'newest';

    public function render() {
        $categories = Category::where('is_active', 1)->get();

        $productQuery = Product::query()->where('is_active', 1);

        if (!empty($this->selected_categories)) {
            $productQuery->whereIn('category_id', $this->selected_categories);
        }

        if (!empty($this->selectedMinPrice) || ($this->selectedMaxPrice)) {
            $productQuery->whereBetween('price', [$this->selectedMinPrice, $this->selectedMaxPrice]);
        }

        if ($this->sort == "featured") {
            $productQuery->where('is_featured', 1);
        } elseif ($this->sort == "low_to_high") {
            $productQuery->orderBy('price', 'asc');
        } elseif ($this->sort == "high_to_low") {
            $productQuery->orderBy('price', 'desc');
        } elseif ($this->sort == "newest") {
            $productQuery->latest();
        }

        return view('livewire.shop', [
            'products' => $productQuery->get(),
            'categories' => $categories,
        ])
            ->layout('layouts.app');
    }
}
