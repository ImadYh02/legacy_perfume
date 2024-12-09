<?php

namespace App\Livewire;

use App\Models\Product;
use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use Livewire\Attributes\Title;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

#[Title('Product Detail - Perfume Shop')]

class ProductDetails extends Component {
    use LivewireAlert;

    public $slug;
    public $quantity = 1;

    public function mount($slug) {
        $this->slug = $slug;
    }

    public function increaseQty() {
        $this->quantity++;
    }

    public function decreaseQty() {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    # Add Product to Cart Method
    public function addToCart($product_id) {
        if ($this->quantity >= 1) {
            $total_count = CartManagement::addItemToCartWithQty($product_id, $this->quantity);

            $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);

            $this->alert('success', 'Product Adderd to Cart Successfuly!', [
                'position' => 'center-center',
                'timer' => 3000,
                'toast' => true,
            ]);
        } else {
            $this->alert('warning', 'Select How Many Piece You Want!', [
                'position' => 'center-center',
                'timer' => 3000,
                'toast' => true,
            ]);
        }
    }

    public function render() {
        return view('livewire.product-details', [
            'product' => Product::where('slug', $this->slug)->firstOrFail(),
        ])
            ->layout('layouts.app');
    }
}
