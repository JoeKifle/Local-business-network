<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>

        <!-- Vendor CSS -->
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- CSS -->
        <link href="css/app_1.min.css" rel="stylesheet">
        <link href="css/app_2.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="login-content">
            <!-- Login -->


            <div class="lc-block toggled" id="l-login">

                <form action="{{ route('signin') }}" method="post">

                <div class="lcb-form">

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="fg-line">
                            <input name='email' type="text" class="form-control" placeholder="Username" value="{{ Request::old('email')}}">
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                        <div class="fg-line">
                            <input name='password' type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            <i class="input-helper"></i>
                            Keep me signed in
                        </label>

                        <label>
                            @if(count($errors)>0)
                             <div>
                                <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>
                                        {{$error}}
                                      </li>

                                  @endforeach
                                </ul>
                            </div>
                            @endif
                        </label>

                    </div>

                    <button type="submit" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
   </form>
                <div class="lcb-navigation">
 <a href="" data-ma-action="login-switch" data-ma-block="#l-register"><i class="zmdi zmdi-plus"></i> <span>Register</span></a>
                    <a href="" data-ma-action="login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
                </div>
            </div>



            <!-- Register -->
            <div class="lc-block" id="l-register">

              <form action="{{route('signup')}}" method="post">
                <div class="lcb-form">
                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="fg-line">
                            <input name="fname" type="text" class="form-control" placeholder="Your First name">
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="fg-line">
                            <input name="lname" type="text" class="form-control" placeholder="Your Last name" value="{{ Request::old('lname')}}">
                        </div>
                    </div>
                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-male-female"></i></span>
                        <div class="select">
                            <select name="gender" class="form-control" value="{{ Request::old('gender')}}">
                                <<option>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <<option value="NA">Do not Specify</option>
                                </option>
                            </select>
                        </div>
                    </div>


                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-my-location"></i></span>
                        <div class="fg-line">
                            <input name="city" type="text" class="form-control" placeholder="City">
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-case"></i></span>
                        <div class="fg-line">
                            <input name="job" type="text" class="form-control" placeholder="Your Current Job" >
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-my-location"></i></span>
                        <div class="fg-line">
                            <input name="address" type="text" class="form-control" placeholder="Your Primary Address Line" >
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                        <div class="fg-line">
                            <input name="phone" type="text" class="form-control" placeholder="Your Primary Phone Number(+251)" >
                        </div>
                    </div>



                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="fg-line">
                            <input name="email" type="text" class="form-control" placeholder="Email Address" >
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        <div class="fg-line">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        <div class="fg-line">
                            <input name="password2" type="password" class="form-control" placeholder="password again">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-check"></i></button>
                </div>

                <div class="lcb-navigation">
                    <a href="http://www.register.html" data-ma-action="login-switch" data-ma-block="#l-login"><i class="zmdi zmdi-long-arrow-right"></i> <span>Sign in</span></a>
                    <a href="http://www.forgotpassword.html" data-ma-action="login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
                </div>
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
             </form>
            </div>

            <!-- Forgot Password -->
            <div class="lc-block" id="l-forget-password">

             <form action="https://www.forgottenpassword.com" method="get">
                <div class="lcb-form">
                    <p class="text-left">Inter your Valid Email Address

                    </address>
                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-check"></i></button>
                </div>

                <div class="lcb-navigation">
                    <a href="" data-ma-action="login-switch" data-ma-block="#l-login"><i class="zmdi zmdi-long-arrow-right" ></i> <span>Sign in</span></a>
                    <a href="" data-ma-action="login-switch" data-ma-block="#l-register"><i class="zmdi zmdi-plus"></i> <span>Register</span></a>
                </div>
               </form>
            </div>
        </div>


        <!-- Javascript Libraries -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="js/waves.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="js/app.min.js"></script>
     </body>
</html>

<!-- Localized -->
