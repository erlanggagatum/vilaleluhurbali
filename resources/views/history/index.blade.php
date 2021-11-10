@extends('layouts.adminapp')

@section('content')
<div class="container mt-4">
    <h1>Order HIstory</h1>
    <div class="card">
        <div class="card-body">
        <table id='history' class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{$book->getUser()->first_name}}</td>
                    <td>{{$book->getUser()->last_name}}</td>
                    <td>{{$book->start_date}}</td>
                    <td>{{$book->end_date}}</td>
                    <td>{{$book->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>

$(document).ready( function () {
    $('#history').DataTable();
} );
</script>
@endsection