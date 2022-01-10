@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="text-center">
        
        <h3 class='mt-3'>
            <b>Congratulation!</b>
        </h3>

        <p class='mt-4'>
            Your order for @if(isset($idvilla))
            <b>Villa {{$idvilla}}</b>
            @endif has been sent to our system. Please wait until the receptionist contact you for the payment and confirmation.
        </p>

        <h6 class='mt-4'>
            <b>Booking Number</b>
        </h6>
        <h4>
            <b>{{$booking_number}}</b>
        </h4>

        <p class='mt-4'>
            Your order will be canceled if you didn't give a confirmation and came at the check in time.
        </p>
        <a class="btn btn-primary" href="/my-books" role="button">See my Book</a>

        <p class="mt-4">
            <i>{{$email_status}}</i>
        </p>
    </div>
    
</div>
@endsection

@section('script')
<script>

    $(function() {
    });

</script>
@endsection