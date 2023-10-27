<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Rule('email', message: 'Eメールを入力してください。')] 
    #[Rule('required', message: 'Eメールを入力してください。')]
    public $email = '';

    #[Rule('min:8', message: 'パスワードは最低8文字です。')] 
    #[Rule('required', message: 'パスワードを入力してください。')]
    public $password = '';

    public function render()
    {
        return view('livewire.login')
        ->layout('layouts.app');
    }

    public function loginUser(Request $request)
    {
        $validated = $this->validate();

        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            session()->flash('success', 'ログインしました！');
            return $this->redirect('/user-index');
        }

        $this->addError('email', 'メールアドレスとパスワードが一致しません');
    }
}
