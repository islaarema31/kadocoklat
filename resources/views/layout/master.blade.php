<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cake&#39;s Dream is Beautiful Template " name="description">
    <meta content="" name="author">
    <link href="assets/images/favicon-32x32.png" rel="shortcut icon">
    <title>Kado Coklat - @yield('title')</title>
    <link href="assets/stylesheets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/stylesheets/css/font-family.css" rel="stylesheet">
    <link href="assets/stylesheets/css/responsive.css" rel="stylesheet">
    <link href="assets/stylesheets/css/slick.css" rel="stylesheet">
    <link href="assets/stylesheets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/stylesheets/css/style.css" rel="stylesheet">
    <link href="assets/stylesheets/css/animate.css" rel="stylesheet">
    <link href="assets/javascripts/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/css/global.css" rel="stylesheet">
    <link href="assets/stylesheets/css/effect2.css" rel="stylesheet" type="text/css">
    <script src="assets/javascripts/modernizr.custom.js"></script>
  </head>
  <body class="demo-1">
    <div class="ip-container" id="ip-container">
      <!--initial header-->
      <header class="ip-header">
        <div class="ip-loader">
          <svg class="ip-inner" height="60px" viewbox="0 0 80 80" width="60px"><path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path><path class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" id="ip-loader-circle"></path></svg>
        </div>
      </header>
      <!--main content-->
      <div class="ip-main">
        <div class="top-highlight hide">
          &nbsp;
        </div>
        <!-- Start Header Cake -->
        <section class="header-wrapper">
          <header class="wrap-header @yield('header-color')">
            <div class="top-absolute">
              <div class="top-header">
                <div class="container">
                  <div class="navbar-header visible-xs">
                    <button class="navbar-toggle toggle-cake show-menu"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand navbar-cake" href="#"><img alt="Logo-Cupcakes" src="assets/images/logo-100.png"></a>
                  </div>
                  <nav>
                    <ul class="header-nav hidden-xs">
                      <li>
                        <a href="{{ url('/') }}">Beranda</a>
                      </li>
                      <li>
                        <a href="{{ url('/about') }}">Toko</a>
                      </li>
                      <li class="pad-top-0i">
                        <img alt="Logo-Cupcakes" src="assets/images/logo-150.png">
                      </li>
                      <li>
                        <a href="{{ url('blog') }}">Blog</a>
                      </li>
                      <li>
                        <a href="{{ url('/contact') }}">Kontak</a>
                      </li>
                    </ul>
                  </nav>
                  <!-- Start Mega Menu Cake -->
                  <div class="mega-menu hide">
                    <div class="tittle-mega">
                      <h4>
                        Menu
                      </h4>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-4">
                          <ul class="list-mega">
                            <li class="bottom-red-border">
                              <a href="{{ url('/') }}">Beranda</a>
                            </li>
                            <li class="bottom-red-border">
                              <a href="{{ url('/about') }}">Toko</a>
                            </li>
                            <li class="bottom-red-border">
                              <a href="{{ url('/blog') }}">Blog</a>
                            </li>
                            <li class="bottom-red-border">
                              <a href="{{ url('/contact') }}">Kontak</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="div text-center">
                        <button class="btn btn-pink-cake mar-top-20 close-menu">Close Menu</button>
                      </div>
                    </div>
                  </div>
                  <!-- End Mega Menu Cake -->
                </div>
              </div>
              <div class="triangle">
                &nbsp;
              </div>
            </div>
            @yield('header')
          </header>
          @yield('blog')
        </section>
        <!-- End Header Cake --><!-- Start About Cake -->
            @yield('content')
        <!-- End Option Cake --><!-- Start Footer Cake -->
        <footer>
          <div class="triangle-no-animate">
            &nbsp;
          </div>
          <div class="container">
            <div class="abs-logo-footer">
              <img alt="Logo-Cake" src="assets/images/logo.png">
            </div>
            <div class="top-footer">
              <div class="row">
                <div class="col-sm-12 text-right">
                  <ul class="sosmed-cake">
                    <li>
                      <div class="center-sosmed">
                        <p class="icon icon-facebook">
                          &nbsp;
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="center-sosmed">
                        <p class="icon icon-twitter">
                          &nbsp;
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="center-sosmed">
                        <p class="icon icon-behance">
                          &nbsp;
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="center-sosmed">
                        <p class="icon icon-dribbble">
                          &nbsp;
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="center-sosmed">
                        <p class="icon icon-pinterest">
                          &nbsp;
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="line-top-white mar-btm-20 mar-top-20">
              &nbsp;
            </div>
            <div class="content-about-footer">
              <!-- Column -->
              <div class="col-sm-4">
                <h4>
                  Kado Coklat
                </h4>
                <p class="mar-btm-20">
                  Cokelat tidak mengenal batas, berbicara dalam semua bahasa, ada dalam segala rasa, mewakili dalam segala perasaan. Kamu tidak bisa membuat semua orang senang, kamu bukan cokelat.
                </p>
                <p class="mar-btm-20">
                  Saptorenggo, Pakis <br>Malang, Indonesia<br>
                </p>
                <p class="mar-btm-20">
                  Telp : <strong>085-755-39-79-81</strong>
                </p>
              </div>
              <!-- Column -->
              <div class="col-sm-4 hidden-xs">
                <ul class="list-picture-footer">
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/product/324/1.png"><img alt="Img-sm-picture" class="img-100" src="assets/images/product/324/1.png"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/product/324/2.png"><img alt="Img-sm-picture" class="img-100" src="assets/images/product/324/2.png"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/product/324/3.png"><img alt="Img-sm-picture" class="img-100" src="assets/images/product/324/3.png"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/product/324/4.png"><img alt="Img-sm-picture" class="img-100" src="assets/images/product/324/4.png"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/product/324/5.png"><img alt="Img-sm-picture" class="img-100" src="assets/images/product/324/5.png"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/product/324/6.png"><img alt="Img-sm-picture" class="img-100" src="assets/images/product/324/6.png"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/product/324/7.png"><img alt="Img-sm-picture" class="img-100" src="assets/images/product/324/7.png"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/product/324/8.png"><img alt="Img-sm-picture" class="img-100" src="assets/images/product/324/8.png"></a>
                  </li>
                </ul>
                <div class="clear"></div>
                <p>
                  Terima kasih sudah mampir di toko kami. Kami akan dengan senang hati melayani.
                </p>
              </div>
              <!-- Column -->
              <div class="col-sm-4">
                <ul class="list-link-home">
                  <li>
                    <a href="{{ url('/') }}">Beranda</a>
                  </li>
                  <li>
                    <a href="{{ url('/about') }}">Tentang Kami</a>
                  </li>
                  <li>
                    <a href="{{ url('/blog') }}">Blog</a>
                  </li>
                  <li>
                    <a href="{{ url('/contact') }}">Kontak</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="logo-dn">
              <img alt="Delip Nugraha" src="assets/images/dn.png">
            </div>
          </div>
        </footer>
        <!-- End Option Cake -->
      </div>
    </div>
    <script src="assets/javascripts/jquery.js"></script>
    <script src="assets/javascripts/fancybox/jquery.fancybox.pack.js"></script>
    <script src="assets/javascripts/slick.js"></script>
    <script src="assets/javascripts/wow/wow.js"></script>
    <script src="assets/javascripts/custom.js"></script>
    <script src="assets/javascripts/bootstrap.js"></script>
    <script src="assets/javascripts/classie.js"></script>
    <script src="assets/javascripts/pathLoader.js"></script>
    <script src="assets/javascripts/main.js"></script>
    <script type="text/javascript">
      new WOW().init();
    </script>
  </body>
</html>
