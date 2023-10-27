<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NavBar extends Component
{
    public bool $login;

    public function render()
    {
        return view('livewire.nav-bar');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return $this->redirect('/login');
    }
}