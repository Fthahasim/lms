@extends('layout')
@section('content')


<div class="container mt-5">
    <h2 class="mb-4">All Courses</h2>
    <table id="myTable" class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Fee</th>
                <th>No. of Students</th>
                <th>Students</th>
            </tr>
        </thead>
        <tbody>
            @if(count($courses) > 0)
                    @foreach ($courses as $key => $course)
                        <tr>
                            <th scope="row" class="text-center">{{ $key + 1 }}</th>
                            <th class="text-center">{{ $course->name }}</th>
                            <td class="text-center">{{ $course->category->name }}</td>
                            <td class="text-center">{{ $course->fee }}</td>
                            <td class="text-center">{{ $course->enrollments_count }}</td>
                            <td class="text-center">
                                <a href="{{ route('course.enrolments', ['courseId' => $course->id]) }}" class="btn btn-sm btn-primary">
                                    View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr colspan="6">No Courses Found</tr>
                @endif
        </tbody>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



@endsection