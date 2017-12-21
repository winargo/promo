<html>
   <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="./CSS/theme.css">
        <link rel="stylesheet" href="./CSS/calender.css">
        <link rel="stylesheet" href="./CSS/calendarview.css">
       <title>
           Chicken
       </title>
        <script src="./js/prototype.js"></script>
    <script src="./js/calendarview.js"></script>
     <style>
      body {
        font-family: Trebuchet MS;
      }
      div.calendar {
        max-width: 240px;
        margin-left: auto;
        margin-right: auto;
      }
      div.calendar table {
        width: 100%;
      }
      div.dateField {
        width: 140px;
        padding: 6px;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        color: #555;
        background-color: white;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
          margin-top: 8%;
      }
      div#popupDateField:hover {
        background-color: #cde;
        cursor: pointer;
      }
    </style>
    <script>
      function setupCalendars() {
        // Embedded Calendar
        Calendar.setup(
          {
            dateField: 'embeddedDateField',
            parentElement: 'embeddedCalendar'
          }
        )

        // Popup Calendar
        Calendar.setup(
          {
            dateField: 'popupDateField',
            triggerElement: 'popupDateField'
          }
        )
      }

      Event.observe(window, 'load', function() { setupCalendars() })
    </script>
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
               margin-bottom: 5%;
               width: 100%;
           }
           .contact{
               text-align: right;
               margin-top: 5%;
           }
           p{
               font-size: 14pt;
           }
           .left{
               width: 50%;
               height: 100%;
           }
           #embeddedCalendar{
               width: 100%;
               height: 50%;
           }
           h4{
               text-align: center;
               padding-bottom: 20px;
           }
           
       </style>
   </head>
    <body>
        <div class="logo">
            <img src="IMAGES/LOGO.PNG" class="logoimg">
        </div>
        <div class="content">
            <div class="left">
                <h4>Butuh Bantuan ? <a href="#">Live Chat</a></h4>
                    <div id="embeddedExample" style="">
                  <div id="embeddedCalendar" style="margin-left: auto; margin-right: auto">
                  </div>
                  <br />
                  <div id="embeddedDateField" class="dateField">
                    Select Date
                  </div>
                  <br />
                </div>
            </div>
            <div class="right">
               <br>
                <h3>Pilih tanggal yang Diinginkan :</h3>
                   <br>
                     <a href="deals.PHP"><button type="button" class="btn btn-default" id="btndaftar">Promo Debit</button></a>    
                      <a href="deals.PHP"><button type="button" class="btn btn-default" id="btndaftar">Promo Kredit</button></a>
                      <div class="wallet">
                <p style="margin-top:10px;"> Saldo : Rp 50.000 <button type="button" class="btn btn-success">Isi Saldo</button></p>
                </div>
            </div>
        </div>
    </body>
</html>