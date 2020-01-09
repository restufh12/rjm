@extends('frontend.template.main')
@section('title', 'Home')
    
@section('content')
<!-- Banner start -->
<div class="banner">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item banner-max-height">
        <img src="{{ URL::asset('frontend/img/banner-slider-1.jpg') }}" alt="banner-slider-2">
        <div class="carousel-caption banner-slider-inner">
          <div class="banner-content">
            <h1 data-animation="animated fadeInDown delay-1s">Mudah Menentukan <span>Pembayaran</span></h1>
            <p data-animation="animated fadeInUp delay-05s">Kami menerima pembayaran cash dan kredit, anda bisa mensimulasikan pembayaran cicilan anda.</p>
            <a href="{{ url('/simulasi_cicilan') }}" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Simulasi Cicilan</a>
          </div>
        </div>
      </div>
      <div class="item banner-max-height active">
        <img src="{{ URL::asset('frontend/img/banner-slider-1.jpg') }}" alt="banner-slider-1">
        <div class="carousel-caption banner-slider-inner">
          <div class="banner-content">
            <h1 data-animation="animated fadeInDown delay-05s">Temukan <span>Mobil</span> Impianmu</h1>
            <p data-animation="animated fadeInUp delay-1s">Kami menjual berbagai jenis mobil, mungkin disini kamu dapat menemukan mobil impianmu.</p>
            <a href="{{ url('/grid') }}" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Cari Sekarang</a>
          </div>
        </div>
      </div>
      <div class="item banner-max-height">
        <img src="{{ URL::asset('frontend/img/banner-slider-1.jpg') }}" alt="banner-slider-3">
        <div class="carousel-caption banner-slider-inner">
          <div class="banner-content">
            <h1 data-animation="animated fadeInLeft delay-05s">Tempat Terbaik Mencari <span>Mobil</span></h1>
            <p data-animation="animated fadeInLeft delay-1s">Datanglah ke Showroom kami, dan cari kendaraan terbaikmu.</p>
            <a href="{{ url('/contact') }}" class="btn button-md button-theme" data-animation="animated fadeInLeft delay-15s">Hubungi Kami</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="slider-mover-left" aria-hidden="true">
        <i class="fa fa-angle-left"></i>
      </span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="slider-mover-right" aria-hidden="true">
        <i class="fa fa-angle-right"></i>
      </span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- Banner end -->

