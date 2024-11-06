<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{

    // public function mount()
    // {
    //     if (Auth::check()) {
    //         dd(Auth::user());
    //     } else {
    //         dd('Nao logado');
    //     }
    // }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
