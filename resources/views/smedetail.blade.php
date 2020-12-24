<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$lnb->LNB_name}} Detail</title>
        
        <!-- Vendor CSS -->
    <link rel="stylesheet" href="../css/normalize.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <!-- end modal css -->

    <!-- Vendor CSS -->
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/sweetalert2.min.css" rel="stylesheet">
    <link href="../css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="../css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="../css/lightgallery.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuYpJPqZrw8TPGjZuLSzOclIdbYIA3g-o"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>


    <!-- CSS -->
        <link href="../css/app_1.min.css" rel="stylesheet">
        <link href="../css/app_2.min.css" rel="stylesheet">

        <!-- Following CSS codes are used only fore demo purposes thus you can remove anytime -->
        <link href="../css/demo.css" rel="stylesheet">

    <script>

        var user_lat;
        var user_long;


        function submitPost(user_id,sme_id) {
            var com_com = "com-1";
            var com = document.getElementById(com_com).value;

            $.ajax({
                method: 'POST',
                url: url,
                data: { body:com, com_user_id: user_id,com_sme_id:sme_id,_token: token }


            }).done(function (msg) {

                var divId = "curr_com"+sme_id;
                var com_small = "curr_com_cont"+sme_id;
                document.getElementById('just_div_com').style.display='block';
                document.getElementById('just_com').innerHTML=com;

            });

        }

        document.onreadystatechange = function(){

            if(document.readyState === 'complete'){

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }


            }
        }


        function showPosition(position) {
          user_lat =  position.coords.latitude ;
          user_long = position.coords.longitude;


          initMap(user_lat,user_long);
        }


        function initMap(lat,long) {

            var sme_lat = {{$lnb->latitude}};
            var sme_long = {{$lnb->longitude}};

            var pointA = new google.maps.LatLng(lat, long),
                pointB = new google.maps.LatLng(sme_long,sme_lat),

                myOptions = {
                    zoom: 7,
                    center: pointA,
                    mapTypeId: 'satellite'
                },
                map = new google.maps.Map(document.getElementById('map-canvas'), myOptions),
                // Instantiate a directions service.
                directionsService = new google.maps.DirectionsService,
                directionsDisplay = new google.maps.DirectionsRenderer({
                    map: map
                }),
                markerA = new google.maps.Marker({
                    position: pointA,
                    title: "A",
                    label: "your Location",
                    map: map
                }),

                markerB = new google.maps.Marker({
                    position: pointB,
                    title: "B",
                    map: map
                });

            // get route from A to B
            calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);


          var dis =  Math.round(google.maps.geometry.spherical.computeDistanceBetween (pointA, pointB));

          document.getElementById("dis_val").innerHTML = dis/1000+" KM";


        }



        function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
            directionsService.route({
                origin: pointA,
                destination: pointB,
                travelMode: google.maps.TravelMode.DRIVING
            }, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }

    </script>

    </head>
    
    <body>

    <header id="header" class="clearfix" data-ma-theme="blue">
        <ul class="h-inner">
            <li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
                <div class="line-wrap">
                    <div class="line top"></div>
                    <div class="line center"></div>
                    <div class="line bottom"></div>
                </div>
            </li>

            <li class="hi-logo hidden-xs">
                <a href=" {{

           route('smehome',compact(['user' => \Illuminate\Support\Facades\Auth::user()]) )

        }}">Local Business Network</a>
            </li>

            <li class="pull-right">
                <ul class="hi-menu">

                    <li data-ma-action="search-open">
                        <a href=""><i class="him-icon zmdi zmdi-search"></i></a>
                    </li>

                    <li>
                        <a href="{{ route('mysme',['sme_id'=>$user->SME_id])}}" class="btn btn-info waves-effect">Sign-Up</a>

                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" href=""><i class="him-icon zmdi zmdi-more-vert"></i></a>
                    </li>

                    <li>
                        <a href="{{ route('mysme',['sme_id'=>$user->SME_id])}}" class="btn btn-info waves-effect">Sign-Up</a>

                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" href=""><i class="him-icon zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li class="hidden-xs">
                                <a data-ma-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                            </li>
                            <li>
                                <a data-ma-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-face"></i> Settings</a>
                            </li>

                        </ul>
                    </li>


                    @if($user->owns_SME == 0 )

                        <a id="apply" href="#applyModal" class="btn btn-info waves-effect" >Apply as SME</a>

                    @elseif($user->owns_SME == 1 && $user->app_status == "accepted")

                        <a href="{{ route('mysme',['sme_id'=>$user->SME_id])}}" class="btn btn-info waves-effect">My SME Manager</a>

                    @elseif($user->app_status == "pending.." )
                        <a id="edit" href="" class="btn btn-info waves-effect" >Application Pending</a>
                    @endif


                </ul>
            </li>
        </ul>


        <!-- Top Search Content -->
        <div class="h-search-wrap">
            <div class="hsw-inner">
                <i class="hsw-close zmdi zmdi-arrow-left" data-ma-action="search-close"></i>
                <input type="text">
            </div>
        </div>


    </header>



    <section id="main">

        <aside id="sidebar" class="sidebar c-overflow">
            <div class="s-profile">
                <a href="" data-ma-action="profile-menu-toggle">
                    <div class="sp-pic">
                        <img src="


                           @if(\Illuminate\Support\Facades\Storage::disk('local')->has($user_profile))

                        {{ route('user.profile',['filename'=>$user_profile])}}


                        @else

                        {{ route('user.profile',['filename'=>'dump_profile.jpg'])}}

                        @endif

                                " alt=""> <!-- profile picture -->
                    </div>

                    <div class="sp-info">
                        {{ $user->first_name }}  {{ $user->last_name  }}
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </a>

                <ul class="main-menu">
                    <li>
                        <a href="{{ route('profile.about') }}"><i class="zmdi zmdi-account"></i> View Profile</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                    </li>
                    <li>
                        <a href="{{ route('profile.about') }}"><i class="zmdi zmdi-settings"></i> Settings</a>
                    </li>
                    <li>
                        <a href="{{ route('logout')}}"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                    </li>
                </ul>
            </div>
            <ul class="main-menu">
                <li><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>

                @foreach($categories as $cat)
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-chart"></i> {{ $cat->category }}</a>

                        <ul>
                            @foreach($cat->Subcategory as $subcat )
                                <li><a href="{{ route('cat',['cat_id'=>$subcat->sub_cat]) }}">{{ $subcat->sub_cat  }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach

            </ul>
        </aside>

        <aside id="chat" class="sidebar">

                <div class="chat-search">
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Search People">
                        <i class="zmdi zmdi-search"></i>
                    </div>
                </div>

                <div class="lg-body c-overflow">
                    <div class="list-group">
                        <a class="list-group-item media" href="">
                            <div class="pull-left p-relative">
                                <img class="lgi-img" src="img/demo/profile-pics/2.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lgi-heading">Jonathan Morris</div>
                                <small class="lgi-text">Available</small>
                            </div>
                        </a>

                        <a class="list-group-item media" href="">
                            <div class="pull-left">
                                <img class="lgi-img" src="img/demo/profile-pics/1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lgi-heading">David Belle</div>
                                <small class="lgi-text">Last seen 3 hours ago</small>
                            </div>
                        </a>

                        <a class="list-group-item media" href="">
                            <div class="pull-left p-relative">
                                <img class="lgi-img" src="img/demo/profile-pics/3.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lgi-heading">Fredric Mitchell Jr.</div>
                                <small class="lgi-text">Availble</small>
                            </div>
                        </a>

                        <a class="list-group-item media" href="">
                            <div class="pull-left p-relative">
                                <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lgi-heading">Glenn Jecobs</div>
                                <small class="lgi-text">Availble</small>
                            </div>
                        </a>

                        <a class="list-group-item media" href="">
                            <div class="pull-left">
                                <img class="lgi-img" src="img/demo/profile-pics/5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lgi-heading">Bill Phillips</div>
                                <small class="lgi-text">Last seen 3 days ago</small>
                            </div>
                        </a>

                        <a class="list-group-item media" href="">
                            <div class="pull-left">
                                <img class="lgi-img" src="img/demo/profile-pics/6.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lgi-heading">Wendy Mitchell</div>
                                <small class="lgi-text">Last seen 2 minutes ago</small>
                            </div>
                        </a>
                    </div>
                </div>
            </aside>

            <section id="content">
                <div class="container">
                    <div class="block-header" onclick="initMap()">
                        <h1><b>{{ $lnb->LNB_name  }}</b></h1>
               </div>
                    
         <div class="card">
             <div class="card">
                        <div class="card-header">
                            <h2>SAMPLE PRODUCTS
                                <small>ENJOY OUR LATEST PRODUCTS HERE...</small>
                            </h2>
                        </div>

                        <div class="card-body card-padding">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img   src="{{ route('user.profile',['filename'=>"lnbcarousal1-".$lnb->User->first_name."-".$lnb->id.".jpg"])}}" alt="" style="width:1520px;height:270px;">
                                        <div class="carousel-caption">
                                            <h3>{{$lnb->LNB_name}}</h3>
                                            <p>{{$lnb->lnb_quote}}</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img    src="{{ route('user.profile',['filename'=>"lnbcarousal2-".$lnb->User->first_name."-".$lnb->id.".jpg"])}}" alt="" style="width:1520px;height:270px;">
                                    </div>
                                    <div class="item">
                                        <img src="{{ route('user.profile',['filename'=>"lnbcarousal3-".$lnb->User->first_name."-".$lnb->id.".jpg"])}}" alt="" style="width:1520px;height:270px;">
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="zmdi zmdi-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="zmdi zmdi-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
         </div>  
                    
                <div class="card">
                        <div class="action-header clearfix">
                            <div class="ah-label hidden-xs">PHOTO GALLERY</div>


                        </div>

                        <div class="card-body card-padding">
                            <div class="lightbox photos clearfix">
                          @foreach($photos as $photo)
                                <div data-src="
                     @if(\Illuminate\Support\Facades\Storage::disk('local')->has($photo->photoname))

                                {{ route('lnb.photo',['filename'=>$photo->photoname])}}


                                @endif
                                        " class="col-md-2 col-sm-4 col-xs-6">
                                    <div class="lightbox-item p-item">
                                        <img src=" @if(\Illuminate\Support\Facades\Storage::disk('local')->has($photo->photoname))

                                        {{ route('lnb.photo',['filename'=>$photo->photoname])}}


                                        @endif " alt="">
                                    </div>
                                </div>
                          @endforeach
                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>    
                  
                    <div class="card-header ch-alt">
                                <h2>Contact And Location Information</h2>
                            </div>
                    <div class="card-body card-padding">
                                <div class="pmo-contact">
                                    <ul>
                                        <li class="ng-binding"><i class="zmdi zmdi-phone"></i> {{$lnb->User->phone}}</li>
                                        <li class="ng-binding"><i class="zmdi zmdi-email"></i> {{$lnb->User->email}}</li>
                                        <li class="ng-binding"><i class="zmdi zmdi-facebook-box"></i> N/A
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-pin"></i>
                                            <address class="m-b-0 ng-binding">
                                               {{$lnb->user->address}}<br>
                                                Ethiopia
                                            </address>
                                        </li>
                                    </ul>
                                </div>



                        <div class="card-header text-center" >
                            <h4>Distance: <span id="dis_val"><img src="../pics/loading.gif"> </span> </h4>
                        </div>
                        <div class="card col-md-7"  id="map-canvas" style="height: 500px;">

                            <div style="
    padding-left: 272px;
    padding-top: 212px;
">
                                <img src="../pics/loading.gif" style="    padding-left: 30px;"><br>Please wait..
                            </div>


                        </div>

                        <div class="card rating-list col-sm-4" style="float:right">
                            <div class="card-header text-center rating-list">
                                <h2>Average Rating {{$lnb->rated_val}}</h2>
                                <div class="rl-star">
                                    @if($lnb->rated_val >=1 && $lnb->rated_val<2)
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    @elseif($lnb->rated_val>=2 && $lnb->rated_val<3)
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    @elseif($lnb->rated_val>=3 && $lnb->rated_val<4)
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    @elseif($lnb->rated_val>=4 && $lnb->rated_val<5)
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    @elseif($lnb->rated_val == 5)
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star active"></i>
                                        <i class="zmdi zmdi-star active" ></i>
                                        <i class="zmdi zmdi-star active"></i>
                                    @endif
                                </div>
                            </div>
                
                      <div class="card go-social">
                            <div class="card-header">
                                <h2>Share This on
                                    <small>Great way to be connected</small>
                                </h2>
                            </div>

                            <div class="card-body clearfix">
                                <a class="col-xs-4" href="">
                                    <img src="../img/social/facebook-128.png" class="img-responsive" alt="">
                                </a>

                                <a class="col-xs-4" href="">
                                    <img src="../img/social/twitter-128.png" class="img-responsive" alt="">
                                </a>

                                <a class="col-xs-4" href="">
                                    <img src="../img/social/googleplus-128.png" class="img-responsive" alt="">
                                </a>

                                <a class="col-xs-4" href="">
                                    <img src="../img/social/linkedin-128.png" class="img-responsive" alt="">
                                </a>
                                <a class="col-xs-4" href="">
                                    <img src="../img/social/blogger-128.png" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                      </div>
                        
                        </div>
             
                    
             <div class="card col-md-7">
                        <div class="card-header">
                            <h2>Comments
                                <small>{{ $lnb->comments->count() }} Total comments on this small interprise.
                                </small>
                            </h2>

                        </div>

                        <div class="card-body card-padding">
                            

                            <br/>

                            <div class="media-demo">

                        @foreach($lnb->comments as $coms)

                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#">
                                            <img class="lgi-img" src="{{ route('user.com.profile',['user_id'=>$coms->User_id])}}" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
     <h4 class="media-heading">{{\App\User::find($coms->User_id)->first_name}} {{\App\User::find($coms->User_id)->last_name}}</h4>
                                        {{ $coms->comment  }}
                                        <div class="media" style="display:  none;">
                                            <div class="pull-left">

                                            </div>

                                        </div>
                                    </div>
                                </div>

                    @endforeach


                            <div class="media" style="display: none;" id="just_div_com">
                                <div class="pull-left">
                                    <a href="#">
                         <img class="lgi-img" src=" {{ route('user.com.profile',['user_id'=>\Illuminate\Support\Facades\Auth::user()->id])}} " alt="">
                                    </a>
                                </div>
                                <div class="media-body">
         <h4 class="media-heading">{{\Illuminate\Support\Facades\Auth::user()->first_name}}  {{\Illuminate\Support\Facades\Auth::user()->last_name}}</h4>

                                   <p id="just_com"></p>

                                    <div class="media" style="display:  none;">
                                        <div class="pull-left">

                                        </div>

                                    </div>
                                </div>
                            </div>
                                

                                <div class="wic-form toggled" style="background-color: whitesmoke">
                                     <textarea placeholder="Write something..." id="com-1" data-ma-action="wall-comment-open" name="com_cont"></textarea>
                                    <input type="text" hidden="" value="{{$lnb->id}}" name="sme_id">
                                    <input type="text" hidden="" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" name="user_id">
                                    <div class="wicf-actions text-right">
                                        <input type="hidden" name="_token" value="ia4NGmMaQ74DBx5ufOoC99R8uApRtPDxTD4gsFSi">

                                        <button class="btn btn-sm btn-link waves-effect" data-ma-action="wall-comment-close">Cancel</button>
   <button onclick=" submitPost({{\Illuminate\Support\Facades\Auth::user()->id}},{{ $lnb->id }}) " class="btn btn-sm btn-primary waves-effect" data-ma-action="wall-comment-close">Post</button>
                                    </div>

                                </div>


                                
                            </div>





                        </div>


                    </div>

                </div>
            </section>
        </section>
        
        <footer id="footer">
            Copyright &copy; 2015 Material Admin
            
            <ul class="f-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Reports</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </footer>

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->

        <script>

            var token = '{{ Session::token() }}';
            var url = '{{ route('post')  }}';

        </script>
    <!-- Javascript Libraries -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="../js/waves.min.js"></script>
        <script src="../js/bootstrap-growl.min.js"></script>
        <script src="../js/sweetalert2.min.js"></script>
        <script src="../js/lightgallery-all.min.js"></script>
        <script src="../js/autosize.min.js"></script>
        <script src="../js/fileinput.min.js"></script>
        


        <script src="../js/app.min.js"></script>
    </body>
</html>
<!-- Localized -->