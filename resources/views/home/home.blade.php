@extends('layouts.app')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://wallpapercave.com/wp/wp6300829.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption text-start d-block">
        <h1 class=''>Welcome to Leluhur Bali Villa and Apartment</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://wallpaperaccess.com/full/441132.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- FEATURES -->
<section class='container py-5'>
    <h3 class='text-center mb-3'>Features</h3>
    <div class="row text-center">
        <div class="col-md">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div style='height:100px;' class="bg-light w-100 mb-4">

                    </div>
                    <h5>Swimming Pool</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div style='height:100px;' class="bg-light w-100 mb-4">

                    </div>
                    <h5>Swimming Pool</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div style='height:100px;' class="bg-light w-100 mb-4">

                    </div>
                    <h5>Swimming Pool</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CHOICES -->
<section class='container py-5'>
    <h3 class="text-center mb-5">
        Choices
    </h3>
    <div class="text-center row">
        <div class="col-lg my-3 my-lg-0">
            <div class="card bg-light border-0 p-4">
                <h5>Villa 1</h5>
                <div class="card-body text-center">
                    <div style='height:100px;' class="bg-light w-100 mb-4">

                    </div>
                    <p>Location: Jalan Terus Belok Kiri RT.2</p>
                    <p>2 Swimming Pool</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-lg my-3 my-lg-0">
            <div class="card bg-light border-0 p-4">
                <h5>Villa 2</h5>
                <div class="card-body text-center">
                    <div style='height:100px;' class="bg-light w-100 mb-4">

                    </div>
                    <p>Location: Jalan Terus Belok Kiri RT.2</p>
                    <p>2 Swimming Pool</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-lg my-3 my-lg-0">
            <div class="card bg-light border-0 p-4">
                <h5>Villa 3</h5>
                <div class="card-body text-center">
                    <div style='height:100px;' class="bg-light w-100 mb-4">

                    </div>
                    <p>Location: Jalan Terus Belok Kiri RT.3</p>
                    <p>2 Swimming Pool</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-lg my-3 my-lg-0">
            <div class="card bg-light border-0 p-4">
                <h5>Villa 4</h5>
                <div class="card-body text-center">
                    <div style='height:100px;' class="bg-light w-100 mb-4">

                    </div>
                    <p>Location: Jalan Terus Belok Kiri RT.4</p>
                    <p>2 Swimming Pool</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="container py-5 text-center">
    <h3 class="text-center m-3">
        Track Your Order
    </h3>
    <p>If you don't want to Sign Up, you can keep on track with your book! Please enter your booking number below to track your book status.</p>
    <!-- <div class="row my-2">
        <form action="get">
            <div class="col col-centered my-2">
                <input type="text" class="form-control" name="booking_number" id="">
            </div>
            <div class="col col-centered my-2">
                <button style="width:100%; max-width:500px" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div> -->
    <div class="justify-content-center align-items-center w-100">
        <form class='' action="" method="get">
            <input type="text" class="form-control" name="" id="">
            <button type="submit" class="my-2 btn w-50 btn-primary">Submit</button>
        </form>
    </div>
    
</section>

<section class="footer mt-auto color-primary">
    <p>this is footer</p>
</section>
@endsection

<!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> -->