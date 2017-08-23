@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
    
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading centerText">

                  <image class="headerImage" src="../images/message.png" alt="email form">
                  <h4 class="headerText">E-Mail Form</h4>
                     
                </div>

                <div class="panel-body">
                     @foreach($studentInfo as $studentList)
                        <h5 class="centerText">To: {{$studentList->name}}</h5>
                        

        <form class="displayForm form-horizontal" action="{{ url('mail') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group formDiv">
        <p>Email</p><input class="mailForm submitBtn mailInput" type="email" name="email" value="{{$studentList->email}}" required>
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
