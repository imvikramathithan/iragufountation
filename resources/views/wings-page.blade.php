@extends('layouts.app')
@section('content')
<x-wings-component />

<script>
 //loader
var loader = document.getElementById("preloader");

window.addEventListener("load", function () {
    loader.style.display = "none";
});
</script>
  <script src="{{asset('assets/js/scrollreveal.js')}}"></script>
@endsection