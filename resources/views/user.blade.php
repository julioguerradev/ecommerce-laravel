<h1>
    Hello World
</h1>

{{-- {{ route('user.show', 2) }} --}}
{{ $user->name }} <br>
{{ $user->email }} <br><br>

{{ date('d/m/Y') }}

<br>
@php
    $total = 100;
    $array = [];
    $boolean = false;
@endphp

@unless($boolean)
    {{ 'falso' }} <br>
@endunless

@empty($array)
    vazio <br><br>
@endempty

@if($total >= 100)
    Muito caro <br><br>
@elseif($total < 80)
    Ta de boa
@else 
    Ta barato
@endif
