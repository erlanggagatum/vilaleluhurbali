@extends('layouts.app')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row" style="max-height: 800px">
        <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261485820.jpg?k=e69dcc89853dbe8e192fa05e444856dd8451270bc658c5d5016a391b2a256ad4&o=&hp=1" class="img-fluid w-100" alt="">
      </div>
      <!-- <img src="https://wallpapercave.com/wp/wp6300829.jpg" class="img-fluid" style="height:500px; width:100%;" alt=""> -->
      <div class="carousel-caption text-start d-block">
        <h1 class=''>Welcome to Leluhur Bali Villa and Apartment</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row" style="max-height: 800px">
        <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261488885.jpg?k=836b82046e28aa75802c311087f50399194fb3631760536af29f3185eddcae18&o=&hp=1" class="img-fluid" alt="">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row" style="max-height: 800px">
        <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261485832.jpg?k=2a19c9a21143e45b125de9f898ef2232a426ae62088f023e5355ad359eb0aaa0&o=&hp=1" class="img-fluid" alt="">
      </div>
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

<section class="container py-5">
    <div class="text center mb-3"> <h3 class="text-center"><strong>Accomodation Information</strong></h3></div>
    <div>
        <p class="text-center">
        Leluhur 1 Villa is a one-level vacation residence that defines a well-balanced fusion of contemporary and traditional, as well as urban and rustic design elements. It has the perfect blend of tropical charm and modern luxuries. Making full use of the property’s space, interiors are appointed with finely finished ornaments, wood furnishings, adorned with blue color as well as Balinese traditional wall decor, complemented with gorgeous art pieces and figurines. 2 bedrooms, a lovely tropical garden with a pool, AC in the living room and bedrooms and an excellent location close to Seminyak, Denpasar, Canggu, and Umalas, Leluhur Villa is a wonderful place for families and friends who want to have a true ‘home’ in Bali. The value for money is great at this 2-bedroom luxury villa in Kerobokan. A great find! for every booking longer than 4 days/3 nights, we are offering a free 1 hour massage for 1 person
        </p>
    </div>
    <div class="text-center"><strong>Villa Including:</strong></div>
    <div class="row">
        <div class="col text-center">
            <p>
                Air Conditioner<br>
                TV Cable<br>
                Living Room <br>
            </p>
        </div>
        <div class="col text-center">
            <p>
                Free Wifi <br>
                Parking Area <br>
            </p>
        </div>
        <div class="col text-center">
            <p>
                Available up to 2 Room <br>
                Refrigerator / Mini Bar<br>
            </p>
        </div>
        <div class="col text-center">
            <p>
                Kitchen & Bar <br>
                Private Pool <br>
            </p>
        </div>
    </div>
</section>

<!-- SWIMMING POOL -->
<section class='container py-5'>
    <h3 class='text-center mb-3'><strong>Swimming Pool</strong> </h3>
    <div class="row text-center">
        <div class="col-md">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div class="row" style="max-height: 400px">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261489159.jpg?k=592b950b590c784a75a57cb87a95b3710848a4b8a8c8dd5af9ee50f61edd2f01&o=&hp=1" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
        <div class="d-flex flex-wrap align-content-center bg-light h-100 text-center">
            <h3 class="text-center w-100">We offer you a swimming pool to utilize your quality time</h3>
        </div>
        </div>
    </div>
</section>

<!-- ROOM -->
<section class='container py-3'>
    <h3 class='text-center mb-3'><strong>Bedroom</strong> </h3>
    <div class="row text-center">
        <div class="col-md">
            <div class="d-flex flex-wrap align-content-center bg-light h-100 text-center">
                <h3 class="text-center w-100">Spacious bedroom with pool side view!</h3>
            </div>
        </div>
        <div class="col-md">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div class="row" style="max-height: 400px">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/261488926.jpg?k=2bdf7d0ecba06a4a8478935ec6a8cfb603ba1053536a5ba6ab710f0b84d119ae&o=&hp=1" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWAREST Tourist Attraction -->
