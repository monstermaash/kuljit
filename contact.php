<?php include 'header.php'; ?>

<body>
  <main>

    <section class="contact-info">
      <div class="container">
            <div class="textbox">
              <h1>contact us</h1>
              <p>514-745-6975</p>
              <p>
                1904 Boulevard Thimens, Saint-Laurent 
                H4R 1J9  Montréal,Québec
              </p>
              <a type="button" class="call-now" href="tel:5147456975">Call Now</a>
            </div>
      </div>
    </section>

    <section class="contact">
      <div class="container">
        <div class="contact-flex">
          <div class="left">
            <div class="map-container">
              <div id="map">Loading map...</div>
              <button onclick="showDirections()">Get Directions</button>
            </div>
          </div>
          <div class="right">
            <section class="opening-hours">
            <div class="container">
              <h2>Opening Hours</h2>
              <table class="table">
                <tbody>
                  <tr>
                    <th>Saturday</th>
                    <td>11 a.m. - 10:30 p.m.</td>
                  </tr>
                  <tr>
                    <th>Sunday</th>
                    <td>11 a.m. - 10:30 p.m.</td>
                  </tr>
                  <tr>
                    <th>Monday</th>
                    <td>11 a.m. - 10:30 p.m.</td>
                  </tr>
                  <tr>
                    <th>Tuesday</th>
                    <td>Closed</td>
                  </tr>
                  <tr>
                    <th>Wednesday</th>
                    <td>11 a.m. - 10:30 p.m.</td>
                  </tr>
                  <tr>
                    <th>Thursday</th>
                    <td>11 a.m. - 10:30 p.m.</td>
                  </tr>
                  <tr>
                    <th>Friday</th>
                    <td>11 a.m. - 10:30 p.m.</td>
                  </tr>
                </tbody>
              </table>
            </div>
            </section>
          </div>
        </div>
      </div>
    </section>

    
  </main>
  <!--load js -->
  <script src="./map.js"></script>

  <!-- google map api -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5p5PL91yRJMtrInku_7Z-ij5jV9MF40w&callback=initMap" async></script>
  
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



