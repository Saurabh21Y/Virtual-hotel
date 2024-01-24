<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTAL HAVEN - HOME</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    
    <style>
          .custom-bg{
              background-color: #2ec1ac;
            }
            
          .custom-bg:hover{
              background-color: #279e8c;
            }
          .availability-form{
          margin-top: -50px;
          z-index: 2;
          position: relative;

        }
        @media screen and (max-width: 575px) {
          .availability-form{
          margin-top: 0px;
         }
      }

    </style>


</head>
<body class="bg-light">
  
 <?php require('inc/header.php');?>


<!-- edit image here -->
<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="1.jpg " class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="2.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="3.jpg"class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="4.jpg" class="w-100 d-block"/>
       </div>
    </div>
  </div>
</div>
<!-- ------------------------------- -->

<!-- availability form -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-in</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Adult</label>
          <select class="form-select shadow-none">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Children</label>
          <select class="form-select shadow-none">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2 ">
            <button class="submit btn btn-sm text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<!-- ------------------------------- -->

  <!-- our rooms -->
  <h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <!-- cards 1 -->
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="5.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Economy</h5>
            <h6 class="mb-4">₹ 2000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark text-wrap">
                2 Rooms.
              </span>
              <span class="badge bg-light text-dark text-wrap">
                Attach Bathroom.
              </span> 
              <span class="badge bg-light text-dark text-wrap">
                Balcony(pool view)
              </span>  
              <span class="badge bg-light text-dark text-wrap">
                A class Furniture
              </span> 
            </div>
            <div class="facility mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-wrap">
                Massage Chair(pre-notice)
              </span> 
              <span class="badge bg-light text-dark text-wrap">
                Ac
              </span>  
              <span class="badge bg-light text-dark text-wrap">
                Temp control bathroom
              </span> 
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </span>
              
            </div>
            <div class="d-flex justify-content-between mb-2">
            <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
            </div>
          </div>
        </div>
      </div>
        <!-- card 2 -->
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="room4.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Business Class</h5>
            <h6 class="mb-4">₹ 2700 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark text-wrap">
                2 Rooms.
              </span>
              <span class="badge bg-light text-dark text-wrap">
                Attach Bathroom.
              </span> 
              <span class="badge bg-light text-dark text-wrap">
                Seperate LAN Connection
              </span>  
              <span class="badge bg-light text-dark text-wrap">
                Office Lobby
              </span> 
            </div>
            <div class="facility mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-wrap">
                Gym Access
              </span> 
              <span class="badge bg-light text-dark text-wrap">
                Ac
              </span>  
              <span class="badge bg-light text-dark text-wrap">
                Temp control bathroom
              </span> 
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
              </span>
              
            </div>
            <div class="d-flex justify-content-between mb-2">
            <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
            </div>
          </div>
        </div>
      </div>
        <!-- card  3 -->
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="suits.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Luxury Suite</h5>
            <h6 class="mb-4">₹ 3500 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark text-wrap">
                Master Bedroom
              </span>
              <span class="badge bg-light text-dark text-wrap">
                Attach Bathroom.
              </span> 
              <span class="badge bg-light text-dark text-wrap">
                Balcony(Top View)
              </span>  
              <span class="badge bg-light text-dark text-wrap">
                A class Furniture
              </span> 
            </div>
            <div class="facility mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-light text-dark text-wrap">
                Wifi + Smart Tv
              </span>
              <span class="badge bg-light text-dark text-wrap">
                Massage Chair(pre-notice)
              </span> 
              <span class="badge bg-light text-dark text-wrap">
                AC control
              </span>  
              <span class="badge bg-light text-dark text-wrap">
                Luxury Master Restroom
              </span> 
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </span>
              
            </div>
            <div class="d-flex justify-content-between mb-2">
            <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More>>></a>
      </div>
    </div>
  </div>

<!-- ------------------------------- -->

      <!-- facilities -->
  <h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly">
      <!-- exactly -- edits -->
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="wifi.png" width="80px">
        <h5 class="mt-3">WiFi</h5>
      </div>

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="gym.png" width="80px">
        <h5 class="mt-3">Gym</h5>
      </div>

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="pool.png" width="80px">
        <h5 class="mt-3">Swimimg Pool</h5>
      </div>

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="event.jpg" width="80px">
        <h5 class="mt-3">Event Halls</h5>
      </div>

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="cafe.png" width="80px">
        <h5 class="mt-3">Cafeteria</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More>>></a>
      </div>
    </div>
  </div>
