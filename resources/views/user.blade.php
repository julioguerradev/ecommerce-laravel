@extends('layouts.default')

@section('title', 'User title')

@section('sidebar')
    <div>
        <nav>
            user sidebar
        </nav>
    </div>
@endsection

@section('content')
    <h1>User</h1>
    {{ $user->name }} <br>
    {{ $user->email }} <br><br>
@endsection
