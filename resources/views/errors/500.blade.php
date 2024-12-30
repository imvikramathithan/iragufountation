@extends('layouts.app')

@section('content')
    <style>
        .error-container {
            margin-top: 100px;
            text-align: center;
        }
        .error-code {
            font-size: 100px;
            font-weight: bold;
            color: #f44336;
        }
        .error-message {
            font-size: 20px;
            color: #6c757d;
        }

    </style>

    <div class="container error-container">
        <h1 class="error-code">500</h1>
        <p class="error-message">Sorry! Something went wrong on our end.</p>
        <a href="{{ url('/') }}" class="s-btn">Go Back Home</a>
    </div>
    <script>
     var loader = document.getElementById("preloader");

window.addEventListener("load", function () {
    loader.style.display = "none";
});
    </script>
@endsection
