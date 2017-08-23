@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <h3 class="headerText">Teacher: {{Auth::user()->name}}</h3>
        @foreach($studentInfo as $studentList)
                    <p class="headerText">Student: {{$studentList->name}}</p>
                         
                    @endforeach
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <image class="headerImage" src="../images/teacher.png" alt="feedback">
                    <H4 class="textCenter headerText">Teacher Feedback</H4>
                     
                </div>

                <div class="panel-body borderBottom scrollPanel">
                    <button class="openUpload btn btn-default btn-sm upldBtn"><i class="glyphicon glyphicon-upload"></i> Upload</button>
                     @foreach($studentInfo as $studentList)
                        <p>{{$studentList->name}}</p>
                         
                    @endforeach
                   
                    <h6>-Feedback-</h6>
                        <br>
                    @foreach($studentFeedback as $feedback)
                          <p><span class="fontLarge">Subject:</span> {{$feedback->feedback_subject}}</p>
                        <p><span class="fontLarge">Content:</span> {{$feedback->feedback_content}}</p>
                        <p><span class="fontLarge">Posted On:</span> {{$feedback->feedback_date}}</p>
                         <br>
                    @endforeach
<div id="formDivOne" class="formMenu">

  <div class="formContent">
    <span class="close">X</span>
    <h3>Upload an Assignment File</h3>
        <form class="displayForm form-horizontal" action="{{ url('feedbackForm') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <p>Subject</p><input class="submitBtn control-label" type="text" name="feedbackTitle" required>
        {{ csrf_field() }}
        <p>Feedback</p><input class="submitBtn control-label" type="text" name="feedbackContent" required>
        <br><br>
        <p>Posted</p><input class="submitBtn control-label" type="date" name="feedbackDate" required>
        <br><br>
        <input type="hidden" value="{{$studentList->id}}" name="studentId">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Upload">
        </div>
        </form>
  </div>
                </div>
            </div>
        </div>
     </div>
     <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">

               <image class="headerImage" src="../images/learning.png" alt="Assignments Still Due">
                    <H4 class="textCenter headerText">Assignments Due</H4>
                
            </div>
                
                <div class="panel-body borderBottom scrollPanel">
<h5>Current Date: {{ date('Y F j') }}</h5>
<br>
                    <table class="table">
                     <tr>
                            <th>Assignment</th>
                            <th>Due</th>
                            <th>Status</th>
                            <th>Completed?</th>
                            </tr>

                     @foreach($assignments as $showAssignments)
                        @foreach($studentInfo as $studentList)
                            <tr class="marginTbl">
                            <td>{{$showAssignments->workEvent_name}}</td>
                            <td>{{$showAssignments->workEvent_date}}</td>
                            <td>{{$showAssignments->workEvent_complete}}</td> 
                            <td> 
                                <form action="{{ url('commitChanges') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$showAssignments->workEvent_id}}" name="workID">
                                <input type="hidden" value="{{$studentList->id}}" name="studentId">
                                <input class="submitBtn btn btn-default btn-border-none" type="submit" value="Complete">
                                </form>
</td> 
                            </tr>
                                    @endforeach
                             @endforeach
                        </table>
                                

                                        </div>

                                

</div>
            </div>

             <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                <image class="headerImage" src="../images/raise-your-hand-to-ask.png" alt="Student Questions">
                    <H4 class="textCenter headerText">Student Questions</H4>
            </div>
                
                <div class="panel-body borderBottom scrollPanel">
                    <h3 class="textCenter">Teachers:</h3>
<p class="textCenter questionText">Please respond to student questions when you can, either through email, or in class. </p>
                    

                    @foreach($studentQuestions as $questions)
                    <div class="questionDiv">
                         <p class="textCenter"> <span class="fontLarge">Subject:</span> {{$questions->questions_subject}}</p>
                         <p><span class="fontLarge">Question:</span> {{$questions->questions_content}}</p>

                   </div>
                    @endforeach
                    

                                        </div>

                                

</div>
            </div>

    </div>
</div>
 
@endsection
