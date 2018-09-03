 @extends('footer')
 
 


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

        <div>
               <img style=" position: absolute; display: inline;" class="logo"  alt ="logo" src="/Images/logo1.png">

              <a href="{{URL::to('login')}}" style="float: right;margin-right: 100px; font-size: 19px; text-decoration: none; vertical-align:middle; " id="log" class="button">Login</a>
             
              <a href="/" style="float: right;margin-right: 60px; font-size: 19px; text-decoration: none; " id="log">Contact</a>
              <a href="/"  id="log" style=" font-size: 19px; float: right; text-decoration: none; margin-right: 50px; ">FAQ</a>
              <a href="/"  id="log" style=" font-size: 19px; float: right; text-decoration: none; margin-right: 50px; ">About</a>


              <a href="/" id="log" style="float: right;  margin-right:50px ; font-size: 19px; text-decoration: none;">Home
                   </a>

         
          </div>    

          <div class="para" id="home">
              <ul>
            <p style="font-size: 40px; ">WELCOME TO BOOTLEGGED</p>
            <p style="color: white; font-size: 20px;" >Bootlegged is a peer to peer marketplace where buyers and sellers of alcoholic <br> bevergaes meet.We find potiential buyers for your excess inventory and uncover <br>buying opportunities for you in real time</p>
            </ul>
        </div>

     <!-- Login Div -->

        <div class="moving_size" style="height: 900px;">
            <img src="Images/reg_pic.jpg" name="about_pic" class="about_pic" style="height:900px; ">
          
         <div class="about" id="about" style="margin-top: -870px;">
             <p style="font-size: 40px; margin-left: 120px; ">ENTER THE DETAILS</p>
         
          <form  action="{{ route('register') }}" method="POST" id="register_form" aria-label="{{ __('Register') }}" style="margin-top: 10px; margin-left: 130px;  ">
            @csrf
                    <input class="form_box form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email" id="email" required ><br>
                      @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    <input class="form_box form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Business Name" id="name" required><br>
                     @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    <input class="form_box form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="Password" name="password" placeholder="Password" id="password" required><br>
                      @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    <input class="form_box" type="Password" name="password_confirmation" placeholder="Confirm Password" id="password-confirm" required><br><br>
                    <input class="form_box" type="text" name="street_addr" placeholder="Address Line " id="street_addr" required><br><br>
                    <input class="form_box" type="text" name="suburb" placeholder="Suburb" id="suburb"required><br><br>
                    <input class="form_box" type="text" name="state" placeholder="State(VIC,NSW,WA,QLD,SA,TAS)" id="state"required><br><br>
                    <input class="form_box" type="number" name="post_code" placeholder="Post Code" id="post_code"required><br><br>
                    <input class="form_box" type="number" name="contact_no" placeholder="Contact Number" required><br><br>

                  <br><br> <br>
                      


      
         

           <a href= "" ><button type="submit" class="button" style="vertical-align:middle; width: 140px; font-family:'Yrsa', serif; font-size: 25px; margin-left: 70px; "><span>REGISTER </span></button></a>





   
</div>
         </div>


<!-- Footer -->

  @yield('footer')

        </body>
        </html>

