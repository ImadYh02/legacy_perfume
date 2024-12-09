<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Cart - Perfum Shop')]

class Cart extends Component {
    public $cart_items = [];
    public $grand_total;
    public $original_total;
    public $savings;

    public function mount() {
        $this->cart_items = CartManagement::getCartItemsFromCookie();

        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->original_total = CartManagement::calculateOriginalTotal($this->cart_items);
        $this->savings = CartManagement::calculateSavings($this->cart_items);
    }

    public function removeItem($product_id) {
        $this->cart_items = CartManagement::removeCartItem($product_id);

        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->original_total = CartManagement::calculateOriginalTotal($this->cart_items);
        $this->savings = CartManagement::calculateSavings($this->cart_items);

        $this->dispatch('update-cart-count', total_count: count($this->cart_items))->to(Navbar::class);
    }

    public function render() {
        return view('livewire.cart')
            ->layout('layouts.app');
    }
}
