@extends('layout.master')

@section('title', 'Beranda')

@section('header')
<div class="tittle-cake text-center pad-top-150">
  <div class="container">
    <h2>
      Coklat
    </h2>
    <h1>
      PREMIUM
    </h1>
  </div>
</div>
<div class="slider-cake">
  <div class="container pad-md-100">
    <div class="center">
      <div class="img-relative">
        <img alt="Cake-one" src="assets/images/product/324/1.png">
      </div>
      <div>
        <img alt="Cake-Two" src="assets/images/product/324/2.png">
      </div>
      <div>
        <img alt="Cake-Three" src="assets/images/product/324/3.png">
      </div>
      <div>
        <img alt="Cake-Four" src="assets/images/product/324/4.png">
      </div>
      <div>
        <img alt="Cake-Five" src="assets/images/product/324/5.png">
      </div>
      <div>
        <img alt="Cake-Five" src="assets/images/product/324/6.png">
      </div>
    </div>
  </div>
</div>
<div class="green-table mar-to-top">
  &nbsp;
</div>
<div class="green-arrow">
  &nbsp;
</div>
@endsection

@section('content')
<section class="about-cake">
  <div class="container">
    <!-- About Content -->
    <h2 class="hide">
      &nbsp;
    </h2>
    <div class="about-content">
      <img alt="Cake-White" src="assets/images/cake-white.png">
      <p>
        Kami menjual coklat praline dengan bahan berkualitas dan kemasan yang eksklusif. Sangat cocok sebagai hadiah orang tersayang.
      </p>
    </div>
  </div>
</section>
<!-- End About Cake --><!-- Start Product Cake -->
<section class="abouts-cake">
  <div class="tittle-cake text-center">
    <div class="container">
      <img alt="Cake-Pink" src="assets/images/cake-pink.png">
      <h2 class="pink-color">
        Produk
      </h2>
    </div>
  </div>
  <?php $count =0; ?>
  @foreach($products as $product)
  <?php $count++; ?>
  <div class="container mar-top-20">
    <!-- Column -->
    @foreach($product as $value)
    <div class="col-sm-4">
      <div class="img-round-about">
      <a class="fancybox" data-fancybox-group="product" href="assets/images/product/400/{{ $value->photo }}"><img alt="Img-sm-picture" class="img-100" src="assets/images/product/400/{{ $value->photo }}"></a>
        @if($value->best_seller)
        <div class="price-cake hidden-xs">
          <p>
            Best Seller
          </p>
        </div>
        @endif
      </div>
      <h4>
        {{ $value->name }}
      </h4>
      <div class="line-pink-about">
        &nbsp;
      </div>
        {{ $value->description }}
       <h5 class="text-center green-color">
       <span style="text-decoration:line-through">Rp. {{ number_format($value->price_before) }}</span>
       </h5>
       <h5 class="text-center pink-color">
          Rp. {{ number_format($value->price) }}
       </h5>
      <p class="text-center">
        <a class="text-center" target="_blank" href="https://api.whatsapp.com/send?phone=6285755397981&text=Halo%20Admin%20Saya%20Mau%20Order%20Coklat%20 {{ $value->name.' ('.$value->code.')' }}">
          <span class="btn btn-blue-cake btn-1">Beli Produk Ini</span>
        </a>
      </p>
    </div>
    @endforeach
  </div>
  @if($count == 3)
  <section class="about-cake">
    <div class="container">
      <div class="about-content">
        <p>
          Bisa request tulisan , warna dan karakter. Cocok untuk hadiah ulang tahun, anniversary, valentine, wisuda, pernikahan, hantaran, kado perpisahan, idul fitri, natal dan acara apapun.
        </p>
      </div>
    </div>
  </section>
  @endif
  @if($count == 6)
  <section class="about-cake">
    <div class="container">
      <div class="about-content">
        <p>
          Pengiriman menggunakan safety packing berupa sterofoam, sangat aman dan ada garansi apabila barang leleh/rusak dengan ketentuan berlaku.
        </p>
      </div>
    </div>
  </section>
  @endif
  @endforeach
  <div class="data-table-toolbar text-center">
      <!-- !! $paginate->render() !! -->
  </div>
</section>

@endsection