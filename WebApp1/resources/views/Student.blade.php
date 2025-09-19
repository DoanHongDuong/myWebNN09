<div>
  
@foreach($student as $st)

<div class ="row">
<div class ="col"> {{$st -> studentName}}</div>
<div class ="col"> {{$st -> studentID}}</div>
<div class ="col"> {{$st -> studentClass}}</div>
<a href="{{ route('editStudent', ['id' => $st->studentID]) }}" class="btn btn-sm btn-primary">
    Edit
</a>
</div>

@endforeach
</div>
