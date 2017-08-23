@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">          
     
     <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
@foreach($unitInformation as $selectedUnit)
                        <image class="headerImage" src="../images/text-book-opened-from-top-view.png" alt="course selected">
                        <h4 class="headerText">{{$selectedUnit->units_name}}</h4>
                    @endforeach
     
            </div>
                
                <div class="panel-body">

                <button class="openUpload upldBtn btn btn-default btn-sm"><i class="glyphicon glyphicon-upload"></i> Upload</button>

@foreach($unitInformation as $selectedUnit)
                        <h5>{{$selectedUnit->units_name}} Files</h5>
                    @endforeach
                   
                    <h6>Select a file to download</h6>

                     @foreach($assignmentInfo as $assignmentDetail)
                   <div>
                    <p>Name: {{$assignmentDetail->assignments_name}}</p>
                    <a href="../_DIR_/storage/{{$assignmentDetail->assignments_file}}" download="{{$assignmentDetail->assignments_file}}">
<button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-download"></i> Download</button>
                    </a>
                   </div>
                    @endforeach
<div id="formDivOne" class="formMenu">

  <div class="formContent">
    <span class="close">X</span>
    <h3>Upload an Assignment File</h3>
        <form class="displayForm form-horizontal" action="{{ url('myAssignments') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <p>Name of Upload</p><input class="submitBtn control-label" type="text" name="assignmentName" required>
        {{ csrf_field() }}
        <p>Uploaded File</p><input class="formCenter control-label" type="file" name="assignmentFile" required>
        <br><br>
        <input type="hidden" value="{{$selectedUnit->units_id}}" name="unitId">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Upload">
        </div>
        </form>
  </div>

</div>
                </div>
            </div>
        </div>

</div>
</div>
@endsection