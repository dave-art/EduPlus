@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        @foreach($teacherInfo as $teacherList)
                    <h3 class="headerText">Teacher: {{$teacherList->name}}</h3>
                         
                    @endforeach
                    <p class="headerText">Student: {{Auth::user()->name}}</p>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <image class="headerImage" src="../images/teacher.png" alt="feedback">
                    <H4 class="textCenter headerText">Teacher Feedback</H4>

                </div>

                <div class="panel-body borderBottom scrollPanel">
                     @foreach($studentInfo as $studentList)
                        <p>{{$studentList->name}}</p>
                         
                    @endforeach
                   
                     <p class="textCenter questionText">This is the feedback section. Here you will see feedback left by your teacher organized by the data they posted it. Please review the feedback and respond accordingly!</p>

                    @foreach($studentFeedback as $feedback)
                    <br>
                        <p><span class="fontLarge">Subject:</span> {{$feedback->feedback_subject}}</p>
                        <p><span class="fontLarge">Content:</span> {{$feedback->feedback_content}}</p>
                        <p><span class="fontLarge">Posted On:</span> {{$feedback->feedback_date}}</p>
                    <br>
                    @endforeach
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
                <p class="textCenter questionText">Here are your current assignments! These assignments are yet to be completed and are ordered by the date they were due. Please complete them as soon as possible and let your teacher know if you are having trouble.</p>
                    <br>
                    <h5>Current Date: {{ date('Y F j') }}</h5>
                    <br>

                    <table class="table">
                     <tr>
                            <th>Assignment</th>
                            <th>Status</th>
                            <th>Due</th>
                            </tr>

                     @foreach($assignments as $showAssignments)
                     
                            <tr>
                            <td>{{$showAssignments->workEvent_name}}</td>
                            <td>{{$showAssignments->workEvent_complete}}</td>
                            <td>{{$showAssignments->workEvent_date}}</td> 
                            </tr>
                  
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

<div id="formDivOne" class="formMenu">
  <div class="formContent">
    <span class="close">X</span>
<h5>Ask a Question!</h5>
                <p>Please only ask, short, content related questions here, any other questions please send via Email</p>
        <form class="displayForm form-horizontal" action="{{ url('questionForm') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            {{ csrf_field() }}
        <p>Subject</p><input class="submitBtn control-label" type="text" name="questionSubject" required>
        
        <p>Question</p><textarea class="submitBtn control-label" type="text" name="questionContent" required rows="5" cols="40"></textarea>
        <br><br>
        <input class="btn btn-primary" type="submit" value="Upload">
        </div>
        </form>
    </div>
</div>
<button class="openUpload upldBtn btn btn-default btn-sm"><i class="glyphicon glyphicon-question-sign"></i> Ask a Question</button>
<h3 class="textCenter">Students:</h3>
<p class="textCenter questionText">Please leave any questions for your teacher here, these questions will be answered either in class or via email. Please give your teacher time to respond, it may take a few days depending on how many questions your teacher has to go through</p>

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