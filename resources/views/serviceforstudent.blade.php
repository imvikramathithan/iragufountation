@extends('layouts.app')
@section('content')
<x-sfs-commulative/>
<x-animate/>
<script>
 //loader
var loader = document.getElementById("preloader");

window.addEventListener("load", function () {
    loader.style.display = "none";
});
</script>
  <script src="{{asset('assets/js/scrollreveal.js')}}"></script>
@endsection