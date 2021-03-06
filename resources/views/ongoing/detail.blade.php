@extends('layouts.adminapp')

@section('content')
<div class="container mt-4">
    
    <h3 class='mt-3'>Booking Summary for {{$book->villa->name}}
    </h3>

    @if($msg = Session::get('success'))  
    <div class="alert bg-success alert-dismissible fade show" role="alert">
        <strong>Data Saved!</strong> {{$msg}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    @elseif($msg = Session::get('warning'))
    <div class="alert bg-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> {{$msg}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif



    <div class="mt-3">
        <h5><b>
            Status
        </b></h5>
        @if($book->status == 'Sent to admin')
        <h4>
            <span class="badge rounded-pill bg-warning text-dark">New Order</span>
        </h4> 
        <p>Customer is waiting to be contacted by admin</p>
        @elseif($book->status == 'Waiting for payment')
        <h4>
            <span class="badge rounded-pill bg-info text-light">Payment Process</span>
        </h4> 
        <p>Customer will pay total amount of rent amount. Please confirm the payment manually with customer</p>
        @elseif($book->status == 'Waiting for checkin')
        <h4>
            <span class="badge rounded-pill bg-primary">Checkin</span>
        </h4> 
        <p>Wait until customer arrived at the villa</p>
        @elseif($book->status == 'At villa')
        <h4>
            <span class="badge rounded-pill bg-success text-dark">At villa</span>
        </h4> 
        <p>Customer at the villa</p>
        @else
        <h4>
            <span class="badge rounded-pill bg-success text-dark">Completed</span>
        </h4> 
        <p>Customer checked out</p>
        @endif
    </div>
    
    <div class="mt-3">
        <h5 class='mb-3 text-heavy'><b>Personal Information</b></h5>
        <div class="row">
            <div class="col">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control datepicker" value='{{$book->getUser()->first_name}}' id="firstName" name='firstName'aria-describedby="date" readonly>
            </div>
            <div class="col">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control datepicker" value='{{$book->getUser()->last_name}}' id="lasttName" name='lastName'aria-describedby="date" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control datepicker" value='{{$book->getUser()->phone_number}}' id="phoneNumber" name='phoneNumber'aria-describedby="date" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control datepicker" value='{{$book->getUser()->email}}' id="email" name='email'aria-describedby="date" readonly>
            </div>
        </div>
    </div>

    <h5 class='mt-3'><b>Booking Date</b></h5>
    <!-- <div id="datepicker"></div> -->

    <form method='post' action=''>
    @csrf
    <div class="row mt-3">
        <div class="col">
            <div class="mb-3">
            <label for="checkinDate" class="form-label">Check-in</label>
            <input type="text" class="form-control datepicker" value='{{$book->start_date}}' id="checkinDate" name='checkinDate'aria-describedby="date" readonly>
                <div id="date" class="form-text">
                Date format: mm/dd/yyyy
                </div>
        </div>
        </div>
        <div class="col">
        <div class="mb-3">
            <label for="selectNight" class="form-label">Stay</label>
            <input type="text" value='{{$book->nights}} nights' class="form-control" id="stay" name='selectNight' readonly>
        </div>
        </div>
        <div class="col">
        <div class="mb-3">
            <label for="checkoutDate" class="form-label">Check-out</label>
            <input type="text" value='{{$book->end_date}}' class="form-control" id="checkoutDate" name='checkoutDate' readonly>
        </div>
        </div>

    </div>
    </form>

    <div class="mb-3">

    <h5><strong>Total</strong></h5>
    <p><span id="price">2.000.000,00</span>,- x <span id='num_nights'>1</span> nights</p>
    <p>Total: <b><span id='grand_total'>0</span>,-</b></p>

    @if($book->status != 'Completed')
    <div class='my-3'>
        <form action="{{url('/admin/ongoing/update', $book->id)}}" method='post'>
            @csrf
                <div class="d-flex">
                    <input style='min-width: 15px' class="form-check-input" name='security_checkbox' type="checkbox" value="" id="security_checkbox">
                    <label class="form-check-label mx-2" for="security_checkbox">
                    @if($book->status == 'Sent to admin')
                        I have confirmed the book with the respective customer
                    @elseif($book->status == 'Waiting for payment')
                        I have confirmed the book's payment with the respective customer
                    @elseif($book->status == 'Waiting for checkin')
                        I have confirmed that the customer has arrived and stayed at the villa
                    @elseif($book->status == 'At villa')
                        I have confirmed that the customer has stayed at the villa and going to checkout. After this, the book will be completed and cannot be modified.
                    @endif
                    </label>
                </div>
            
            <div class="my-3">
                <button type="submit" class="btn btn-primary">Confirm Reservation</button>
                <button data-bs-toggle="modal" data-bs-target="#deleteModal" type='button' class="btn btn-outlined-secondary mx-1 ">Delete</button>
            </div>
        </form>
    </div>
    @endif

    



    
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure want to <strong>permanently delete</strong> {{$book->user->first_name}} {{$book->user->last_name}}'s book
            at {{$book->villa->name}} from {{$book->start_date}} to {{$book->end_date}}. <br>
            
        </div>
        <div class="modal-footer">
        <form action="{{url('/admin/ongoing/').'/'.$book->id}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-primary">Delete</button>
        </form>
            
            <!-- <a href="" class="btn btn-primary" role='button'>Delete</a> -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>

    $(function() {
        
        const villaPrice = {{($book->villa->price)}}
        const nights = {{$book->nights}}

        $('#price').text(formatter.format(villaPrice))
        $('#num_nights').text(nights)
        $('#grand_total').text(formatter.format(villaPrice * nights))
        
    });

</script>
@endsection