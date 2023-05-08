<!-- henlo world -->
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

<section class="login">

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="resource/img/skyhigh.jpg"
                alt="login form" class="img-fluid mt-5 pt-4 pb-3 pl-5 rounded"/>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="" method="post">
                  <div class="d-flex align-items-center mb-3 pb-1" style="color: #123560;">
                    <span class="h1 fw-bold mb-0">Skyhigh Class Record System</span>
                  </div>
                  <?php logd();?>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control form-control-lg" required/>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="defaultLoginFormPassword">Password</label>
                    <input type="password" id="defaultLoginFormPassword" name="password" class="form-control form-control-lg" required/>
                  </div>

                  <div class="pt-1 mb-4">
                    <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                    <input  type="submit" class="btn btn-lg btn-block text-light" value="Login"/>
                  </div>
                  <div id="emailHelp" class="form-text text-center mt-5 mb-2 text-dark">Not Registered?</div>
                 <div class="">
                   <a href="register.php" target="_blank" class="btn btn-color text-light px-5 mb-5 w-100 text-light fw-bold"> Create an Account</a>
                 </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
    </html>
