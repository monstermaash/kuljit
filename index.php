<?php include 'header.php'; ?>

<body>
  <main>
    <section class="hero">
      <div class="container">
        <div class="textbox">
          <h1>Spice Up Your Day, The Kuljit's Way</h1>
          <p>Where every meal tells a story of authentic Indian heritage</p>
          <a type="button" class="order-now" href="https://www.doordash.com/store/restaurant-kuljit-india-montr%C3%A9al-630162/">Order Now</a>
        </div>
      </div>
    </section>

    <section class="carousel">
      <div class="container">
        <h2>our most popular</h2>

        <div class="slider-holder">
          <div class="item">
            <div class="cards card1">
              <div class="img-holder">
                <div class="textbox">
                  <p>special</p>
                  <h3>butter chicken</h3>
                  <h4>$13.50</h4>
                </div> <!-- end of textbox -->
              </div> <!-- end of img-holder -->
            </div> <!-- end of card -->
          </div> <!-- end of item -->

          <div class="item">
            <div class="cards card2">
              <div class="img-holder">
                <div class="textbox">
                  <p>special</p>
                  <h3>channa samosa</h3>
                  <h4>$6.00</h4>
                </div> <!-- end of textbox -->
              </div> <!-- end of img-holder -->
            </div> <!-- end of card -->
          </div> <!-- end of item -->

          <div class="item">
            <div class="cards card3">
              <div class="img-holder">
                <div class="textbox">
                  <p>special</p>
                  <h3>lamb biryani</h3>
                  <h4>$14.50</h4>
                </div> <!-- end of textbox -->
              </div> <!-- end of img-holder -->
            </div> <!-- end of card -->
          </div> <!-- end of item -->

          <div class="item">
            <div class="cards card4">
              <div class="img-holder">
                <div class="textbox">
                  <p>special</p>
                  <h3>tikki</h3>
                  <h4>$6.00</h4>
                </div> <!-- end of textbox -->
              </div> <!-- end of img-holder -->
            </div> <!-- end of card -->
          </div> <!-- end of item -->

          <div class="item">
            <div class="cards card5">
              <div class="img-holder">
                <div class="textbox">
                  <p>special</p>
                  <h3>chaat papri</h3>
                  <h4>$6.00</h4>
                </div> <!-- end of textbox -->
              </div> <!-- end of img-holder -->
            </div> <!-- end of card -->
          </div> <!-- end of item -->

          <div class="item">
            <div class="cards card6">
              <div class="img-holder">
                <div class="textbox">
                  <p>special</p>
                  <h3>fish pakora</h3>
                  <h4>$7.00</h4>
                </div> <!-- end of textbox -->
              </div> <!-- end of img-holder -->
            </div> <!-- end of card -->
          </div> <!-- end of item -->

        </div> <!-- end of slider-holder -->
      </div> <!-- end of container -->
    </section>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- cdn slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-7fEXxgykz2R6uU8KOTLjz4l5xpe3zR9ag5y6XaC5sh7v6DqjZpF5c5Rj3kFsv5KI5" crossorigin="anonymous"></script>


    <script>
      //NAV MENU RESPONSIVE
      $('#burg-icon').on('click', function(){
        $('.menu-holder').slideToggle('slow');
      });
      
      //SLICK SLIDER
      $('.slider-holder').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        responsive: [
        {
          breakpoint: 1440,
          settings: {
            slidesToShow: 3, 
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2, 
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768, 
          settings: {
            slidesToShow: 1, 
            slidesToScroll: 1,
          }
        }
      ]
    });
          
    </script>
  </main>
</body>

<?php include 'footer.php'; ?>
