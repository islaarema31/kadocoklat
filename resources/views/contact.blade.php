@extends('layout.master')

@section('title', 'Kontak')
@section('header-color', 'purple-top-dot')

@section('header')
<div class="tittle-sub-top pad-top-150">
  <div class="container">
    <h1>
      Kontak
    </h1>
  </div>
</div>
@endsection

@section('content')
<section class="terms-of-use">
  <div class="container">
    <div class="content-terms">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-header">
            <h1 class="text-center">
              Kami sangat senang berdiskusi dengan anda
            </h1>
            <div class="tittle-cake text-center">
              <div class="container">
                <img alt="Cake-White" src="assets/images/content/contact.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Option Cake --><!-- Start Pricing Cake -->
<section class="pricing-cake">
  <div class="triangle-no-animate">
    &nbsp;
  </div>
  <!-- Content Pricing Cake -->
  <div class="content-pricing-cake">
    <div class="tittle-cake text-center">
      <div class="container">
        <img alt="Cake-White" src="assets/images/cake-white.png">
        <h2>
          Hubungi Kami
        </h2>
      </div>
    </div>
    <div class="container mar-top-20">
     
      <!-- Column -->
      <div class="col-sm-3 mar-btm-20">
        <div class="img-wrap-price">
          <img alt="Price-Pink" class="img-full-sm" src="assets/images/content/wa.png">
        </div>
        <div class="content-price content-price-tag text-center">
          <h4 class="pink-color">
            Whatsapp
          </h4>
          <div class="price-pink">
            <div class="triangle-no-animate">
              &nbsp;
            </div>
            <div class="text-price">
              085-755-39-79-81
            </div>
            <div class="price-btn price-pink-btn">
              <a target="_blank" href="https://api.whatsapp.com/send?phone=6285755397981&text=Halo%20Admin%20Saya%20Mau%20Order%20Coklat" style="color: #337ab7;">
                  Visit
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="col-sm-3 mar-btm-20">
        <div class="img-wrap-price">
          <img alt="Price-Green" class="img-full-sm" src="assets/images/content/ig.png">
        </div>
        <div class="content-price content-price-tag text-center">
          <h4 class="green-color">
            Instagram
          </h4>
          <div class="price-green">
            <div class="triangle-no-animate">
              &nbsp;
            </div>
            <div class="text-price">
              @kadocoklat.co
            </div>
            <div class="price-btn price-green-btn">
              <a target="_blank" href="instagram.com/kadocoklat.co" style="color: #337ab7;">
                Visit
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="col-sm-3 mar-btm-20">
        <div class="img-wrap-price">
          <img alt="Price-Blue" class="img-full-sm" src="assets/images/content/fb.png">
        </div>
        <div class="content-price content-price-tag text-center">
          <h4 class="blue-color">
            Facebook
          </h4>
          <div class="price-blue">
            <div class="triangle-no-animate">
              &nbsp;
            </div>
            <div class="text-price">
              kadocoklat.com
            </div>
            <div class="price-btn price-blue-btn">
              <a target="_blank" href="" style="color: #337ab7;">
                Visit
              </a>
            </div>
          </div>
        </div>
      </div>
       <!-- Column -->
      <div class="col-sm-3 mar-btm-20">
        <div class="img-wrap-price">
          <img alt="Price-Purple" class="img-full-sm" src="assets/images/content/web.png">
        </div>
        <div class="content-price content-price-tag text-center">
          <h4 class="dpurple-color">
            Website
          </h4>
          <div class="price-purple">
            <div class="triangle-no-animate">
              &nbsp;
            </div>
            <div class="text-price">
              kadocoklat.com
            </div>
            <div class="price-btn price-purple-btn">
              <a target="_blank" href="{{ url('/') }}" style="color: #337ab7;">
                Visit
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="triangle-top-no-animate">
    &nbsp;
  </div>
</section>
<!-- End Pricing Cake --><!-- Start Team Cake -->
<div class="pad-top-150"></div>



@endsection