<section class='container py-5'>
    <h3 class="text-center mb-5">
        <strong>Tourist Attraction
        </strong>
    </h3>
    <div class="text-center row">
        <div class="col-lg my-3 my-lg-0">
            <div class="row card bg-light border-0 p-2">
                <h5>Seminyak Beach</h5>
                <div class="card-body text-center">
                    <div style="max-height: 180px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://static.thehoneycombers.com/wp-content/uploads/sites/4/2021/01/La-Plancha-Sunset-Bar-on-Seminyak-Beach-Bali-Indonesia.jpg" alt="">
                    </div>
                    <p>2 kilometers from accomodation</p>
                    <a target="_blank"href="https://www.google.com/maps/dir/Leluhur+1,+Gg.+Berlian,+Kerobokan+Kelod,+Kuta+Utara,+Badung+Regency,+Bali+80361/Seminyak+Beach,+Bali/@-8.6831556,115.156404,15z/data=!4m13!4m12!1m5!1m1!1s0x2dd2473ee4317121:0xac7276c502f0d783!2m2!1d115.1690589!2d-8.6764773!1m5!1m1!1s0x2dd2471c804bfd05:0xdcc2b5ae63dc9082!2m2!1d115.1578837!2d-8.6920123" class="btn btn-primary">Direction</a>
                </div>
            </div>
        </div>
        <div class="col-lg my-3 my-lg-0">
            <div class="row card bg-light border-0 p-2">
                <h5>Batu Belig Beach</h5>
                <div class="card-body text-center">
                    <div style="max-height: 180px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://2.bp.blogspot.com/--tD8EAz4M6g/WB2njiDssLI/AAAAAAAABgM/U8KYXij0Jp4N838lgtPE0KwvKrNt1zXXQCLcB/s1600/23.%2Bpantai.jpg" alt="">
                    </div>
                    <p>2.1 Kilometers from accomodation</p>
                    <a target="_blank"href="https://www.google.com/maps/dir/Leluhur+1,+Gg.+Berlian,+Kerobokan+Kelod,+Kuta+Utara,+Badung+Regency,+Bali+80361/Pantai+Batu+Belig,+Jalan+Batu+Belig,+Kerobokan+Kelod,+Badung+Regency,+Bali/@-8.674097,115.1489769,15z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x2dd2473ee4317121:0xac7276c502f0d783!2m2!1d115.1690589!2d-8.6764773!1m5!1m1!1s0x2dd24774c0a631b1:0x9d16e84a9b99cabd!2m2!1d115.1459553!2d-8.6742449" class="btn btn-primary">Direction</a>
                    <!-- <button class="btn btn-primary">Direction</button> -->
                </div>
            </div>
        </div>
        <div class="col-lg my-3 my-lg-0">
            <div class="row card bg-light border-0 p-2">
                <h5>Double Six Beach</h5>
                <div class="card-body text-center">
                    <div style="max-height: 180px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/02/21/1506841320.jpg" alt="">
                    </div>
                    <p>2.1 kilometers from accomodation</p>
                    <a target="_blank"href="https://www.google.com/maps/dir/Leluhur+1,+Gg.+Berlian,+Kerobokan+Kelod,+Kuta+Utara,+Badung+Regency,+Bali+80361/Double+Six+Beach,+Jalan+Double+Six,+Seminyak,+Badung+Regency,+Bali/@-8.6848244,115.1525226,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x2dd2473ee4317121:0xac7276c502f0d783!2m2!1d115.1690589!2d-8.6764773!1m5!1m1!1s0x2dd246e108062c6d:0x7737566399a0df2c!2m2!1d115.1621384!2d-8.6975406" class="btn btn-primary">Direction</a>
                </div>
            </div>
        </div>
        <div class="col-lg my-3 my-lg-0">
            <div class="row card bg-light border-0 p-2">
                <h5>Legian Beach</h5>
                <div class="card-body text-center">
                    <div style="max-height: 180px; overflow:hidden" class="bg-light w-100 mb-4">
                        <img class="img-fluid" src="https://a.cdn-hotels.com/gdcs/production130/d513/d2aa517f-4c8d-4f04-b26d-45d0337f0690.jpg" alt="">
                    </div>
                    <p>2.5 kilometers from accomodation</p>
                    <a target="_blank"href="https://www.google.com/maps/dir/Leluhur+1,+Gg.+Berlian,+Kerobokan+Kelod,+Kuta+Utara,+Badung+Regency,+Bali+80361/Legian+Beach,+Bali/@-8.6836061,115.1605008,14.5z/data=!4m13!4m12!1m5!1m1!1s0x2dd2473ee4317121:0xac7276c502f0d783!2m2!1d115.1690589!2d-8.6764773!1m5!1m1!1s0x2dd246e7987b2117:0xeca4ea2fc43d3caf!2m2!1d115.1647362!2d-8.7039476" class="btn btn-primary">Direction</a>
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
