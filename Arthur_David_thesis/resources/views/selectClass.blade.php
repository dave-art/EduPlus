@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 center">
            <div class="panel-default backgroundClear">
                <div class="panel-body centerText headerText selectClass">
                     <?php echo "<h2>"."Welcome to your +EduPlus account " . Auth::user()->name . "!"."</h2>"; ?>
                    <br>
                    <h3>Please select a class from the list below</h3>
                    <br>
                    
                    <h4>All Classes</h4>
                    <br>
                    @foreach ($classSelection as $selectClass)
                    <a href="{{url('/myClass/'.$selectClass->classes_id)}}"><li class="logReg selectAClass"><h4 class="headerText">-{{$selectClass->classes_name}}-</h4></li></a>
                    @endforeach
                </div>
            </div>
        </div>
  </div>
</div>
@endsection
