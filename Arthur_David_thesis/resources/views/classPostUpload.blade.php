@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
     <div class="col-md-12">
            <div class="panel panel-default containerOne">
                <div class="panel-heading">Admin menu</div>

                <div class="panel-body">
        <form action="{{ url('classPostUpload') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
       <h6>Post Name</h6> <input type="text" name="PostName">
        <h6>Post Content</h6> <input type="text" name="PostContent">
        <input type="submit">
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection