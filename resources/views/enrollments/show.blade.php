@extends('mainLayout.main.layout')
@section('content')
    <div class="card">
        <div class="card-header">Enrollment information</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $enrollments->name }}</h5>
                <p class="card-text">Syllabus : {{ $enrollments->syllabus }}</p>
                <p class="card-text">Batch Id : {{ $enrollments->batch_id }}</p>
                <p class="card-text">Student Id : {{ $enrollments->student_id }}</p>
                <p class="card-text">Join Date : {{ $enrollments->join_date }}</p>
                <p class="card-text">Fee : {{ $enrollments->fee }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
