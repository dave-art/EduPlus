@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default containerOne">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                     <?php echo "<h5>"."Welcome to your EduPLus account " . Auth::user()->name . "!"."</h5>"; ?>
                    <br>
                    <?php echo "<h5>"."Admin: " . Auth::user()->admin ."</h5>"; ?>
                    <br>
                    <p>Please select a course</p>
                    @foreach($courseOption as $selectCourse)
                    <a href="{{url('/myCourses/'.$selectCourse->courses_id)}}"><li class="logReg">{{$selectCourse->courses_name}}</li></a>
                    @endforeach
                </div>
            </div>
        </div>