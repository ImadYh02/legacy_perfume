<?php

namespace App\Livewire;

use Livewire\Component;

class OrderConfirmation extends Component
{
    public function render()
    {
        return view('livewire.order-confirmation')
            ->layout('layouts.app');
    }
}
