@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
     <div class="col-md-6">
            <div class="panel panel-default containerOne">
                <div class="panel-heading">Admin menu</div>

                <div class="panel-body">
        <form action="/classFormUpload" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
       <h6>Form Name</h6> <input type="text" name="formTitle">
       <h6>File</h6> <input type="file" name="formFile">
       <h6>Form Description</h6> <input type="text" name="formDesc">
        <h6>Posted (yyyy/mm/dd)</h6> <input type="date" name="formDate">
        <input type="submit">
        </form>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection