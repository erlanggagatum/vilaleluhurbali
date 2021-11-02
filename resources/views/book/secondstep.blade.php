@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class='mt-3'>Booking Summary for

    @if(isset($name))
    <b>{{$name}}</b>
    @endif
    </h3>

    <!-- <div id="datepicker"></div> -->

    <form method='get' action='/book/1/2'>
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
    </div>

    <div class="mb-3">

    <h4>Total</h4>
    <p>Rp200.000,00,- x 4 nights</p>
    <p>Total: <b>Rp800.000,00,-</b></p>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    
</div>
@endsection

@section('script')
<script>

    $(function() {
    });

</script>
@endsection