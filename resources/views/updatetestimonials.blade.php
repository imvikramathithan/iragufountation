@extends('layouts.adminheader')
@section('content')
<div class="container-student">
    
        <form class="formborder">
            <u><div class="display text-center">Update Testimonials</div></u>
            <div class="title">
                <label for="title" class="labtitle">Name :</label>
                <input class="dropdownstudenttitle" type="text" >
            </div>
            <div class="title">
                <label for="title" class="labtitle">Shorts Details :</label>
                <input class="dropdownstudenttitle" type="text">
            </div>
            <div class="title">
                <label for="title" class="labtitle">full Details :</label>
                <input class="dropdownstudenttitle" type="text">
            </div>
            <div class="file">
                <label for="sub" class="labfile">CHOOSE FILE:</label>
                <input type="file" name="" id="" class="dropdownstudentfile">
            </div>
                <button class="uploadbuttonstudent">Upload</button>
        </form>
</div>
@endsection
