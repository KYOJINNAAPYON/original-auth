@extends('layouts.base')

@section('body')
    @yield('content')
    
    <div class="container mx-auto px-4">
    <livewire:nav-bar/>
    @isset($slot)
        {{ $slot }}
    @endisset
    </div>
@endsection
