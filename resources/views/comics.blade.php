@extends('layouts.app');

@section('content')
<div class="main_content">

    <div class="comics container">
        
        @foreach($comicsData as $index => $comic)
        
        <div class="comic px-3">
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

    <!-- more -->
    <div class="more py-2">
        <h2>LOAD MORE</h2>
    </div>
</div>
<div class="info container">
    
</div>
@endsection