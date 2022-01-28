@extends('layouts.main-layout')

@section('content')
<section>
    <h2>
        {{ $comic->title }}
    </h2>
    <h3>
        {{ $comic->subtitle }}
    </h3>
    <h4>
        {{ $comic->release_date }}
    </h4>
    <h4>
        Numero di pagine: {{ $comic->pages }}
    </h4>
</section>
@endsection