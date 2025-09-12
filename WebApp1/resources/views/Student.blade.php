<div>
  
@foreach($student as $st)

<div class ="row">
<div class ="col"> {{$st -> studentName}}</div>
<div class ="col"> {{$st -> studentID}}</div>
<div class ="col"> {{$st -> studentClass}}</div>

</div>

@endforeach
</div>
