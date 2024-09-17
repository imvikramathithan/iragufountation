@extends('layouts.app')
@section('content')
<!-- School Setting -->
    <div class="sfm">
        <div class="sus sfm-top">
            <h1 class="display text-center sfm-color animate-zoom-in" id="">Service for Management</h1>
            <hr> 
            <div class="container" id="settingupschool">
                @include('partial.setting_up_schools')
            </div>    
        </div> 
        @include('partial.curriculum_and_support')
        @include('partial.recruitment')
        @include('partial.training_and_development')
        @include('partial.studio')
        @include('partial.event_management')
        @include('partial.guidance_and_counselling')
        @include('partial.nlp_and_albe')
    </div>
<!-- School Setting -->
<x-animate/>
<script>
   
  //loader
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
        loader.style.display = "none";
    });
</script>
    <script src="{{asset('assets/js/animate.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal.js')}}"></script>
@endsection
