@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
@foreach($courseInfo as $courseInfo)
        <h3 class="headerText">Welcome to {{$courseInfo->courses_name}} with {{Auth::user()->name}}</h3>
        <div class="col-md-3 divThree">
            <div class="panel panel-default">
                <div class="panel-heading">
                
                    <image class="headerImage headingContent" src="../images/classroom.png" alt="Class List">
                        <h4 class="textCenter headerText headingContent">Student List</h4>
                        
                    </div>

                <div class="panel-body scrollPanel">
                    @foreach($studentInfo as $studentList)
                    <div class="borderBottom studentList">
                        <h4>{{$studentList->name}}</h4>
                        <div class="profileIcons">
                         <i class="glyphicon glyphicon-user"></i> <a class="logReg" href="{{url('studentProfile/'.$studentList->id)}}">Profile</a>
                         </div>
                         <div class="profileIcons">
                          <i class="glyphicon glyphicon-envelope"></i> <a class="logReg" href="{{url('mail/'.$studentList->id)}}">Mail</a>
                        </div>
                   </div>
                    @endforeach
                    <br>
                    <h4>Adding Students</h4>
                    <br>
                    <p>To add students, upload a .CSV file with the students account information contained inside, then hit "Add Students"!</p>
                    <br>
                    <h5>Student CSV File: </h5> <input class="formCenter control-label" type="file" name="addStudent" required>
                    <button type="submit" class="btn btn-default">
                                    Add Students
                </button>
                </div>
                
            </div>
        </div>

        <div class="col-md-7 divOne">
            <div class="panel panel-default">
                <div class="panel-heading">
<image class="headerImage" src="../images/calendar.png" alt="Due Dates">
                    <H4 class="textCenter headerText">Due Dates</H4></div>

                <div class="panel-body scrollPanel">
                    <button class="btn btn-default btn-sm openUpload upldBtn"><i class="glyphicon glyphicon-upload"></i> Upload</button>
                    <h5 class="textCenter">Current Date: {{ date('l j F Y') }}</h5>
                    <h5 class="textCenter">Upcomming Assignments for {{$courseInfo->courses_name}}</h5>
                    <br>
                    <h6>Note:</h6>
                 <h6>Remove - Removes the item form the list, but keeps it in the students profile page IF it is still incomplete</h6> 
                 <h6>Delete - Removes the assignment entirely</h6>
                 <br>
                    <div>
                        <table class="table textCenter">
                     <tr>
                            <th class="textCenter">Delete Assignment</th>
                            <th class="textCenter">Remove From List</th>
                            <th class="textCenter">Assignment</th>
                            <th class="textCenter">Due Date</th>
                            </tr>
                    @foreach($dueDates as $dueDate)
                            <tr class="marginTbl">
                                <td> 
                                <form action="{{ url('deleteAssignment') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$dueDate->workEvent_id}}" name="workId">
                                <input type="hidden" value="{{$courseInfo->courses_id}}" name="courseId">
                                <button class="submitBtn btn btn-default btn-sm" type="submit"><i class="glyphicon glyphicon-trash"></i> Delete </button>
                                </form>
                            </td>
                            <td> 
                                <form action="{{ url('removeAssignment') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$dueDate->workEvent_id}}" name="workId">
                                <input type="hidden" value="{{$courseInfo->courses_id}}" name="courseId">
                                <button class="submitBtn btn btn-default btn-sm" type="submit"><i class="glyphicon glyphicon-remove"></i> Remove </button>
                                </form>
                            </td>
                            <td>{{$dueDate->workEvent_name}}</td>
                            <td>{{$dueDate->workEvent_date}}</td>
                             </tr>
                    @endforeach
                </table>
                
                    </div>            

<div id="formDivOne" class="formMenu">

  <div class="formContent">
    <span class="close">X</span>
    <h3>Add A New Due Date</h3>
        <form class="displayForm" action="{{ url('myCourses') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
       <p>Project Name</p> <input class="submitBtn" type="text" name="ProjectName" required>
        <br><br>
        <p>Due Date (yyyy/mm/dd)</p> <input class="submitBtn" type="date" name="DueDate" required>
        <br><br>
        <input type="hidden" value="{{$courseInfo->courses_id}}" name="courseId">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Upload">
        </form>
  </div>

</div>

                </div>
            </div>
        </div>
     
     <div class="col-md-2 divTwo">
            <div class="panel panel-default">
                <div class="panel-heading">
<image class="headerImage" src="../images/open-book.png" alt="unit selection">
                <h4 class="textCenter headerText">Units</h4>
                
            </div>
                
                <div class="panel-body scrollPanel">

                    <button class="btn btn-default btn-sm formUploadBtn upldBtn"><i class="glyphicon glyphicon-upload"></i> Upload</button>

@foreach($unitOption as $selectUnit)
                        <a href="{{url('/assignments/'.$selectUnit->units_id)}}"><li class="logReg"><i class="glyphicon glyphicon-folder-open"></i>  {{$selectUnit->units_name}}</li></a>
                    @endforeach

                </div>

<div id="formDivTwo" class="formMenu">
  <div class="formContent">
    <span class="closeBtn">X</span>
    <h3>Add A New Unit</h3>
        <form class="displayForm" action="{{ url('addedUnit') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
       <p>Unit Name: </p> <input class="submitBtn" type="text" name="unitName" required>
        <input type="hidden" value="{{$courseInfo->courses_id}}" name="courseUnitId">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Upload">
        </form>
  </div>

</div>
            </div>
        </div>

    </div>
</div>
@endforeach
@endsection
