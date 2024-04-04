<?php include 'header.php'; ?>

<body>
  <main>
      <section class="banner-about">
        <div class="container">
          <div class="textbox">
            <h1>About us</h1>
             <p>We offer you a variety of vegetarian and non-vegetarian traditional North Indian Dishes.</p>
             <!-- <a type="button" class="call-now" href="tel:5147456975">Call Now</a> -->
          </div>
        </div> 
      </section>

      <section class="about">
        <div class="container">
          <div class="about-flex">
            <div class="left">
              <div class="img-holder"></div>
            </div>
            <div class="right">
              <div class="textbox">
              <h2>Our Story</h2>
              <p>Good and hearty indian food designed to hit the spot. Here at Kuljit, in Saint-Laurent we are passionate about making food that has substance to it, try our delicious butter chicken. We don't skimp on anything and we ensure your food is perfectly made. Call us today (514) 745-6975!</p>
              <a type="button" class="call-now" href="tel:5147456975">Call Now</a>
            </div>
            </div>
          </div>
        </div>
      </section>
  </main>

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
        
  </script>
  
</body>

<?php include 'footer.php'; ?>
