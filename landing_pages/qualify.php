<?php session_start(); 

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phoneNumber'];
        header('Refresh: 5; URL=application');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Social Response Marketing</title>
      <link rel="icon" href="https://socialresponsemarketing.com/wp-content/uploads/2020/02/cropped-srm-favicon-32x32.png" sizes="32x32" />
      <link rel="icon" href="https://socialresponsemarketing.com/wp-content/uploads/2020/02/cropped-srm-favicon-192x192.png" sizes="192x192" />
      <link rel="apple-touch-icon-precomposed" href="https://socialresponsemarketing.com/wp-content/uploads/2020/02/cropped-srm-favicon-180x180.png" />
      <link rel="stylesheet" type="text/css" href="css/qualify.css">
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
      <script src="js/srm-theme.js"></script>
    </head>
<body>
 <script>
       
      </script> 
        <div class="fancyBox">
            <div class="container">

                  <div class="qualifyBox"> 

                  <div class="image" id="qualify-image">
                  <img src="images/Stacked-Book-Hardcover-1024x989.png" width="400" >




                    <h3>Your audiobook is on the way! See if you also qualify for a free YouTube Ad Coaching session on the next page.  </h3>

                 
                  </div>             
                </div>
            </div>
        </div>      
</body>
</html>
