@extends('Components.Layout')
@section('title', 'Username - Log in')

@section('content')
    <main class="login-page">
        <div class="card">
            <img class="card-img-top" src="{{ asset('images/dog.jpg') }}" alt="Card image">
            <div class="card-body">
                <div class="center">
                    <h4 class="card-title">Hello!</h4>
                    <form action="{{ route('set-username') }}" method="POST">
                        @csrf <!-- Important for security in POST requests -->
                        <label for="username">Please enter your username:</label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}" required pattern="[a-zA-Z]+" title="Please enter only alphabetic characters.">
                        <br><br>
                        <button type="submit" class="btn-primary">Purrfect</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