<!-- Featured car start-->
<div class="featured-car content-area clearfix">
  <div class="container">
    <div class="main-title">
      <h1>Mobil Terbaru</h1>
    </div>
    <div class="row">
      
      @foreach($cars as $car) 
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
          <!-- Car box start-->
          <div class="thumbnail car-box clearfix">
            <div class="car-box-thumbnail">
              <img src="{{$car['PhotoFile'] }}" alt="car-1">
              <div class="is-featured">
                <span>Terbaru</span>
              </div>
              <div class="listing-for">
                <span class="for">Dijual</span>
              </div>

              <div class="listing-price">
                <span>{{ "Rp. " . number_format($car['Harga'], 2) }}</span>
              </div>

              <div class="carbox-overlap-wrapper">
                <br>
                <div class="overlap-btns-area">
                  <a class="overlap-btn property-video" data-toggle="modal" data-target="#carVideo">
                    <i class="fa fa-video-camera"></i>
                  </a>
                  <div class="car-magnify-gallery">
                    <a href="{{$car['PhotoFile'] }}" class="overlap-btn">
                      <i class="fa fa-expand"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- detail -->
            <div class="caption detail">
              <!-- Header -->
              <header class="clearfix">
                <h5 class="title">
                  <a href="car-details.html">{{ $car['NamaMobil'] }}</a>
                </h5>
                <ul class="custom-list">
                  <li>
                    <a href="#">{{ $car['Transmisi'] }}</a> /
                  </li>
                  <li>
                    <a href="#">{{ $car['Status'] }}</a> /
                  </li>
                  <li>
                    <a href="#">{{ $car['Tahun'] }}</a>
                  </li>
                </ul>
              </header>
              <!-- paragraph -->
              <p>{{ $car['Deskripsi'] }}</p>
              <!-- Facilities List -->
              <div class="facilities-area">
                <ul class="facilities-list clearfix">
                  <li>
                    <i class="flaticon-gasoline-pump"></i>
                    <span>{{ $car['BahanBakar'] }}</span>
                  </li>
                  <li>
                    <i class="flaticon-automatic-flash-symbol"></i>
                    <span>{{ $car['Transmisi'] }}</span>
                  </li>
                  <li>
                    <i class="flaticon-road-with-broken-line"></i>
                    <span>{{ $car['JumlahKM'] . " KM" }}</span>
                  </li>
                  <li>
                    <i class="flaticon-racing-flag"></i>
                    <span>{{ $car['NoPlat'] }}</span>
                  </li>
                  <li>
                    <i class="flaticon-transport"></i>
                    <span>{{ $car['Warna'] }}</span>
                  </li>
                  <li>
                    <i class="flaticon-time"></i>
                    <span>{{ $car['Tahun'] }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Car box end-->
        </div>
      @endforeach

    </div>
  </div>
</div>
<!-- Featured car end-->

<!-- We best start-->
<div class="we-best">
  <div class="container">
    <div class="main-title">
      <h2>Kenapa Harus Beli Mobil Di Showroom Kami?</h2>
      <p>Ini merupakan beberapa alasan kenapa anda harus beli mobil di sorum kami.
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-03s">
        <div class="content">
          <i class="flaticon-security"></i>
          <h4>Kualitas Terjamin</h4>
          <p>Semua mobil yang ada di showroom kami telah melalui uji kualitas dan siap untuk dijual.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-03s">
        <div class="content">
          <i class="flaticon-handshake"></i>
          <h4>Terpercaya</h4>
          <p>Showroom kami berdiri sudah sejak lama dan mempunyai banyak konsumen dari berbagai kota.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-03s">
        <div class="content">
          <i class="flaticon-dollar-sticker"></i>
          <h4>Harga Terjangkau</h4>
          <p>Harga mobil di showroom kami terjangkau dan dapat bersaing dengan showroom yang lainnya.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-03s">
        <div class="content">
          <i class="flaticon-call-center-agent"></i>
          <h4>CUSTOMER SUPPORT</h4>
          <p>Jika anda membutuhkan bantuan kami, customer support kami akan dengan senang hati membantu anda kapanpun.</p>
        </div>
      </div>
    </div>
    <a href="{{ url('/services') }}" class="btn btn-submit">Lihat Lainnya</a>
  </div>
</div>
<!-- We best end -->

<!-- Latest offers start -->
<div class="latest-offers">
  <div class="container">
    <!-- Main title -->
    <div class="main-title">
      <h1>Penjualan Terakhir</h1>
      <div class="border">
        <div class="border-inner"></div>
      </div>
      <p>Berikut ini merupakan beberapa unit mobil terakhir yang sudah terjual.</p>
    </div>

    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-12">
        <div class="row">
          <div class="col-md-12 col-pad wow fadeInLeft delay-04s">
            <div class="overview overview-box">
              <img src="{{ URL::asset('frontend/img/latest-offers/latest-offers-1.jpg') }}" alt="car-11">
              <div class="mask">
                <h2>Toyota Prius</h2>
                <p>$178,000</p>
                <a href="car-details.html" class="btn btn-submit">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-pad wow fadeInUp delay-04s">
            <div class="overview overview-box">
              <img src="{{ URL::asset('frontend/img/grid/car-4.jpg') }}" alt="car-4">
              <div class="mask">
                <h2>Volkswagen Scirocco 2016</h2>
                <p>$178,000</p>
                <a href="car-details.html" class="btn btn-submit">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-pad wow fadeInUp delay-04s">
            <div class="overview overview-box">
              <img src="{{ URL::asset('frontend/img/grid/car-1.jpg') }}" alt="car-1">
              <div class="mask">
                <h2>Lamborghini</h2>
                <p>$178,000</p>
                <a href="car-details.html" class="btn btn-submit">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-12 col-pad wow fadeInRight delay-04s">
        <div class="overview overview-box">
          <img src="{{ URL::asset('frontend/img/latest-offers/latest-offers-4.jpg') }}" class="big-img" alt="latest-offers-4">
          <div class="mask">
            <h2>Red ferrari Car 2018</h2>
            <p>$178,000</p>
            <a href="car-details.html" class="btn btn-submit">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Latest offers end -->

<!-- Blog start -->
<div class="blog content-area-4">
  <div class="container">
    <div class="main-title">
      <h1>Blog</h1>
      <p>Beberapa tulisan kami, silahkan membaca dan semoga bermanfaat.</p>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="thumbnail blog-box blog-box-2 clearfix">
          <img src="{{ URL::asset('frontend/img/blog/blog-06.jpg') }}" alt="blog-07">
          <!-- detail -->
          <div class="caption detail">
            <!-- Title -->
            <h1 class="title">
              <a href="blog-single.html">Red ferrari</a>
            </h1>
            <!-- Post Materials-->
            <div class="post-materials">
              <div class="header">
                <span><i class="fa fa-user"></i> <a href="#">John Deo</a></span>
                <span><i class="fa fa-clock-o"></i> <a>8 MAY 2016</a></span>
                <span><i class="fa fa-commenting-o"></i> <a href="#">3 Comment</a></span>
              </div>
              <!-- paragraph -->
              <p>Etiam luctus malesuada quam eu aliquet. Donec eget mollis tortor. Donec pellentesque eros a nisl euismod, ut congue orci ultricies. Fusce aliquet metus non arcu varius ullamcorper a sit amet nunc.</p>
              <!-- Btn -->
              <a href="blog-single.html" class="btn btn-outline">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="thumbnail blog-box blog-box-2 clearfix">
          <img src="{{ URL::asset('frontend/img/blog/blog-07.jpg') }}" alt="blog-07">
          <!-- detail -->
          <div class="caption detail">
            <!-- Title -->
            <h1 class="title">
              <a href="blog-single.html">Audi Q7 2017</a>
            </h1>
            <!-- Post Materials-->
            <div class="post-materials">
              <div class="header">
                <span><i class="fa fa-user"></i> <a href="#">John Deo</a></span>
                <span><i class="fa fa-clock-o"></i> <a>8 MAY 2016</a></span>
                <span><i class="fa fa-commenting-o"></i> <a href="#">3 Comment</a></span>
              </div>
              <!-- paragraph -->
              <p>Etiam luctus malesuada quam eu aliquet. Donec eget mollis tortor. Donec pellentesque eros a nisl euismod, ut congue orci ultricies. Fusce aliquet metus non arcu varius ullamcorper a sit amet nunc.</p>
              <!-- Btn -->
              <a href="blog-single.html" class="btn btn-outline">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="text-align:center;">
      <a href="{{ url('CBlog/index') }}" class="btn btn-submit">Lihat Lainnya</a>
    </div>
  </div>
</div>
<!-- Blog end -->

<!-- Testimonial 1 start -->
<div class="testimonials-1 overview-bgi">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
            <h1>Testimonial</h1>
            <div class="carousel-inner" role="listbox">
              <div class="item content active clearfix">
                <div class="item-inner">
                  <p>Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique </p>
                  <div class="avatar">
                    <img src="{{ URL::asset('frontend/img/testimonial/avatar-2.jpg') }}" alt="avatar-2">
                  </div>
                  <h4>Karen Paran</h4>
                </div>
              </div>
              <div class="item content clearfix">
                <div class="item-inner">
                  <p>Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique </p>
                  <div class="avatar">
                    <img src="{{ URL::asset('frontend/img/testimonial/avatar-3.jpg') }}" alt="avatar-3">
                  </div>
                  <h4>David Jackson</h4>
                </div>
              </div>
              <div class="item content clearfix">
                <div class="item-inner">
                  <p>Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique </p>
                  <div class="avatar">
                    <img src="{{ URL::asset('frontend/img/testimonial/avatar-4.jpg') }}" alt="avatar-4">
                  </div>
                  <h4>John Antony</h4>
                </div>
              </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carouse3-example-generic" role="button" data-slide="prev">
              <span class="t-slider-l slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
              </span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carouse3-example-generic" role="button" data-slide="next">
              <span class="t-slider-r slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
              </span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial 1 end -->

<!-- Car Viedo Modal -->
<div class="modal car-modal fade" id="carVideo" tabindex="-1" role="dialog" aria-labelledby="carModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="carModalLabel">
          Find Your Dream Car
        </h5>
        <p>
          123 Kathal St. Tampa City,
        </p>
        <span class="ratings">
          <i class="fa fa-star s1 active" data-score="1"></i>
          <i class="fa fa-star s2 active" data-score="2"></i>
          <i class="fa fa-star s3 active" data-score="3"></i>
          <i class="fa fa-star s4 active" data-score="4"></i>
          <i class="fa fa-star s5 active" data-score="5"></i>
        </span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row modal-raw">
          <div class="col-lg-5 modal-left">
            <div class="modal-left-content">
              <div class="bs-example" data-example-id="carousel-with-captions">
                <div class="carousel slide" id="properties-carousel" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item">
                      <img src=" {{ URL::asset('frontend/img/grid/car-1.jpg') }}" alt="best-properties">
                    </div>
                    <div class="item">
                      <img src=" {{ URL::asset('frontend/img/grid/car-1.jpg') }}" alt="best-properties">
                    </div>
                    <div class="item active">
                      <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen></iframe>
                    </div>
                  </div>

                  <a class="control control-prev" href="#properties-carousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="control control-next" href="#properties-carousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>

              <div class="description">
                <h3>Description</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining,</p>
              </div>
            </div>
          </div>
          <div class="col-lg-7 modal-right">
            <div class="modal-right-content bg-white">
              <strong class="price">
                $178,000
              </strong>
              <section>
                <h3>Features</h3>
                <div class="features">
                  <ul class="bullets">
                    <li>Cruise Control</li>
                    <li>Airbags</li>
                    <li>Air Conditioning</li>
                    <li>Alarm System</li>
                    <li>Audio Interface</li>
                    <li>CDR Audio</li>
                    <li>Seat Heating</li>
                    <li>ParkAssist</li>
                  </ul>
                </div>
              </section>
              <section>
                <h3>Overview</h3>
                <dl>
                  <dt>Model</dt>
                  <dd>Maxima</dd>
                  <dt>Condition</dt>
                  <dd>Brand New</dd>
                  <dt>Year</dt>
                  <dd>2018</dd>
                  <dt>Price</dt>
                  <dd>$178,000</dd>
                </dl>
              </section>
              <section>
                <h3>Last Review</h3>
                <div class="ratings" data-rating="5">
                  <span>
                    <i class="fa fa-star s1 active" data-score="1"></i>
                    <i class="fa fa-star s2 active" data-score="2"></i>
                    <i class="fa fa-star s3 active" data-score="3"></i>
                    <i class="fa fa-star s4 active" data-score="4"></i>
                    <i class="fa fa-star s5 active" data-score="5"></i>
                  </span>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
              </section>
              <a href="car-details.html" class="btn button-sm button-theme">Show Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection