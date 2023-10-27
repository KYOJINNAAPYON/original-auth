<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UserIndex extends Component
{
    use WithPagination;
    
    public function render()
    {
        $users = User::paginate(5);
        
        return view('livewire.user-index',[
          'users' => $users
        ])->layout('layouts.app');
    }
}
