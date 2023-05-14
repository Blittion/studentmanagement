@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Management') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Student</a>
                <a href="{{ url('/home') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
        <th>Student ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
        <td>{{ $student->studentid }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->year }}</td>
            <td>
   
                    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
   

            </td>
        </tr>
        @endforeach
    </table>
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection