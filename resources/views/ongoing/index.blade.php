@extends('layouts.adminapp')

@section('content')
<div class="container mt-4">
    <h1 >Ongoing Books</h1>
    
    <!-- new books -->
    <h3 class="mt-3"><b>New Books</b></h3>
    <div class="card">
        <div class="card-body">
        <table id='new_books' class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Start Date (y/m/d)</th>
                    <th>End Date (y/m/d)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                @if($book->status=='Sent to admin')
                <tr>
                    <td>{{$book->getUser()->first_name}}</td>
                    <td>{{$book->getUser()->last_name}}</td>
                    <td>{{$book->start_date}}</td>
                    <td>{{$book->end_date}}</td>
                    <td><a class="btn btn-primary" href="{{url('/admin/ongoing/').'/'.$book->id}}" role="button">Detail</a></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        </div>
    </div>


    <!-- waiting for payment -->
    
    <h3 class="mt-3"><b>Waiting for Payment</b></h3>
    <div class="card">
        <div class="card-body">
        <table id='waiting_payment' class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Start Date (y/m/d)</th>
                    <th>End Date (y/m/d)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                @if($book->status=='Waiting for payment')
                <tr>
                    <td>{{$book->getUser()->first_name}}</td>
                    <td>{{$book->getUser()->last_name}}</td>
                    <td>{{$book->start_date}}</td>
                    <td>{{$book->end_date}}</td>
                    <td><a class="btn btn-primary" href="{{url('/admin/ongoing/').'/'.$book->id}}" role="button">Detail</a></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        </div>
    </div>


    <!-- waiting for payment -->
    
    <h3 class="mt-3"><b>Waiting for Checkin</b></h3>
    <div class="card">
        <div class="card-body">
        <table id='waiting_checkin' class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Start Date (y/m/d)</th>
                    <th>End Date (y/m/d)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                @if($book->status=='Waiting for checkin')
                <tr>
                    <td>{{$book->getUser()->first_name}}</td>
                    <td>{{$book->getUser()->last_name}}</td>
                    <td>{{$book->start_date}}</td>
                    <td>{{$book->end_date}}</td>
                    <td><a class="btn btn-primary" href="{{url('/admin/ongoing/').'/'.$book->id}}" role="button">Detail</a></td>
                </tr>
                @endif
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
    $('#new_books').DataTable();
    $('#waiting_payment').DataTable();
    $('#waiting_checkin').DataTable();
} );
</script>
@endsection