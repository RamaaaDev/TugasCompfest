<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Hello, world!</title>
    <style>
/* ============================= navbar-style */
        .btn-navbar {
            border-radius: 3rem;
        }
/* =================== section-home style */
        #hero {
            min-height: 80vh;
            padding: 10rem 9% 2rem;
            border: 1px solid salmon;
            background-image: url(image/1.jpg);
            background-position: center;
            background-size: cover; 
            background-repeat: no-repeat;
        }

        .img-hero {
            border-radius: 2rem;
        }
        
        .btn{
  border-radius: 2rem;
} 

        .btn-hero {
            display: flex;
            align-items: center;
        }
    </style>
  </head>
  <body>
<?php require('inc/header.php') ?>

<!-- ====================== Home Section  -->
    <section id="hero">
        <div class="container h-100">
            <div class="bg-hero">
                <img src="image/Syarat.jpg" class="img-hero">
            </div>
            <div class="row h-100">
                <div class="column-md-6">
                    <div class="text-hero">\
                        <div class="judul-film fw-bold">
                            <h1>Golden Rules</h1>
                        </div>
                        <div class="sinopsis">
                            <h3>halo halo bandung</h3>
                        </div>
                        <div class="btn-hero">
                            <a href="tix.id" target="blank">
                            <i class="bi bi-play-circle"></i>
                            <h4>2 hr 4 min</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <?php require('inc/footer.php') ?>
  </body>
  </html>