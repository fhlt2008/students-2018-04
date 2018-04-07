@extends('layouts.default')

@section('title','所有学生')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <h1>所有学生</h1>
        <ul class="students">
            @foreach($students as $student)
                @include('students._student')
            @endforeach
        </ul>
        {!! $students->render() !!}
    </div>
@endsection