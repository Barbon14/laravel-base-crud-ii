@extends('layouts.main-layout')

@section('content')
<section>
    <h2>
        Comics List
    </h2>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('show', $comic -> id) }}">
                    {{ $comic -> title }}
                </a>
                - {{ $comic -> relase_date }}
            </li>
        @endforeach
    </ul>
</section>
@endsection