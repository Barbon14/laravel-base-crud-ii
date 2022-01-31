@extends('layouts.main-layout')

@section('content')
<section>
    <h2>
        Comics List
    </h2>
    <h4>
        <a href="{{ route('create')}}">
            Add New Comic
        </a>
    </h4>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('show', $comic -> id) }}">
                    {{ $comic -> title }}
                </a>
                - {{ $comic -> release_date }}
            </li>
        @endforeach
    </ul>
</section>
@endsection