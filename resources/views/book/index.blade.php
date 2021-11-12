@extends('layouts.app')


@section('content')
<div class="container mt-4">
    <h3 class='mt-3'>Book</h3>
    <div class="row">
        <div class="col text-center"><a href="{{url('/book/1')}}" role="button" class="btn @if(str_contains(Request::path(),'1'))active @endif btn-outline-primary d-block">Villa 1</a></div>
        <div class="col text-center"><a href="{{url('/book/2')}}" role="button" class="btn @if(str_contains(Request::path(),'2'))active @endif btn-outline-primary d-block">Villa 2</a></div>
        <div class="col text-center"><a href="{{url('/book/3')}}" role="button" class="btn @if(str_contains(Request::path(),'3'))active @endif btn-outline-primary d-block">Villa 3</a></div>
        <div class="col text-center"><a href="{{url('/book/4')}}" role="button" class="btn @if(str_contains(Request::path(),'4'))active @endif btn-outline-primary d-block">Villa 4</a></div>
    </div>
    
    
    @if(isset($name))
    <div class="mt-3">
        <h4 mt-3>{{$name}}</h4>
    </div>
    @endif

    <!-- <div id="datepicker"></div> -->

    <form method='get' action='/book/order/step2'>
    <!-- @csrf -->
    <div class="row mt-3">
        <div class="col">
            <div class="mb-3">
            <label for="checkinDate" class="form-label">Check-in</label>
            <input type="text" class="form-control datepicker" id="checkinDate" name='checkinDate'aria-describedby="date">
                <div id="date" class="form-text">
                Date format: mm/dd/yyyy @error('checkinDate') <span class="badge bg-warning text-black">Please Choose Date</span>@enderror
                </div>
        </div>
        </div>
        <div class="col">
        <div class="mb-3">
        <label for="selectNight" class="form-label">Stay</label>
        <select class="form-select" id='stay' name='selectNight'aria-label="Default select example">
            <option value='1' selected>1 Night</option>
            <option value="2">2 Night</option>
            <option value="3">3 Night</option>
            <option value="4">4 Night</option>
            <option value="5">5 Night</option>
            <option value="6">6 Night</option>
            <option value="7">7 Night</option>
            </select>
        </div>
        </div>
        <div class="col">
        <div class="mb-3">
            <label for="checkoutDate" class="form-label">Check-out</label>
            <input type="text" class="form-control" id="checkoutDate" name='checkoutDate' readonly>
        </div>
        </div>
        <input type="text" name="idvilla" id="idvilla" value='{{$idvilla}}' class="form-control" hidden>
    </div>

    <div class="mb-3">

    <h4>Total</h4>
    <p>Rp2.000.000,00,- x <span id='num_nights'>0</span> nights</p>
    <p>Total: <b>Rp<span id='total_price'>0</span>,00,-</b></p>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    
</div>
@endsection

@section('script')
<script>

    $(function() {
        function getStands(){
            var stands = $('#stay').val();
            return stands;
        }
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd",
            autoClose: true,
        });

        $("#checkinDate").on('change',function(){
            renderCheckout();
        });

        $("#stay").on('change',function(){
            renderCheckout();
        });

        function renderCheckout(){
            var selDate = $("#checkinDate").val();
            var d = new Date(selDate.split("/")[2],selDate.split("/")[0]-1,selDate.split("/")[1])
            var stands = parseInt(getStands())
            
            // alert(stands)
            d.setDate(d.getDate() + stands);
            var outDateString = (d.getMonth() + 1) + "/" + d.getDate() + "/" + d.getFullYear()
            $('#checkoutDate').val(outDateString)
        }
    });

</script>
@endsection