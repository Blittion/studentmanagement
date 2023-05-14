@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>
    <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>

    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')

        <label for="studentid">Student ID:</label>
        <input type="text" id="studentid" name="studentid" value="{{ $student->studentid }}" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}" required>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" value="{{ $student->course }}" required>

        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required>

<button class="btn btn-primary" type="submit">Save</button>
</form>
@endsection
