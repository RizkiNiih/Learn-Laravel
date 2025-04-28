<!DOCTYPE html>
<html lang="en">

  <head>

    <base href="/public">

    @include('home.css')
    </head>

<body>

    @include('home.header')

    <div class="currently-market">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h2><em>Items</em> Currently In The Market.</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="filters">
                        <ul>
                            <li data-filter="*" class="active">All Books</li>
                            <li data-filter=".msc">Popular</li>
                            <li data-filter=".dig">Latest</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include('home.header')
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  @include('home.main_banner')
  <!-- ***** Main Banner Area End ***** -->
  
  @include('home.category')

  

  @include('home.book')

  @include('home.footer')

  </body>
</html>