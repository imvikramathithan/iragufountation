@extends('layouts.adminheader')
@section('content')
<div class="container-student">
        <form action="{{url('uploadstudentpdf')}}" method="post" class="formborder" enctype="multipart/form-data">
            @csrf
            <u><div class="display text-center">Update Student</div></u>
            <div class="title">
                <label for="title" class="labtitle">TITLE:</label>
                <select name="title" id="" class="dropdownstudenttitle">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="sub">
                <label for="sub" class="labsub">SUBTITLE:</label>
                <select name="sub" id="" class="dropdownstudentsub">
                    <option value="1">1</option>
                    <option value="2">2</option>    
                    <option value="3">3</option>
                </select>
            </div>
            <div class="file">
                <label for="sub" class="labfile">CHOOSE FILE:</label>
                <input type="file" name="file" id="" class="dropdownstudentfile">
            </div>
            <button type="submit" href="{{route('home')}}" class="uploadbuttonstudent">Upload</button>
        </form>

</div>
@endsection