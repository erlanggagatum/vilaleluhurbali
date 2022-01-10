@extends('layouts.app')

@section('head')
{!! ReCaptcha::htmlScriptTagJsApi() !!}
@endsection

@section('content')
<div class="container mt-4">
    <h3 class='mt-3'>Booking Summary for

    @if(isset($idvilla))
    <b>Villa {{$idvilla}}</b>
    @endif
    </h3>
    
    <div class="mt-3">
        <h5 class='mb-3 text-heavy'><b>Personal Information</b></h5>
        <div class="row">
            <div class="col">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control datepicker" value='{{Auth::user()->first_name}}' id="firstName" name='firstName'aria-describedby="date" readonly>
            </div>
            <div class="col">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control datepicker" value='{{Auth::user()->last_name}}' id="lasttName" name='lastName'aria-describedby="date" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control datepicker" value='{{Auth::user()->phone_number}}' id="phoneNumber" name='phoneNumber'aria-describedby="date" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control datepicker" value='{{Auth::user()->email}}' id="email" name='email'aria-describedby="date" readonly>
            </div>
        </div>
    </div>

    <h5 class='mt-3'><b>Booking Date</b></h5>
    <!-- <div id="datepicker"></div> -->

    <form method='post' action='/book/order/final'>
    @csrf
    <div class="row mt-3">
        <div class="col">
            <div class="mb-3">
            <label for="checkinDate" class="form-label">Check-in</label>
            <input type="text" class="form-control datepicker" value='{{$start}}' id="checkinDate" name='checkinDate'aria-describedby="date" readonly>
                <div id="date" class="form-text">
                Date format: mm/dd/yyyy
                </div>
        </div>
        </div>
        <div class="col">
        <div class="mb-3">
            <label for="selectNight" class="form-label">Stay</label>
            <input type="text" value='{{$nights}} nights' class="form-control" id="stay" name='selectNight' readonly>
        </div>
        </div>
        <div class="col">
        <div class="mb-3">
            <label for="checkoutDate" class="form-label">Check-out</label>
            <input type="text" value='{{$end}}' class="form-control" id="checkoutDate" name='checkoutDate' readonly>
        </div>
        </div>
        <input type="text" name="idvilla" id="idvilla" value='{{$idvilla}}' class="form-control" hidden>

    </div>

    <div class="mb-3">

    <h4>Total</h4>
    <p><span id="price">2.000.000,00</span>,- x <span id='num_nights'>1</span> nights</p>
    <p>Total: <b><span id='grand_total'>0</span>,-</b></p>

    </div>

    <div class="row">
        <div class="col mb-3">
            {!! htmlFormSnippet() !!}
            
            @if($errors->has('g-recaptcha-response'))
                <i class='text-danger'>*Please fill the captcha challange!</i>
            @endif
        </div>
    </div>
    
    <div class="row">
        <div class="col mb-5">
            <button type="submit" class="btn btn-primary">Confirm my Reservation</button>
        </div>
        
    </div>
    
    </form>


    
</div>
@endsection

@section('script')
<script>

    $(function() {
        const villaPrice = {{($price)}}
        const nights = {{$nights}}

        $('#price').text(formatter.format(villaPrice))
        $('#num_nights').text(nights)
        $('#grand_total').text(formatter.format(villaPrice * nights))
        
    });

</script>
@endsection