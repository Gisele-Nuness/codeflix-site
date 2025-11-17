@extends('template')

@section('content')
<link rel="stylesheet" href="{{ asset('css/descHome.css') }}">
<main>
    <div class="section">
        <h1>@lang('texts.title')</h1>
        <p class="descricao">@lang('texts.desc')</p>
    </div>

</main>    
@endsection    
    