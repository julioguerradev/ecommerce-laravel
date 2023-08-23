{{-- {{ dd($users); }} --}}

@foreach($users as $user)
    {{ $user->name }} <br>
@endforeach
