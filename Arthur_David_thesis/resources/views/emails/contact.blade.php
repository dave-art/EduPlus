<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="{{url('../css/mailStyle.css')}}" rel="stylesheet">



</head>
<body style="background: #42526C;
    background: -webkit-linear-gradient(left, #092154, #1647AC, #092154);
    background: -o-linear-gradient(right, #092154, #1647AC, #092154);
    background: -moz-linear-gradient(right, #092154, #1647AC, #092154);
    background: linear-gradient(to right, #092154, #1647AC, #092154);">

<div style="border-bottom:solid 1px white; border-top:solid 1px white;">
<h3  style="font-size:25px; text-align:center; color:white; font-family: 'Raleway', sans-serif;">You have a new message from +EduPlus</h3>
</div>

<br>
<h5  style="font-size:25px; text-align:center; color:white; font-family: 'Raleway', sans-serif;">Regarding: {{$regarding}}</h5>

<div style="color:white; font-family: 'Raleway', sans-serif;">
{{ $content }}
</div>

<br>

<p style="color:white; font-family: 'Raleway', sans-serif;">Sent from {{$email}} via +EduPlus Mail</p>


<p style="font-size:10px; text-align:center; color:white; font-family: 'Raleway', sans-serif;">If you have recieved this email as a mistake please delete it from your inbox immediently</p>
<p style="font-size:10px; text-align:center; color:white; font-family: 'Raleway', sans-serif;">Copyright 2017 +EduPlus</p>


</body>
</html>