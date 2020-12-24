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

                <form action="http://www.loggedinto.html" method="get">

                <div class="lcb-form">

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                        <div class="fg-line">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            <i class="input-helper"></i>
                            Keep me signed in
                        </label>
                    </div>

                    <button type="submit" href="http://www.loggedin.html" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
                </div>
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
                            <input name="lname" type="text" class="form-control" placeholder="Your Last name">
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="fg-line">
                            <input name="email" type="email" class="form-control" placeholder="Your Email">
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-my-location"></i></span>
                        <div class="fg-line">
                            <input name="password" type="password" class="form-control" placeholder="password">
                        </div>
                    </div>
                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-my-location"></i></span>
                        <div class="fg-line">
                            <input name="password" type="password" class="form-control" placeholder="Retype your email">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-check"></i></button>
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
