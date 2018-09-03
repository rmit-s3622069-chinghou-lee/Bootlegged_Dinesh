




 <!doctype html>
        <html lang="{{ app()->getLocale() }}">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Bootlegged</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Yrsa" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/app.css">



        <!-- Styles -->
        <style>
        p{margin: 0px;}

          html, body {
              background-color: #fff;
              color: #636b6f;
              font-family: 'Yrsa', serif;
              /*font-weight: 500;*/
              height: 500px;
              margin: 0;
              background-image: url(Images/back.jpg);
              background-repeat: no-repeat;
              /*background-size: 1440px 700px;*/
              background-size: 100% 120%;
              /*-webkit-background-size: cover;*/
              /*-moz-background-size: cover;*/
              /*-o-background-size: cover;*/
              /*background-size: cover;*/

          }

          .form_box{
            width: 50%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
          }
        </style>
        </head>
        <body>


          <div class="para" id="home">
              <ul>
            <p style="font-size: 40px; ">WELCOME TO BOOTLEGGED</p>
            <p style="color: white; font-size: 20px;" >Bootlegged is a peer to peer marketplace where buyers and sellers of alcoholic <br> bevergaes meet.We find potiential buyers for your excess inventory and uncover <br>buying opportunities for you in real time</p>
            </ul>
        </div>

     <!-- Login Div -->

        <div class="moving_size" style="height: 500px;">
            <img src="Images/reg_pic.jpg" name="about_pic" class="about_pic" style="height:900px; ">

         <div class="about" id="about" style="margin-top: -470px; margin-left: 40px;">


          <!-- <form  action="" method="POST" id="register_form" aria-label="{{ __('Register') }}" style="margin-top: 100px; margin-left: 130px;  "> -->

           <a href= "{{URL::to('registerman')}}" ><button type="submit" class="button" style="vertical-align:middle; width: 400px; font-family:'Yrsa', serif; font-size: 25px; margin-left: 0px; margin-top: 100px;"><span>REGISTER AS A MANUFACTURER </span></button></a><br><br><br><br><br>

           <p style="font-size: 40px; margin-left: 170px; margin-top: -40px;">OR </p><br><br>

            <!-- <form  action="" method="POST" id="register_form" aria-label="{{ __('Register') }}" style="margin-top: 10px; margin-left: 130px;  "> -->


           <a href= "{{URL::to('registersto')}}" ><button type="submit" class="button" style="vertical-align:middle; width: 400px; font-family:'Yrsa', serif; font-size: 25px; margin-left: 0px; "><span>REGISTER AS A STORE OWNER </span></button></a>





</div>
         </div>


<!-- Footer -->

  @yield('footer')

        </body>
        </html>

