<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    #[Rule('required', message: 'お名前を入力してください。')]
    public $name = '';

    #[Rule('email', message: 'Eメールを入力してください。')] 
    #[Rule('required', message: 'Eメールを入力してください。')]
    public $email = '';

    #[Rule('min:8', message: 'パスワードは最低8文字です。')] 
    #[Rule('required', message: 'パスワードを入力してください。')]
    public $password = '';

    public function render()
    {
        return view('livewire.register')
        ->layout('layouts.app');
    }

    public function register()
    {
        try {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        Auth::login($user);
        session()->flash('success', '会員登録が完了しました。');
        return $this->redirect('/user-index');

        } catch (\Exception $e) {
        return back()->with('message', 'すでに使用済みのメールアドレスのため登録できません。');
        }
    }
}
