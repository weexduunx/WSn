   <!-- header section start -->
   <div class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo">
          <a href="index.html"
            ><img
              src="{{asset('images/logowawaw.png')}}"
              style="width: 50px; height: 50px"
          /></a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}" wire:navigate>Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}" wire:navigate>About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('product') }}" wire:navigate>Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('blog') }}" wire:navigate>Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                </li>
              </ul>
          <form class="form-inline my-2 my-lg-0">
            <button
              class="btn btn-outline-success my-2 my-sm-0"
              type="submit"
            >
              GET STARTED
            </button>
          </form>
          <div class="search_icon">
            <ul>
              <li>
                <a href="#"><img src="{{asset('images/user-icon.png')}}" /></a>
              </li>
              <li>
                <a href="#"><img src="{{asset('images/bag-icon.png')}}" /></a>
              </li>
              <li>
                <a href="#"><img src="{{asset('images/search-icon.png')}}" /></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- header section end -->
        <!-- Main Slider start -->
    <div id="main_slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="{{asset('images/ANAIS_Backkground.JPG')}}"
            alt="First slide"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to WAWAW SÉNÉGAL</h5>
            <p>Your gateway to Senegalese and African cinema</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="{{ asset('images/ANAIS_Backkground.JPG') }}"
            alt="Second slide"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Discover, Stream, Enjoy</h5>
            <p>Explore a rich collection of African films and series</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="images/ANAIS_Backkground.JPG"
            alt="Third slide"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Join the WAWAW Community</h5>
            <p>Connect with fellow cinephiles and creators</p>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Main Slider end -->
  </div>
  <!-- header section end -->