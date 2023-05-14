@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
    <h1>Student Details</h1>
    </div>
    <div class="pull-right">
    <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
    </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student ID:</strong>
                {{ $student->studentid }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $student->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                {{ $student->course }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year:</strong>
                {{ $student->year }}
            </div>
        </div>
    </div>
    <br>
    <!--<a class="btn btn-success" href="{{ route('students.edit', $student->id) }}" style="display: inline-block;">Edit</a> -->

    <form method="POST" action="{{ route('students.destroy', $student->id) }}" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Delete</button>
    </form>

@endsection
