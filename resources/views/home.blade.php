<!-- resources/views/username.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Username - Home') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->   
    <div class="banner"></div>
    <div class="banner" style="background-image: url('{{ asset('images/banner.jpg') }}');"></div>

    <div class="content">
        <h2>Welcome to Pawsome Breeds!</h2>
        <p>Dive into the wonderful world of dog breeds! Discover their origins, unique personalities, and lovable quirks. Whether you're a dedicated dog owner or simply a dog enthusiast, you're about to embark on a journey filled with fascinating insights and heartwarming canine facts. Get ready to explore and be inspired by man's best friend!</p>
    </div>
@endsection
