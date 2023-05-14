@extends('layouts.app')

@section('content')
    <h1>Add Student</h1>
    <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>

    <form method="POST" action="{{ route('students.store') }}">
        @csrf

        <label for="studentid">Student ID:</label>
        <input type="text" id="studentid" name="studentid" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required>

        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required>

        <button type="submit">Save</button>
    </form>
@endsection
