@extends('layouts.app');

@section('content')
    <div class="comics container">

        @foreach($comicsData as $index => $comic)
        
        <div class="comic px-1">
            <!-- poster -->
            <a href="">
                <div class="poster">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }} poster">
                </div>
            </a>
            
            <!-- serie -->
            <h3>{{ $comic['series'] }}</h3>
        </div>
        
        @endforeach
    </div>
@endsection