@extends('layouts.main')

@section('contents')
    <div class="container mt-4 mb-4">
        @auth
            <center><h2>Selamat Datang {{ Auth::user()->name }}</h2></center>
        @endauth
        @guest
            <center><h2>Selamat Datang Silahkan Login Dulu</h2></center>
        @endguest
        
    </div>
    @include('content.posting')
@endsection