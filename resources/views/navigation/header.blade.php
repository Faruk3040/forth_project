 <!-- ======= Top Body ======= -->
 <div class="row">
    <div id="slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
        <li data-target="#slider" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" data-aos="zoom-out">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/img/slider/1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img data-aos="zoom-out" class="d-block w-100" src="assets/img/slider/2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img data-aos="zoom-out" class="d-block w-100" src="assets/img/slider/3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img data-aos="zoom-out" class="d-block w-100" src="assets/img/slider/4.jpg" alt="Fourth Slide">
        </div>
      </div>

    </div>
  </div>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top ">
    <p class="py-2 text-center">MADE TO ORDER - QUALITY LEATHER GOODS HANDCRAFTED IN BANGLADESH</p>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="row header">
      <div class="col-5">
        <div class="container ">

          <nav class="nav-menu  d-none d-lg-block">
            <ul class="underline">
              <li class="active "><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/products') }}">Products</a></li>
              <li><a href="#">MEET THE MAKER</a></li>
              <li><a href="#">BLOG</a></li>
            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </div>
      <div class="col-3">
        <img class="img-fluid" src="assets/img/logo/Ek_Logo.png">
      </div>
      <div class="col-4 ">
        <div class="right_nav">
          <ul>
            <li>
              <div class="dropdown">
                <button class="dropbtn">Tk
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#">TK</a>
                  <a href="#">USD</a>
                </div>
              </div>
            </li>
            <li>Search</li>
            <li>Cart</li>
          </ul>
        </div>

      </div>
    </div>

  </header>
