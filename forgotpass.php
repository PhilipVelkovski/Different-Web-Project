<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="/favicon/Logo.png">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link  rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

   
    <link rel="stylesheet" href="style.css">
    <script src="/js/jquery.min.js"></script>
  <title> Gambo - Sing UP</title>
</head>
<body>
  <div class="sing-in-page" style="padding:40px 0px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="sing-in-logo">
            <a href="index.php">
             
            <img src="/Images/logo_gambo.svg" alt="logo">
            </a>
          </div> 
          <div class="sing-in-form-wrapper"  style="height:370px;">
              <div class="sing-in-form">
              <div class="form-title">
                    <h3>Request a Password Reset</h3>
                  </div>
                <form action="">

                  <div class="enter-phone">
                  <input type="email" id="sing_in_email" name="emails" placeholder="Enter email address"  multiple>
                  <i class="bi bi-envelope"></i>
                  </div> <br>
                  <div class="enter-phone">
                  <input type="password" id="sing_in_pass" name="password" placeholder="Enter old password" 
                  pattern="[0-9]{8}" required>
                  <i class="bi bi-lock"></i>
                  </div> <br>
                  <div class="enter-phone">
                  <input type="password" id="sing_in_pass" name="password" placeholder="Enter new password" 
                  pattern="[0-9]{8}" required>
                  <i class="bi bi-lock"></i>
                  </div><br>
                  <button type="submit" id="sing_in_btn">Reset Password</button>
                  <br>
                 
                  
                </form>
              </div> <br>
              <div class="sing-up-link">
                    <p>Go Back-</p><a href="#">Sing In Now</a>
                   </div>
              <br>
          
          </div> <br>
          <div class="copy-right">
                <p>Copyright 2020 Gambolthemes . All rights reserved</p>
              </div>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>