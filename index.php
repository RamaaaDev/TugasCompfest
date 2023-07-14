<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cinemas Websites</title> 
<!-- ===================== Linked link -->
<?php require('inc/links.php') ?>

<!-- ================= Linked box-icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!-- ================== linked css -->
  <link rel="stylesheet" href="admin/css/common.css">
  
  <style>
    .swiper-container {
      width: 100%;
      height: 100%;
    }

    .ads-wrapper {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .ads-wrapper img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .movie {
      width: 100%;
      padding-top: 50px;
    }

    .movie-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      background-color: white;
    }

    .movie-slide h3 {
      display: flex;
      justify-content: center;
    }

    .movie-slide img {
      width: 100%;
      display: block;
      border-radius: 3rem;
    } 

    .movie-slide a {
      text-decoration: none;
    }

  </style>
</head>
<body class="bg-light">
  <?php require('inc/header.php') ?>
  <!-- Swiper Carousel-->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide ads-wrapper">
          <img src="image/zee.jpeg" alt="" class="w-100 d-block">
        </div>
        <div class="swiper-slide ads-wrapper">
          <img src="image/shani.jpeg" alt="" class="w-100 d-block">
        </div>
        <div class="swiper-slide ads-wrapper">
          <img src="image/marsha.jpeg" alt="" class="w-100 d-block">
        </div>
        <div class="swiper-slide ads-wrapper">
          <img src="image/feni.jpeg" alt="" class="w-100 d-block">
        </div>
      </div>
    </div>
  </div>


<!-- Swiper movie -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Movies</h2>
  <div class="swiper mySwiper movie">
    <div class="swiper-wrapper movie-wrapper">
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="image/Procedure.jpg" />
          <h3>Asadese 1</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="movie.php" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
          <h3>Asadese 1</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
          <h3>Asadese 3</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
          <h3>Asadese 4</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
          <h3>Asadese 5</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
          <h3>Asadese 6</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
          <h3>Asadese 7</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
          <h3>Asadese 8</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="image/1.jpg" />
          <h3>Asadese 9</h3>
        </a>
      </div>
        </a>
      </div>

<!-- =============== videos trailer -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Movies trailer</h2>
  <div class="swiper mySwiper movie">
    <div class="swiper-wrapper movie-wrapper">
  
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="image/Procedure.jpg" />
          <h3>Asadese 1</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="movie.php" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
          <h3>Asadese 1</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
          <h3>Asadese 3</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
          <h3>Asadese 4</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
          <h3>Asadese 5</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
          <h3>Asadese 6</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
          <h3>Asadese 7</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
          <h3>Asadese 8</h3>
        </a>
      </div>
      <div class="swiper-slide movie-slide">
        <a href="https://www.tix.id/" target="_blank"> 
          <img src="image/1.jpg" />
          <h3>Asadese 9</h3>
        </a>
      </div>
        </a>
      </div>
  <!-- ================== linked js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

  <?php require('inc/footer.php') ?>

  <!-- ================== linked js swiper js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      centeredSlides: true,
      loop : true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
    });


    var swiper = new Swiper(".movie", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      loop : true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });

  </script>
</body>
</html>