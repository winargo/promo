<html>
   <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./CSS/theme.css">
       <title>
           Chicken
       </title>
       <style>
           .logo{
               width: 100%;
               text-align: center;
           }
           .logoimg{
               width: 18%;
               height: 18%;
           }
           #btnlogin,#btndaftar{
               width: 70%;
               padding: 4%;
           }
           .form-control{
               width: 70%;
           }
           #coordinate,#btnlogin{
               margin-left: 8%;
               margin-top: 3%;
           }
           #btndaftar{
               margin-top: 5%;
               width: 100%;
           }
           .contact{
               text-align: right;
               margin-top: 5%;
           }
           p{
               font-size: 14pt;
           }
       </style>
   </head>
    <body>
        <div class="logo">
            <img src="IMAGES/LOGO.PNG" class="logoimg">
        </div>
        <div class="content">
            <div class="left">
              <form><br>
               <p id="coordinate">Username</p>
                <input type="text" placeholder="Username" class="form-control" id="coordinate">
                <p id="coordinate">Password</p>
                <input type="password" placeholder="Password" class="form-control" id="coordinate">
                <a href="forgotpassword.php" ><p id="coordinate">forgot password ?</p>
                   
                </a>
                <a href="home.php"><button type="button" class="btn btn-success" id="btnlogin">Login</button>
                </a>
                </form>
            </div>
            <div class="right">
               <br>
                <h3>Belum mempunyai akun ?</h3>
                   <br>
                    <h4>Daftarkan sekarang dan Nikmati Promonya !</h4>
                     <a href="signup.PHP"><button type="button" class="btn btn-info" id="btndaftar">Daftar</button></a>
                <a href="contact.PHP"><p class="contact">
                    Contact Us
                    </p>
                </a>
            </div>
        </div>
    </body>
</html>