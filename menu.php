<?php include 'header.php'; ?>

<body>
  <main>
    <section class="menu carousel">
      <div class="container">
        <div class="textbox">
          <h1>menu</h1>
          <p>Our menu is a love letter to North Indian cuisine, filled with vibrant dishes like our legendary Butter Chicken, richly spiced curries, and delectable naan bread.</p>
        </div>
          
          <section class="gallery">
            <div class="container">
              <div class="grid-parent">
                <div class="item">
                  <a data-fancybox="gal" data-src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-1_orig.jpg">
                    <img src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-1_orig.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a data-fancybox="gal" data-src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-2_orig.jpg">
                    <img src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-2_orig.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a data-fancybox="gal" data-src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-3_orig.jpg">
                    <img src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-3_orig.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a data-fancybox="gal" data-src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-4_orig.jpg">
                    <img src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-4_orig.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a data-fancybox="gal" data-src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-5_orig.jpg">
                    <img src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-5_orig.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a data-fancybox="gal" data-src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-6_orig.jpg">
                    <img src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-6_orig.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a data-fancybox="gal" data-src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-7_orig.jpg">
                    <img src="https://kuljitindia.com/uploads/1/0/9/9/109985845/table-menu-7_orig.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
          </section>

      </div>
    </section>
  </main>

  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- cdn slick -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

  <!-- fancybox -->
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  

  <script>
    //NAV MENU RESPONSIVE
    $('#burg-icon').on('click', function(){
        $('.menu-holder').slideToggle('slow');
      });

      //initialize fancybox
		Fancybox.bind();
      
  </script>

</body>

<?php include 'footer.php'; ?>

