@push('styles')
    <script src="{{ asset('css/user.css') }}"></script>
@endpush

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


@push('scripts')
    <script src="{{ asset('js/user.js') }}"></script>
@endpush

@prepend('scripts')
    <script type="script">
        console.log('teste')
    </script>
@endprepend
