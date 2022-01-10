@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class='mt-3'>Book</h3>
    @if(session('warning'))
    <div class="row">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> {{@session('warning')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif
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
        <div class="col-sm">
            <div class="mb-3">
                <label for="checkinDate" class="form-label">Check-in</label>
                <div class="input-group ">
                    <!-- <button class="btn btn-outline-primary d-block input-group-append" type="button" id="checkinDate">Button</button> -->
                    <input type="text" class="form-control datepicker" id="checkinDate" name='checkinDate'aria-describedby="date" readonly>
                    
                </div>
                <div id="date" class="form-text">
                    Date format: mm/dd/yyyy @error('checkinDate') <span class="badge bg-warning text-black">Please Choose Date</span>@enderror
                </div>
            </div>
        </div>
        <div class="col-sm">
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
        <div class="col-sm">
        <div class="mb-3">
            <label for="checkoutDate" class="form-label">Check-out</label>
            <input type="text" class="form-control" id="checkoutDate" name='checkoutDate' readonly>
        </div>
        </div>
        <input type="text" name="idvilla" id="idvilla" value='{{$idvilla}}' class="form-control" hidden>
    </div>

    <div class="mb-3">

    <h4>Total</h4>
    <p><span id="price">2.000.000,00</span>,- x <span id='num_nights'>1</span> nights</p>
    <p>Total: <b><span id='grand_total'>0</span>,-</b></p>
    </div>
    <div class="d-grid d-md-block-sm">
        <button type="submit" class="btn btn-full btn-primary">Submit</button>
    </div>
    </form>

    


    
</div>
@endsection

@section('script')
<script>

    $(function() {
        const booked_date = {!!json_encode($booked_date)!!}
        const villaPrice = {{($price)}}
        var nights = 1

        renderGrandTotal()

        // $('#price').text(formatter.format([villaPrice]));
        // render()
        

        // console.log(villaPrice)

        // console.log(JSON.parse(booked));
        function getStands(){
            var stands = $('#stay').val();
            return stands;
        }
        $(".datepicker").datepicker({
            clearBtn: true,
            dateFormat: "yy-mm-dd",
            autoClose: true,
            todayHighlight: true,
            startDate: new Date().toLocaleDateString(),
            datesDisabled: booked_date
        });

        $("#checkinDate").on('change',function(){
            renderCheckout();
        });

        $("#stay").on('change',function(){
            renderCheckout();
            renderGrandTotal()
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

        function renderGrandTotal(){
            var nights = parseInt(getStands())
            var price = villaPrice

            console.log(nights)

            var grandTotal = price * nights

            $('#price').text(formatter.format([villaPrice]))
            $('#grand_total').text(formatter.format([grandTotal]))
            $('#num_nights').text(nights)
        }

    });

</script>
@endsection