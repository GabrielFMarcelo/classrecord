<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/classrecord/resource/php/class/core/init.php';
isLogin();
$view = new view;
$user = new user();
updateProfile();
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"  href="resource/css/template.css">
   <link rel="stylesheet" type="text/css"  href="resource/css/speech.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee&family=Cormorant&family=Nunito:wght@300&family=Playfair+Display:wght@500&family=Salsa&display=swap" rel="stylesheet">

   <title>Home</title>
   <link rel="shortcut icon" href="resource/img/favicon.ico" type="image/x-icon">
   <link rel="icon" href="resource/img/favicon.ico" type="image/x-icon">

 </head>
 <body>
  <header class="bg">
     <nav class="p-3 navbar navbar-expand-lg ">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav mx-auto pr-5">
         <li class="nav-item mr-4 text-light font-weight-bold">
          <img class="logo" src="./resource/img/sky.png" alt="">
          <h2 class="p-3 d-inline">Sky High</h2>
          </li>
           <li class="nav-item mr-4 font-weight-bold">
             <a class="nav-link text-light" href="template.php">Home</a>
           </li>
           <li class="nav-item mr-4 active">
             <a class="nav-link text-light" href="register.php">Register</a>
           </li>
           <li class="nav-item mr-4">
             <a class="nav-link text-light" href="logout.php">Log Out</a>
           </li>
         </ul>
       </div>
     </nav>
     </header>
   <section class="mb-3">
   <div class="container text-center pt-5">
                     <h1 class="text-center mb-4">View Information</h1>
    <div class="row">
        <div class="col-md-8">
        <form action="updatepropic.php" method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-md-6 mr-4 text-right">
                                       <?php profilePic(); ?>
                                </div>
                                <div class="form-group col-md-6 mt-5">
                                    <label for="myfile">Upload your Picture</label>
                                        <input id="myfile" type="file" name="myfile" class="form-control-file" />
                                        <input type="submit" name="pic" value="Update your Picture" class=" mt-4  form-control btn btn-dark" accept=".jpg" />
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
             </form>
             <form action="" method="post">
                <table class="table ">
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-md-4">
                                 <label for = "username" class=""> Username:</label>
                                 <input class="form-control"  type = "text" name="username" id="username" value ="<?php echo escape($user->data()->username); ?>" autocomplete="off"  />
                                </div>
                                <div class="form-group col-md-4">
                                 <label for = "fullName" class=""> Full Name</label>
                                 <input class="form-control"  type = "text" name="fullName" id="fullName" value ="<?php echo escape($user->data()->name); ?>"/required>
                                </div>
                                <div class="form-group col-md-4">
                                 <label for = "email" class=""> Email Address</label>
                                 <input class="form-control"  type = "text" name="email" id="email" value ="<?php echo escape($user->data()->email); ?>"/required>
                                </div>
                             </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="row justify-content-center">
                          <div class="form-group col-md-5">
                            <label for="College" >College/s to handle</label>
                                <select id="College" name="College[]" class="selectpicker form-control" data-live-search="true" multiple required>
                                  <?php $view->collegeSP2();?>
                                </select>
                          </div>
                          <div class="form-group col-5">
                            <label for="Role">Role</label>
                                <select id="Role" name="Role[]" class="selectpicker form-control" data-live-search="true" multiple required>
                                  <?php $view->rolesSP2();?>
                                </select>
                          </div>
                          <div class="form-group col-md-5">
                                    <label  >&nbsp;</label>
                                <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                 <input type="submit" value="Update your profile" class=" form-control btn btn-dark" />
                                </div>
                        </td>
                    </tr>
                </table>
             </form>
        </div>
        <div class="col-md-4">
          Accounts
              <?php
              echo "<br>";
              $view = new view();
              $view->getnames();
              $view->getnames2();
              $view->getnames3();
              $view->getnames4();
              $view->getnames5();
              $view->getnames8();
              ?>
              <?php
              $view = new view();
              $id = 0;
              $view->showRoles($id);
              ?>
        </div>
    </div>
    </section>
 <footer class="py-4 footer slide-in-right">
   <div class="container text-center">
       <div class="row">
           <div class="col col-sm-5 text-left text-light">
               <small>Copyright &copy;Centro Escolar University-BSIT1-A     Group 3 2023</small>
           </div>
           <div class="col text-right text-light">
               <small>Created by: Gabriel Marcelo, Heidel Berg Valerio, Bea Patrice Cortez, Jairo Garcia</small>
           </div>
       </div>
   </div>
 </footer>
     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>
