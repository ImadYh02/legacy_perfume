<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\Order;
use App\Models\Customer;
use Livewire\Attributes\Title;
use Illuminate\Support\Str; // Import Str helper
use Livewire\Component;

#[Title('Checkout - Perfume Shop')]

class Checkout extends Component {
    public $first_name;
    public $last_name;
    public $country = 'Morocco';
    public $city;
    public $phone_number;
    public $email;
    public $address;
    public $note;

    public function placeOrder() {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'city' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);
    
        // Step 1: Save the customer first
        $customer = new Customer();
        $customer->first_name = $this->first_name;
        $customer->last_name = $this->last_name;
        $customer->phone_number = $this->phone_number;
        $customer->country = $this->country;
        $customer->city = $this->city;
        $customer->email = $this->email;
        $customer->address = $this->address;
        $customer->save();
    
        // Step 2: Create the order and assign customer_id
        $cart_items = CartManagement::getCartItemsFromCookie();
    
        $order = new Order();
        $order->customer_id = $customer->id;  // Set customer_id in order
        $order->grand_total = CartManagement::calculateGrandTotal($cart_items);
        $order->payement_method = "cod";
        $order->payement_status = "pending";
        $order->status = "new";
        $order->currency = 'MAD';
        $order->shipping_amount = 0;
        $order->shipping_method = "None";
        $order->notes = "";
        $order->save();
    
        // Step 3: Assign the order's ID to the customer
        $customer->order_id = $order->id;  // Set order_id in customer
        $customer->save();  // Save customer again with updated order_id
    
        // Step 4: Add items to the order
        foreach ($cart_items as $item) {
            $order->items()->create([
                'product_id' => $item['product_id'],  // Replace with the actual product_id field
                'quantity' => $item['quantity'],
                'price' => $item['unit_amount'],
            ]);
        }
    
        // Step 5: Clear the cart and redirect
        CartManagement::clearCartItems();
    
        $redirect_url = route('order.received');
        return redirect($redirect_url);
    }
    
    public function mount() {
        $cart_items = CartManagement::getCartItemsFromCookie();
        if (count($cart_items) == 0) {
            return redirect('/shop');
        } 
    }

    public function render() {
        $cart_items = CartManagement::getCartItemsFromCookie();
        $grand_total = CartManagement::calculateGrandTotal($cart_items);

        return view('livewire.checkout', [
            'cart_items' => $cart_items,
            'grand_total' => $grand_total,
        ])
            ->layout('layouts.app');
    }
}
