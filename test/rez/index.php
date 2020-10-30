<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/pozadina.jpg" />
        <title>Ticket-Rez</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Rezervacija karata za koncerte</h1>
                       <p>Siroka ponuda najboljih koncerata na jednom mjestu</p>
                       <a href="products.php" class="btn btn-danger">Rezerviraj sada</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="productspop.php">
                                <img src="img/beyonce.webp" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Pop</p>
                                        <p>Pogledajte izbor Pop koncerata</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="productstehno.php">
                               <img src="img/marcus.webp" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Techno</p>
                                    <p>Pogledajte izbor Techno koncerata</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="productsrock.php">
                               <img src="img/arcticmonkeys.webp" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Rock</p>
                                   <p>Pogledajte izbor Rock koncerata</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
               <p>Copyright &copy Tiket-Rez. All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>