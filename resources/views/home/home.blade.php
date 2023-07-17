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
        <div class="col-md mx-2">
            <div class="row card border-0 p-2">
                <div class="card-body text-center">
                    <div style="max-height: 200px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261489159.jpg?k=592b950b590c784a75a57cb87a95b3710848a4b8a8c8dd5af9ee50f61edd2f01&o=&hp=1" alt="">
                    </div>
                    <h5>Swimming Pool</h5>
                    <p>Enjoy various tourist attraction from beach to nearest resto</p>
                    <!-- <a target="_blank"href="https://www.google.com/maps/dir/Leluhur+1,+Gg.+Berlian,+Kerobokan+Kelod,+Kuta+Utara,+Badung+Regency,+Bali+80361/Seminyak+Beach,+Bali/@-8.6831556,115.156404,15z/data=!4m13!4m12!1m5!1m1!1s0x2dd2473ee4317121:0xac7276c502f0d783!2m2!1d115.1690589!2d-8.6764773!1m5!1m1!1s0x2dd2471c804bfd05:0xdcc2b5ae63dc9082!2m2!1d115.1578837!2d-8.6920123" class="btn btn-primary">Direction</a> -->
                </div>
            </div>
        </div>
        <div class="col-md mx-2">
            <div class="row card border-0 p-2">
                <div class="card-body text-center">
                    <div style="max-height: 200px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261488926.jpg?k=2bdf7d0ecba06a4a8478935ec6a8cfb603ba1053536a5ba6ab710f0b84d119ae&o=&hp=1" alt="">
                    </div>
                    <h5>Spacious Room</h5>
                    <p>Enjoy various tourist attraction from beach to nearest resto</p>
                    <!-- <a target="_blank"href="https://www.google.com/maps/dir/Leluhur+1,+Gg.+Berlian,+Kerobokan+Kelod,+Kuta+Utara,+Badung+Regency,+Bali+80361/Seminyak+Beach,+Bali/@-8.6831556,115.156404,15z/data=!4m13!4m12!1m5!1m1!1s0x2dd2473ee4317121:0xac7276c502f0d783!2m2!1d115.1690589!2d-8.6764773!1m5!1m1!1s0x2dd2471c804bfd05:0xdcc2b5ae63dc9082!2m2!1d115.1578837!2d-8.6920123" class="btn btn-primary">Direction</a> -->
                </div>
            </div>
        </div>
        <div class="col-md mx-2">
            <div class="row card border-0 p-2">
                <div class="card-body text-center">
                    <div style="max-height: 200px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://static.thehoneycombers.com/wp-content/uploads/sites/4/2021/01/La-Plancha-Sunset-Bar-on-Seminyak-Beach-Bali-Indonesia.jpg" alt="">
                    </div>
                    <h5>Tourist Attraction</h5>
                    <p>Enjoy various tourist attraction from beach to nearest resto</p>
                    <!-- <a target="_blank"href="https://www.google.com/maps/dir/Leluhur+1,+Gg.+Berlian,+Kerobokan+Kelod,+Kuta+Utara,+Badung+Regency,+Bali+80361/Seminyak+Beach,+Bali/@-8.6831556,115.156404,15z/data=!4m13!4m12!1m5!1m1!1s0x2dd2473ee4317121:0xac7276c502f0d783!2m2!1d115.1690589!2d-8.6764773!1m5!1m1!1s0x2dd2471c804bfd05:0xdcc2b5ae63dc9082!2m2!1d115.1578837!2d-8.6920123" class="btn btn-primary">Direction</a> -->
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
                    <!-- <div style='height:100px;' class="bg-light w-100 mb-4"> -->

                    <div style="max-height: 200px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261488887.jpg?k=cbb2339cea329a56dba5394ac568816035a33287cddb1755586e2834608dfc50&o=&hp=1" alt="">
                    </div>
                    <!-- </div> -->
                    <!-- <p>Location: Jalan Terus Belok Kiri RT.2</p>
                    <p>2 Swimming Pool</p> -->
                    <a href="{{route('book.villa',1)}}" class="btn btn-primary">Check Availability</a>
                </div>
            </div>
        </div>
        <div class="col-lg my-3 my-lg-0">
            <div class="card bg-light border-0 p-4">
                <h5>Villa 2</h5>
                <div class="card-body text-center">

                    <div style="max-height: 200px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261488912.jpg?k=071255c4b5b83ec1393d2e6b7c9c9550741bb7297305e36300e19ca1b25d630c&o=&hp=1" alt="">
                    </div>
                    <!-- <div style='height:100px;' class="bg-light w-100 mb-4">

                    </div> -->
                    <!-- <p>Location: Jalan Terus Belok Kiri RT.2</p>
                    <p>2 Swimming Pool</p> -->
                    <a href="{{route('book.villa',2)}}" class="btn btn-primary">Check Availability</a>
                </div>
            </div>
        </div>
        <div class="col-lg my-3 my-lg-0">
            <div class="card bg-light border-0 p-4">
                <h5>Villa 3</h5>
                <div class="card-body text-center">

                    <div style="max-height: 200px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261488916.jpg?k=f805d3816ca8738624af063ca59293e057b4f4d14be3f68ab8ecb1a517b87803&o=&hp=1" alt="">
                    </div>
                    <!-- <div style='height:100px;' class="bg-light w-100 mb-4">

                    </div> -->
                    <!-- <p>Location: Jalan Terus Belok Kiri RT.3</p>
                    <p>2 Swimming Pool</p> -->
                    <a href="{{route('book.villa',3)}}" class="btn btn-primary">Check Availability</a>
                </div>
            </div>
        </div>
        <div class="col-lg my-3 my-lg-0">
            <div class="card bg-light border-0 p-4">
                <h5>Villa 4</h5>
                <div class="card-body text-center">

                    <div style="max-height: 200px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261488928.jpg?k=0fb1916f7360f84ad936242a282b4505d4b6b5b2706c392805d4c23e8b231f4b&o=&hp=1" alt="">
                    </div>
                    <!-- <div style='height:100px;' class="bg-light w-100 mb-4">

                    </div> -->
                    <!-- <p>Location: Jalan Terus Belok Kiri RT.4</p>
                    <p>2 Swimming Pool</p> -->
                    <a href="{{route('book.villa',4)}}" class="btn btn-primary">Check Availability</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="footer mb-0 w-100 mt-auto color-primary py-5" style="background-color: #333;">
    <div class="container text-light" style="">
        <div class="row">
            <div class="col-sm"><h6>Contact Us</h6>
                <p>
                    Jl. Intan Permai, Gg. Berlian 1C, Kerobokan Kelod, Kuta - Bali E.
                    <br> E. info@leluhurbali.com <br> P. +62 81 834 9919 <br> M. +62 82 247 030 147
                </p>
            </div>
            <div class="col-sm"><h6>Quick Links</h6>
                <a href="{{route('home')}}">Home</a> <br>
                <a href="{{route('book.villa', 1)}}">Book</a><br>
                <a href="{{route('features.index')}}">Features</a><br>
                <a href="{{route('contact-us')}}">Contact Us</a>
            </div>
            <div class="col-sm"><h6>Social Media</h6>

                <a href="https://www.instagram.com/leluhurbali/?hl=en" style="width: 10px; height:10px" class="" title="Instagram"><svg style="color: white; width:32px; height:32px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" fill="white"></path> </svg></a>
            </div>
        </div>
    </div>
</section>
<!-- <section class="container py-5 text-center">
    <h3 class="text-center m-3">
        Track Your Order
    </h3>
    <p>If you don't want to Sign Up, you can keep on track with your book! Please enter your booking number below to track your book status.</p>
    <div class="justify-content-center align-items-center w-100">
        <form class='' action="" method="get">
            <input type="text" class="form-control" name="" id="">
            <button type="submit" class="my-2 btn w-50 btn-primary">Submit</button>
        </form>
    </div>


    mantab bay
</section> -->
@endsection

