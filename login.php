<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/classrecord/resource/php/class/core/init.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Portal</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="resource/css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee&family=Cormorant&family=Nunito:wght@300&family=Playfair+Display:wght@500&family=Salsa&display=swap" rel="stylesheet">
</head>
<body>

<section class="" style="background-color: #FFF;">
        <nav class="navbar bg-white slide-in-left">
          <a class="navbar-brand ">
            <img src="resource/img/logo.png" height="70" class="d-inline-block align-top"
              alt="skyhigh"><h3 class="ib">
          </a>
        </nav>

        
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                  <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block bgcol6">
                      <img src="resource/img/skyhigh.jpg"
                        alt="login form" class="img-fluid"/>
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                      <div class="card-body p-4 p-lg-5 text-black">

                        <form action="" method="post">
                          <div class="d-flex align-items-center mb-3 pb-1">                     
                            <span class="h1 fw-bold mb-0">Skyhigh</span>
                          </div>
                          <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                          <?php logd();?>
                          <div class="form-outline mb-4">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" required/>
                            <label class="form-label" for="username">Username</label>
                          </div>
                          <div class="form-outline mb-4">
                            <input type="password" id="defaultLoginFormPassword" name="password" class="form-control form-control-lg" required/>
                            <label class="form-label" for="defaultLoginFormPassword">Password</label>
                          </div>
                          
                          <div class="pt-1 mb-4">
                            <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                            <input  type="submit" class="btn btn-lg btn-block"value="Login"/>
                          </div>                      
                          <a href="#!" class="small text-muted">Terms of use.</a>
                          <a href="#!" class="small text-muted">Privacy policy</a>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <footer id="sticky-footer" class="py-4 text-light-50 slide-in-right footer fixed-bottom ">
          <div class="container text-center">
            <div class="row">
              <div class="col col-sm-5 text-left">
                <small class="text-dark">&copy;Centro Escolar University BSIT-1A</small>
              </div>
              <div class="col text-right">
                <small class="text-dark">Created by: Marcelo Gabriel, Heidel Valerio, Bea Patrice, Jairo A. Garcia</small>
              </div>
            </div>
          </div>
        </footer>
        
        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
    </html>
