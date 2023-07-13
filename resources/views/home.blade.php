@extends('layouts.layout')

@section('content')
    <div class="d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="bg-warning py-3 px-2 m-2 text-danger" style="width:230px">
                <h4 class="text-center">{{ $movie['title'] }}</h4>
                <ul class="text-left">
                    <li>{{ $movie['original_title'] }}</li>
                    <li>{{ $movie['nationality'] }}</li>
                    <li>{{ $movie['date'] }}</li>
                    <li>{{ $movie['vote'] }} /10</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection