@extends('layouts.app')

@section('content')
<div class="container">
  <h3 class="headerText">Welcome {{Auth::user()->name}}</h3>
    <div class="row">
        <div class="col-md-3 divOne">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <image class="headerImage" src="../images/graduation-hat-and-diploma.png" alt="Welcome to school!">
                  <h4 class="textCenter headerText">+EduPlus</h4>
                </div>

                <div class="panel-body scrollPanel textCenter">
                    <?php echo "<h4>"."Welcome to your EduPLus account " . Auth::user()->name . "!"."</h4>"; ?>
                    <br>
                    <h4>View your Profile</h4> <i class="glyphicon glyphicon-user"></i> <a href="{{url('studentProfile/'.Auth::user()->id)}}" class="logReg">Profile</a>
                    <br>
                    <h4>Please select a course</h4>
                    @foreach($courseOption as $selectCourse)
                    <a href="{{url('/myCourses/'.Crypt::encrypt($selectCourse->courses_id))}}"><li class="logReg">-{{$selectCourse->courses_name}}-</li></a>
                    @endforeach
                </div>
            </div>
        </div>
     <div class="col-md-5 divTwo">
            <div class="panel panel-default">
                <div class="panel-heading"><image class="headerImage" src="../images/pin-post.png" alt="classPosts">
                  
               <h4 class="textCenter headerText">Class Posts</h4> </div>

                <div class="panel-body scrollPanel">
                      @foreach($classPost as $classPosts)
                   <div class="borderBottom">
                    <h4>{{$classPosts->generalEvent_name}}</h4>
                    <p>{{$classPosts->generalEvent_post}}</p>
                   </div>
                   <br>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4 divThree">
            <div class="panel panel-default">
                <div class="panel-heading"><image class="headerImage" src="../images/check-form.png" alt="Class Forms">
                  
               <h4 class="textCenter headerText">Class Forms</h4> </div>

                <div class="panel-body scrollPanel">
                  <h4>Form Downloads</h4>
                   <table class="table">
                     <tr>
                            <th>Form Name</th>
                            <th>Posted On</th>
                            <th>Download</th>
                            </tr>
                    @foreach($classForms as $formDetail)
                            <tr class="marginTbl">
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
            </div>
        </div>
    </div>
</div>
@endsection

