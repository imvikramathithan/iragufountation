@extends('layouts.adminheader')
@section('content')
<div class="container-student">
        <form action="" method="post" class="formborder">
            <u><div class="display text-center">Update Management</div></u>
            <div class="title">
                <label for="title" class="labtitle">TITLE:</label>
                <select name="" id="" class="dropdownstudenttitle">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="sub">
                <label for="sub" class="labsub">SUBTITLE:</label>
                <select name="" id="" class="dropdownstudentsub">
                    <option value="1">1</option>
                    <option value="2">2</option>    
                    <option value="3">3</option>
                </select>
            </div>
            <div class="file">
                <label for="sub" class="labfile">CHOOSE FILE:</label>
                <input type="file" name="" id="" class="dropdownstudentfile">
            </div>
            <button href="{{route('home')}}" class="uploadbuttonstudent">Upload</button>
        </form>                                                                                                                                                     

</div>
@endsection