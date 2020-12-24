<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>
    
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

    <!-- CSS -->
    <link href="../css/app_1.min.css" rel="stylesheet">
    <link href="../css/app_2.min.css" rel="stylesheet">
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
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="">
                            <i class="him-icon zmdi zmdi-email"></i>
                            <i class="him-counts">6</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="list-group">
                                <div class="lg-header">
                                    Messages
                                </div>
                                <div class="lg-body">
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">David Belle</div>
                                            <small class="lgi-text">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Jonathan Morris</div>
                                            <small class="lgi-text">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Fredric Mitchell Jr.</div>
                                            <small class="lgi-text">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Glenn Jecobs</div>
                                            <small class="lgi-text">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Bill Phillips</div>
                                            <small class="lgi-text">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </a>
                                </div>
                                <a class="view-more" href="">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="">
                            <i class="him-icon zmdi zmdi-notifications"></i>
                            <i class="him-counts">9</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="list-group him-notification">
                                <div class="lg-header">
                                    Notification

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-ma-action="clear-notification">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lg-body">
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">David Belle</div>
                                            <small class="lgi-text">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Jonathan Morris</div>
                                            <small class="lgi-text">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Fredric Mitchell Jr.</div>
                                            <small class="lgi-text">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Glenn Jecobs</div>
                                            <small class="lgi-text">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Bill Phillips</div>
                                            <small class="lgi-text">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </a>
                                </div>

                                <a class="view-more" href="">View Previous</a>
                            </div>
                        </div>
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
                    @if(\Illuminate\Support\Facades\Auth::user()->owns_SME == 0)
                        <a id="apply" href="#applyModal" style="color:white!important;">Apply as SME</a>
                    @else
                        <a href="{{ route('mysme',['sme_id'=>$lnb->id]) }}" class="btn btn-info waves-effect">My SME Manager</a>
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

            <section id="content" style="padding-left:0px">
                <div class="container container-alt" style="max-width: 1370px;">

                    <div class="block-header">
                        <h2>{{  $lnb->LNB_name }}
                            <small>{{  $lnb->lnb_quote }}</small>
                        </h2>

                    </div>

                    <div class="card" id="profile-main">
                        <div class="pm-overview c-overflow">
                            <div class="pmo-pic">

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
                            </div>

                            <div class="card-body">
                                <div class="list-group">

                                    @foreach($lnb->comments as $coms)
                                        <a class="list-group-item media">
                                            <div class="pull-left">
                                                <img class="lgi-img" src="{{ route('user.com.profile',['user_id'=>$coms->User_id])}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lgi-heading">{{\App\User::find($coms->User_id)->first_name}} {{\App\User::find($coms->User_id)->last_name}}</div>
                                                <small class="lgi-text" style="white-space:normal">{{$coms->comment}}</small>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>


                            </div>
                        </div>

                        <div class="pm-body clearfix">
                            <ul class="tab-nav tn-justified">
                                <li ><a href="{{ route('mysme',['sme_id'=>$lnb->id])}}">Photos</a></li>
                                <li><a href="{{ route('advertiseApp',['sme_id'=>$lnb->id]) }}">Adverise Apps</a></li>
                                <li class="active"><a href="{{ route('vacancy',['sme_id'=>$lnb->id]) }}">Vacancy</a></li>
                                <li><a href="{{ route('message',['sme_id'=>$lnb->id]) }}">Message</a></li>
                                <li><a href="{{ route('lbn.info',['sme_id'=>$lnb->id])   }}">Info</a></li>
                            </ul>
                            <div><br><br>
                         <form action="{{ route('post.vacancy') }}" method="post">
                              <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-edit"></i></span>
                                        <div class="fg-line">
                                            <input name="job_title" type="text" class="form-control" placeholder="Job Title">
                                        </div>
                                    </div>

                                    <br>


                                  <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-case-check"></i></span>
                                        <div class="fg-line">
                                            <input name="job_desc" type="text" class="form-control" placeholder="Job Desc">
                                        </div>
                                    </div>

                                    <br>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-graduation-cap"></i></span>
                                        <div class="fg-line">

                         <textarea id="essaySec" name="job_req"  class="form-control" rows="5" placeholder="Education Requirement"></textarea>


                                        </div>
                                    </div><br>
                                  
                                <br><br>
                                  <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-format-list-numbered"></i></span>
                                        <div class="fg-line">

                                            <textarea name="exp_req"  class="form-control" rows="5" placeholder="Expreience Requirement"></textarea>

                                        </div>
                                    </div>
                                  <br><br>
                                        <button type="submit" class="btn btn-success btn-lg waves-effect">Post Job</button>
                                  <input type="hidden" value="{{ Session::token() }}" name="_token">
                                </div>
                         </form>
                                @if($vacs->count() == 0)
                                    <div class="card col-sm-4">
                                        <div class="card-header bgm-cyan" style="padding:9px">
                                            <!-- Please refer the Colors page in User Interface for more color classes -->
                                            <h2>You Didnt Post Any Vacancy Yet.
                                                <small >You can post one here.</small>
                                            </h2>
                                        </div>
                                    </div>
                                 @elseif($vacs->count() >= 1)

                                    @foreach($vacs as $vac)

                                        <div class="card col-sm-4">
                                            <div class="card-header bgm-cyan" style="padding:9px">
                                                <!-- Please refer the Colors page in User Interface for more color classes -->
                                                <h2>{{  $vac->job_title  }}
                                                    <small>{{  $vac->job_desc  }}</small>
                                                </h2>
                                            </div>
        <a href="{{ route('stop.vacancy',['sme_id'=>$vac->id])  }}" class="btn btn-danger waves-effect" style="float: right;">Stop</a>

                                        </div>

                                    @endforeach


                                  @endif


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
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
        <![endif]-->

        <script src="../js/app.min.js"></script>
    </body>
</html>
<!-- Localized -->