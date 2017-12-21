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
           p{
               font-size: 14pt;
           }
           #form-cordinate{
               display: inline;
           }
           .form-control{
               width: 30%;
               margin-top: 1.8%;
               margin-bottom: 1.8%;
           }
           .form{
               margin: 0 auto;
               text-align: center;
               width: 70%;
           }
           #btndaftar{
               padding: 3%;
               width: 45%;
               margin-left: 3%;
               margin-top: 3%;
           }
           .special{
               text-align: left;
               margin-left: 4%;
           }
       </style>
   </head>
    <body>
        <div class="logo">
            <img src="IMAGES/LOGO.PNG" class="logoimg">
        </div>
        <div class="content">
            <div class="form">
                <form action="">
                    <div id="form-cordinate">Nama  &nbsp;      &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;</div><input type="text" class="form-control" id="form-cordinate"><br>
                    <div id="form-cordinate">Nomor HP      &nbsp;&nbsp; :&nbsp;&nbsp;</div><input type="text" class="form-control" id="form-cordinate">
                    <br>
                    <div id="form-cordinate">Username &nbsp;&nbsp;    :&nbsp;&nbsp;</div><input type="text" class="form-control" id="form-cordinate">
                    <br>
                    <div id="form-cordinate">Password    &nbsp;&nbsp; :&nbsp;&nbsp;</div><input type="text" class="form-control" id="form-cordinate">
                    <br>
                    
                    <a href="index.php"><button type="button" class="btn btn-success" id="btndaftar">Login</button></a>
                    <a href="index.php"><button type="button" class="btn btn-info" id="btndaftar">Daftar</button></a>
                    <p class="special">Jika Anda sudah punya akun</p>
                </form>
            </div>
        </div>
    </body>
</html>