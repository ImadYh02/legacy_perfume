<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Product Detail - Perfume Shop')]

class ProductDetails extends Component {
    public $slug;

    public function mount($slug) {
        $this->slug = $slug;
    }

    public function render() {
        return view('livewire.product-details', [
            'product' => Product::where('slug', $this->slug)->firstOrFail(),
        ])
            ->layout('layouts.app');
    }
}
