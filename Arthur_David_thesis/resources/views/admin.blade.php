@extends('layouts.app')

@section('content')


<div class="container">
  <h3 class="headerText">Welcome {{Auth::user()->name}}</h3>
    <div class="row">
       <div class="col-md-2 divOne">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <image class="headerImage" src="../images/graduation-hat-and-diploma.png" alt="Welcome to school!">
                  <h5 class="textCenter headerText">+EduPlus</h5>    
                </div>

                <div class="panel-body textCenter scrollPanel">
                    
                     <h5>It is currently:</h5>
                     <h5>{{ date('l F Y') }}</h5>
                    <br>
                    <h5>Please select a course</h5>
                    @foreach($courseOption as $selectCourse)
                    <a href="{{url('/myCourses/'.Crypt::encrypt($selectCourse->courses_id))}}"><li class="logReg">-{{$selectCourse->courses_name}}-</li></a>
                    @endforeach
                </div>
            </div>
        </div>
     <div class="col-md-4 divTwo">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <image class="headerImage" src="../images/pin-post.png" alt="classPosts">
                  
               <h4 class="textCenter headerText">Class Posts</h4> 
                  
               
             </div>
                    
                <div class="panel-body scrollPanel">

                  <button class=" upldBtn openUpload btn btn-default btn-sm"><i class="glyphicon glyphicon-upload"></i> Upload</button>
                  
                     @foreach($classPost as $classPosts)
                   <div class="borderBottom">
                    <h4>{{$classPosts->generalEvent_name}}:</h4>
                    <p>{{$classPosts->generalEvent_post}}</p>
                    <form action="{{ url('deleteClassPost') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$classPosts->generalEvent_id}}" name="postId">
                                <input class="submitBtn btn btn-default btn-sm" type="submit" value="Remove">
                                </form>
                   </div>
                   <br>
                    
                    @endforeach

                    <div id="formDivOne" class="formMenu">
@foreach($classID as $classID)
  <div class="formContent">
    <span class="close">X</span>
    <h3>Add A New Post</h3>
        <form class="displayForm" action="{{ url('classPostUpload') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
       <p>Post Title</p> <input class="submitBtn" type="text" name="PostName" required>
        <br><br>
        <p>Content</p> <textarea class="submitBtn" type="text" name="PostContent" rows="10px" cols="50px" required></textarea>
        <br><br>
        <input type="hidden" value="{{$classID->classes_id}}" name="classId">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Upload">
        </form>
  </div>
 @endforeach
</div>
                </div>
            </div>
        </div>
        <div class="col-md-6 divThree">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <image class="headerImage" src="../images/check-form.png" alt="Class Forms">
                  
               <h4 class="textCenter headerText">Class Forms</h4>
                
                </div>

                <div class="panel-body scrollPanel">
<button class=" upldBtn formUploadBtn btn btn-default btn-sm"><i class="glyphicon glyphicon-upload"></i> Upload</button>

                 
<h4>Form Downloads</h4>
                   <table class="table">
                     <tr>
                      <th>Remove</th>
                            <th>Form Name</th>
                           
                            <th>Posted On</th>
                            <th>Download</th>
                            </tr>
                    @foreach($classForms as $formDetail)
                            <tr class="marginTbl">
                                <td> 
                                <form action="{{ url('deleteForm') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$formDetail->form_id}}" name="formId">
                                <input class="submitBtn btn btn-default btn-sm" type="submit" value="Remove">
                                </form>
                                
                            </td>
                            <td> 
                                <p>{{$formDetail->forms_name}}</p>
                              
                            </td>
                            
                            <td><p>{{$formDetail->forms_postDate}}</p></td>
                            <td><a href="../_DIR_/forms/{{$formDetail->forms_file}}" download="{{$formDetail->forms_file}}">
<button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-download"></i> Download</button></a></td>

                             </tr>
                 @endforeach
                </table>
                  <br>
                <h4>Form Descriptions</h4>
                  <table class="table">
                     <tr>
                      
                            <th>Form Name</th>
                           
                            <th>Form Descriptions</th>
                            
                            </tr>
                    @foreach($classForms as $formDetail)
                            <tr class="marginTbl">
                            <td> 
                                <p>{{$formDetail->forms_name}}</p>
                            </td>
                            
                            <td><p>{{$formDetail->forms_desc}}</p></td>
                             </tr>
                 @endforeach
                </table>
  

                    
                </div>
                <div id="formDivTwo" class="formMenu">

  <div class="formContent">
    <span class="closeBtn">X</span>
    <h3>Add A New Due Date</h3>
        <form class="displayForm" action="{{ url('classFormUpload') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
       <p>Form Name: </p> <input class="submitBtn" type="text" name="formName" required>
        <br><br>
        <p>Form File: </p> <input class="formCenter control-label" type="file" name="formFile" required>
        
        <p>Form Description: </p> <input class="submitBtn" type="text" name="formDesc" required>
        <br><br>
        <p>Posted On: (yyyy/mm/dd)</p> <input class="submitBtn" type="date" name="formDate" required>
        <br><br>
        <input type="hidden" value="{{$classID->classes_id}}" name="classId">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Upload">
        </form>
  </div>

</div>
            </div>
    </div>
</div>
@endsection

