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
  <title> <?php echo $page_title; ?></title>
</head>
<body>
  <div class="sing-in-page">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="sing-in-logo">
            <a href="index.php">
             
            <img src="/Images/logo_gambo.svg" alt="logo">
            </a>
          </div> 
          <div class="sing-in-form-wrapper">
              <div class="sing-in-form">
                <form  method="POST">
                  <div class="form-title">
                    <h3>Sing In</h3>
                  </div>
                  <div class="enter-phone">
                  <input type="tel" id="sing_in_phone" name="phone" placeholder="Enter phone number" 
                  pattern="[0-9]{3}-[0]{1}-[0-9]{2}-[0-9]{3}-[0-9]{3}" required>
                  <i class="bi bi-phone"></i>
                  </div> <br>
                  <div class="enter-password">
                  <input type="password" id="sing_in_pass" placeholder="Enter Password" name="password"
                      minlength="8" required>
                      <i class="bi bi-file-lock"></i>
                  </div> <br>
                  <button type="submit" onclick="login();" id="sing_in_btn">Sing In Now</button>
                  <br>
                  
                  
                </form>
              </div>
            
              <div class="forgotpass">
                    
                    <a href="#" class="forgotpass">Forgot Password?</a>
                    </div>
              
           
              <div class="sing-up-link">
                    <p>Don't have an account -</p><a href="#">Sing Up Now</a>
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