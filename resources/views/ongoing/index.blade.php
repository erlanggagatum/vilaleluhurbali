@extends('layouts.adminapp')

@section('content')
<div class="container mt-4">
    
    
    @if($msg = Session::get('success'))  
    <div class="alert bg-success alert-dismissible fade show" role="alert">
        <strong>Success deleting record!</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <h1 >Ongoing Books</h1>
    
    <!-- new books -->
    <h3 class="mt-3">
        <b>New Books</b>
        @if($books->where('status','=','Sent to admin')->count() > 0)
        <span class="badge rounded-pill bg-warning text-dark">
            {{$books->where('status','=','Sent to admin')->count()}}
        </span>
        @endif
    </h3>
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
    
    <h3 class="mt-3">
        <b>Waiting for Payment</b>
        
        @if($books->where('status','=','Waiting for payment')->count() > 0)
        <span class="badge rounded-pill bg-warning text-dark">
            {{$books->where('status','=','Waiting for payment')->count()}}
        </span>
        @endif
    </h3>
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
    
    <h3 class="mt-3">
        <b>Waiting for Checkin</b>
        
        @if($books->where('status','=','Waiting for checkin')->count() > 0)
        <span class="badge rounded-pill bg-warning text-dark">
            {{$books->where('status','=','Waiting for checkin')->count()}}
        </span>
        @endif
    </h3>
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

    <!-- at villa -->
    
    <h3 class="mt-3">
        <b>Customers at Villa</b>
        
        @if($books->where('status','=','At villa')->count() > 0)
        <span class="badge rounded-pill bg-warning text-dark">
            {{$books->where('status','=','At villa')->count()}}
        </span>
        @endif
    </h3>
    <div class="card mb-3">
        <div class="card-body">
        <table id='at_villa' class="table table-striped">
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
                @if($book->status=='At villa')
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
    $('#at_villa').DataTable();
} );
</script>
@endsection