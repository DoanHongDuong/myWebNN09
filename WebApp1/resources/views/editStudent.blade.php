<div>
    <form action="{{route('student.save')}} method ="POST">
    @csrf
        <input type = "hidden" name ="studentID" value="{{ $student->studentID}}">
        <input type = "text" name ="studentName" value ="{{ $student->studentName}}">
        <input type = "text" name ="studentClass" value ="{{ $student->studentClass}}">
        <button type ="submit">Save</button>
</form>
</div>