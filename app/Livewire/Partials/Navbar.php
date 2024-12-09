<?php

namespace App\Livewire\Partials;

use App\Helpers\CartManagement;
use Livewire\Attributes\On;
use Livewire\Component;

class Navbar extends Component {
    public $total_count = 0;
    
    public $cart_items = [];
    public $grand_total;

    public function mount() {
        $this->total_count = count(CartManagement::getCartItemsFromCookie());
        
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }

    #[On('update-cart-count')]
    public function updateCartCount($total_count) {
        $this->total_count = $total_count;
        $this->cart_items = CartManagement::getCartItemsFromCookie();
    }

    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