<!-- -------------------------------- -->

      <!-- testimonials -->
      <h2 class="mt-5 pt-4 text-center fw-bold h-font">TESTIMONIALS</h2>
      <!-- effects -->
      <div class="container mt-5">
        <div class="swiper Swiper-testimonials">
          <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-wight mb-3">
              
             <div class="profile d-flex align-items-center p-4">
                <img src="tom.jpg" width="50px">
                <h6 class="m-0 ms-2">Tom</h6>
             </div>
             <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, 
              laboriosam! Vitae, officia id eius non magnam laudantium amet omnis minus expedita 
              facilis quo architecto repellendus voluptatibus odio dolorem fugit harum!
             </p>
             <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
             </div>
            </div>

            <div class="swiper-slide bg-wight mb-3">
              
              <div class="profile d-flex align-items-center p-4">
                 <img src="ash.png" width="50px">
                 <h6 class="m-0 ms-2">Ash Ketchum</h6>
              </div>
              <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, 
               laboriosam! Vitae, officia id eius non magnam laudantium amet omnis minus expedita 
               facilis quo architecto repellendus voluptatibus odio dolorem fugit harum!
              </p>
              <div class="rating">
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i>
              </div>
             </div>

             <div class="swiper-slide bg-wight mb-3">
              
             <div class="profile d-flex align-items-center p-4">
                <img src="motu.jpg" width="50px">
                <h6 class="m-0 ms-2">Motu</h6>
             </div>
             <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, 
              laboriosam! Vitae, officia id eius non magnam laudantium amet omnis minus expedita 
              facilis quo architecto repellendus voluptatibus odio dolorem fugit harum!
             </p>
             <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
             </div>
            </div>

             <div class="swiper-slide bg-wight mb-3">
              
             <div class="profile d-flex align-items-center p-4">
                <img src="black.jpg" width="50px">
                <h6 class="m-0 ms-2">Magician</h6>
             </div>
             <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, 
              laboriosam! Vitae, officia id eius non magnam laudantium amet omnis minus expedita 
              facilis quo architecto repellendus voluptatibus odio dolorem fugit harum!
             </p>
             <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
             </div>
            </div>


         </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Know More>>></a>
      </div>
<!-- ---------------------------------- -->

      <!-- Reach us -->
      <h2 class="mt-5 pt-4 text-center fw-bold h-font">REACH US</h2>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239487.16522882093!2d85.65563887753197!3d20.300807014747665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909d2d5170aa5%3A0xfc580e2b68b33fa8!2sBhubaneswar%2C%20Odisha!5e0!3m2!1sen!2sin!4v1695330725604!5m2!1sen!2sin"  loading="lazy"></iframe>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
              <h5>Call Us</h5>
              <a href="tel: +916202589259" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-outbound-fill"></i> +916202589259
              </a>
              <br>
              <a href="tel: +916202589259" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-outbound-fill"></i> +916202589259
              </a>
            </div>
             <!------------------------------- follow us --------------------------------------->
            <div class="bg-white p-4 rounded mb-4">
              <h5>Follow us</h5>
              <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i> Instagram
                </span>
              </a>
              <br>
              <a href="#" class="d-inline-block mb-3">
             <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook"></i> Facebook
             </span>
              </a>
              <br>
              <a href="#" class="d-inline-block mb-3">
             <span class="badge bg-light text-dark fs-6 p-2">
             <i class="bi bi-pinterest"></i> Pinterest
             </span>
              </a>
              <br>
              </a>
            </div>
          </div>
        </div>
      </div>
      
<!-- ------------------------------------------------------------------------- -->
<?php require('inc/footer.php');?>



<!-- script -->

    
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- swiper js script -->
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      }
    });

    
    var swiper = new Swiper(".Swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        
        320: {
          slidesPerView: "1",
        },
        640: {
          slidesPerView: "1",
        },
        768: {
          slidesPerView: "1",
        },
        1024: {
          slidesPerView:"2",
        },
        320: {
          slidesPerView: "3",
        },
      }
    });

    </script>
</body>
</html>