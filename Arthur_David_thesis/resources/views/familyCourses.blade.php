@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
<div>
    
    <div class="row">
@foreach($courseInfo as $courseInfo)
        <h3 class="headerText">{{$courseInfo->courses_name}}</h3>
    @endforeach
        <div class="col-md-5 divOne">
            <div class="panel panel-default">
                <div class="panel-heading"><image class="headerImage" src="../images/calendar.png" alt="Due Dates">
                    <H4 class="textCenter headerText">Due Dates</H4></div>

                <div class="panel-body scrollPanel">
                    <h5>Current Date: {{ date('l j F Y') }}</h5>
                    <br>
                    
                          <table class="table textCenter">
                     <tr>
                            
                            <th class="textCenter">Assignment</th>
                            <th class="textCenter">Due Date</th>
                            </tr>
                    @foreach($dueDates as $dueDate)
                            <tr class="marginTbl">
                            <td>{{$dueDate->workEvent_name}}</td>
                            <td>{{$dueDate->workEvent_date}}</td>
                             </tr>
                    @endforeach
                </table>
                   

                </div>
            </div>
        </div>
     
     <div class="col-md-3 divTwo">
            <div class="panel panel-default">
                <div class="panel-heading">
<image class="headerImage" src="../images/open-book.png" alt="unit selection">
                <h4 class="textCenter headerText">Units</h4>
            </div>
                
                <div class="panel-body scrollPanel">
@foreach($unitOption as $selectUnit)
                        <a href="{{url('/assignments/'.$selectUnit->units_id)}}"><li class="logReg"><i class="glyphicon glyphicon-folder-open"></i> {{$selectUnit->units_name}}</li></a>
                    @endforeach

                </div>
            </div>
        </div>

             <div class="col-md-4 divThree">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <image class="headerImage" src="../images/classroom.png" alt="Class List">
                        <h4 class="textCenter headerText">Teacher Contact</h4>
                    </div>

                <div class="panel-body scrollPanel">
                    @foreach($teacherInfo as $teacherList)
                        <h3>{{$teacherList->name}}</h3>
                        <h4>{{$teacherList->email}}</h4>
                        <br>
                        <h4>Send An Email</h4>
                        <form class="displayForm form-horizontal" action="{{ url('mail') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group formDiv">
        <p>Email</p><input class="mailForm submitBtn mailInput" type="email" name="email" value="{{$teacherList->email}}" required>
        <p>Subject</p><input class="mailForm submitBtn mailInput" type="text" name="subject" value="New Message from EduPlus" required>
        <p>Regarding (Optional)</p>
        <select name="regarding">
  <option value="General">General</option>
  <option value="Personal">Personal</option>
  <option value="Medical">Medical</option>
  <option value="Administrative">Administrative</option>
  <option value="Education">Educational</option>
        </select>
        <p>Content</p><textarea class="mailForm submitBtn mailInput" type="text" name="content" cols="50" rows="10" required>Your Message Here...</textarea>
        <br>
        <input class="submitBtn btn btn-default mailBtn" type="submit" value="Send Mail">
        </div>
        </form>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
