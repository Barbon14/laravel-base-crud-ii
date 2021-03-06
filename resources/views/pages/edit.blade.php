@extends('layouts.main-layout')
@section('content')
    
    <h1>Edit Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $comic -> id) }}" method="POST">

        @method("POST")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title" value="{{ $comic -> title }}"><br>
        <label for="author">Author:</label>
        <input type="text" name="author" placeholder="author" value="{{ $comic -> author }}"><br>
        <label for="release_date">Release date:</label>
        <input type="date" name="release_date" value="{{ $comic -> release_date }}"><br>
        <label for="title">Pages Number:</label>
        <input type="number" name="pages" placeholder="pages" value="{{ $comic -> pages }}"><br>
        <input type="submit" value="UPDATE">
    </form>

    <h3>
        <a href="{{ route('home') }}">Back To List</a>
    </h3>
@endsection