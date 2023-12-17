@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 >My Books</h1>

    <!-- books history -->
    <h3 class="mt-3"><b>Booking List History</b></h3>
    <div class="card">
        <div class="card-body">
        <table id='books' class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Location</th>
                    <th>Start Date (y/m/d)</th>
                    <th>End Date (y/m/d)</th>
                    <th>Nights</th>
                    <th>Status</th>
                    <th>Status Detail</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$book->getVilla()->name}}</td>
                        <td>{{$book->start_date}}</td>
                        <td>{{$book->end_date}}</td>
                        <td>{{$book->nights}}</td>
                        <td>
                            @if ($book->status == 'Cancelled')
                                <span class="badge bg-danger">
                                {{$book->status}}</span>
                            @elseif ($book->status != 'Completed')
                                <span class="badge bg-info">
                                {{$book->status}}</span>
                            @else
                                <span class="badge bg-success">
                                {{$book->status}}</span>
                            @endif
                        </td>
                        <td>{{$book->status_detail}}</td>
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
    $('#books').DataTable({
        order: [[2, 'desc']]
        // "ordering": false
    });
} );
</script>
@endsection
