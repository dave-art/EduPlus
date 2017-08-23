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
@foreach($unitInformation as $selectedUnit)
                        <h5>{{$selectedUnit->units_name}} Files</h5>
                    @endforeach
                   
                    <h6>Select a file to download</h6>

                     @foreach($assignmentInfo as $assignmentDetail)
                   <div>
                    <p>Name: {{$assignmentDetail->assignments_name}}</p>
                    <a href="../_DIR_/storage/{{$assignmentDetail->assignments_file}}" download="{{$assignmentDetail->assignments_file}}">
<button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-download">Download</i></button>
                    </a>
                   </div>
                    @endforeach

                </div>
            </div>
        </div>

</div>
</div>
@endsection