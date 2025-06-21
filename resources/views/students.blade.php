@extends('layout')
@section('content')


    <div class="container mt-5">
        <h3>Enrolled Students</h3>

        @if(count($enrolments) > 0)
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Enrolled At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($enrolments as $index => $student)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->enrollments[0]->enrolled_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No students enrolled for this course.</p>
        @endif

        <a href="{{ route('course.index') }}" class="btn btn-secondary mt-3">Back to Courses</a>
    </div>


@endsection
