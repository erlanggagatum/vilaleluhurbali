@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class='mt-3'>Book</h3>
    <div class="row">
        <div class="col text-center"><a href="{{url('/book/1')}}" role="button" class="btn btn-primary d-block">Villa 1</a></div>
        <div class="col text-center"><a href="{{url('/book/2')}}" role="button" class="btn btn-primary d-block">Villa 2</a></div>
        <div class="col text-center"><a href="{{url('/book/3')}}" role="button" class="btn btn-primary d-block">Villa 3</a></div>
        <div class="col text-center"><a href="{{url('/book/4')}}" role="button" class="btn btn-primary d-block">Villa 4</a></div>
    </div>
    
    
    @if(isset($name))
    <div class="mt-3">
        <h4 mt-3>{{$name}}</h4>
    </div>
    @endif

    <!-- <div id="datepicker"></div> -->

    <form action='/book/1/1'>
    <div class="row mt-3">
        <div class="col">
            <div class="mb-3">
            <label for="checkinDate" class="form-label">Check-in</label>
            <input type="text" class="form-control datepicker" id="checkinDate" name='checkinDate'aria-describedby="date">
                <div id="date" class="form-text">
                Date format: mm/dd/yyyy
                </div>
        </div>
        </div>
        <div class="col">
        <div class="mb-3">
        <label for="selectNight" class="form-label">Stay</label>
        <select class="form-select" name='selectNight'aria-label="Default select example">
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
            <input type="text" class="form-control" id="checkoutDate" name='checkoutDate' disabled>
        </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
</div>
@endsection

@section('script')
<script>

    $(function() {
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd",
            autoClose: true,
        });
        $("#checkinDate").on('change',function(){
            var selDate = $(this).val();
            // alert(selDate.split("/")[0])
            var d = new Date(selDate.split("/")[2],selDate.split("/")[0]-1,selDate.split("/")[1])
            // var d = new Date(2021)
            alert(d)
            $('#checkoutDate').val(selDate)
        });
    });

</script>
@endsection