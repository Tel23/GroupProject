<!-- resources/views/username.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Username - About Us') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->   
    <div class="content">
        <div class="team-photos">
            <img src="{{ asset('images/logo.jpg') }}" alt="Member 1 Photo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Member 2 Photo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Member 3 Photo">
        </div>
        <div class="about-text">
            <h2>About Us</h2>
            <p>We are a team of three passionate dog enthusiasts dedicated to sharing our knowledge about various dog breeds. Our mission is to offer accurate and engaging information to help you understand and appreciate these loyal companions. Whether you're a long-time dog owner or simply curious about man's best friend, we hope our website provides you with valuable insights and enjoyable content.</p>
        </div>
    </div>
@endsection
