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
                    @if($user->owns_SME == 0)
                        <a id="apply" href="#applyModal" style="color:white!important;">Apply as SME</a>
                    @else
                        <a href="{{ route('mysme',['sme_id'=>$lbn->id]) }}" class="btn btn-info waves-effect">My SME Manager</a>
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
                        <h2>{{ $lbn->LNB_name  }}
                            <small>{{ $lbn->lnb_quote }}</small>
                        </h2>

                    </div>

                    <div class="card" id="profile-main">
                        <div class="pm-overview c-overflow">
                            <div class="pmo-pic">

                                <div class="card-header text-center rating-list">
                                    <h2>Average Rating {{$lbn->rated_val}}</h2>
                                    <div class="rl-star">
                                        @if($lbn->rated_val >=1 && $lbn->rated_val<2)
                                            <i class="zmdi zmdi-star active"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                        @elseif($lbn->rated_val>=2 && $lbn->rated_val<3)
                                            <i class="zmdi zmdi-star active"></i>
                                            <i class="zmdi zmdi-star active"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                        @elseif($lbn->rated_val>=3 && $lbn->rated_val<4)
                                            <i class="zmdi zmdi-star active"></i>
                                            <i class="zmdi zmdi-star active"></i>
                                            <i class="zmdi zmdi-star active"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                        @elseif($lbn->rated_val>=4 && $lbn->rated_val<5)
                                            <i class="zmdi zmdi-star active"></i>
                                            <i class="zmdi zmdi-star active"></i>
                                            <i class="zmdi zmdi-star active"></i>
                                            <i class="zmdi zmdi-star active"></i>
                                            <i class="zmdi zmdi-star"></i>
                                        @elseif($lbn->rated_val == 5)
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

                                    @foreach($lbn->comments as $coms)
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
                                <li><a href="{{ route('mysme',['sme_id'=>$lbn->id])}}">Photos</a></li>
                                <li><a href="{{ route('advertiseApp',['sme_id'=>$lbn->id]) }}">Adverise Apps</a></li>
                                <li><a href="{{ route('vacancy',['sme_id'=>$lbn->id]) }}">Vacancy</a></li>
                                <li><a href="{{ route('message',['sme_id'=>$lbn->id]) }}">Message</a></li>
                                <li class="active"><a href="{{ route('lbn.info',['sme_id'=>$lbn->id])   }}">Info</a></li>
                            </ul>
                            <div><br><br>

                            <!-- content goes here -->
                                <div class="pmb-block">
                                    <div class="pmbb-header">
                                        <h2><i class="zmdi zmdi-account m-r-10"></i> {{ $lbn->LNB_name  }} Information</h2>

                                        <ul class="actions">
                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a data-ma-action="profile-edit" href="">Edit</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pmbb-body p-l-30">
                                        <div class="pmbb-view">
                                            <dl class="dl-horizontal">
                                                <dt>LBN TITLE</dt>
                                                <dd>{{ $lbn->LNB_name  }}</dd>
                                            </dl>
                                            <dl class="dl-horizontal">
                                                <dt>QUOTE</dt>
                                                <dd>{{ $lbn->lnb_quote }}</dd>
                                            </dl>
                                            <dl class="dl-horizontal">
                                                <dt>Location</dt>
                                                <dd>{{ $lbn->longitude.'.'.$lbn->latitude  }}</dd>
                                            </dl>
                                        </div>

                                        <div class="pmbb-edit">

                                            <form action="{{ route('info.save') }}" method="post">


                                            <dl class="dl-horizontal">
                                                <dt class="p-t-10">LBN TITLE</dt>
                                                <dd>
                                                    <div class="fg-line">
                                                        <input name="lnb_name" type="text" class="form-control" placeholder="{{ $lbn->LNB_name  }}">
                                                    </div>

                                                </dd>
                                            </dl>
                                            <dl class="dl-horizontal">
                                                <dt class="p-t-10">QUOTE</dt>
                                                <dd>
                                                    <div class="fg-line">
                                                        <input name="lnb_quote" type="text" class="form-control" placeholder="{{ $lbn->lnb_quote  }}">
                                                    </div>
                                                </dd>
                                            </dl>
                                            <dl class="dl-horizontal">
                                                <dt class="p-t-10">LOCATION</dt>
                                                <dd>
                                                    <div class="dtp-container dropdown fg-line">
                                                        {{ $lbn->longitude.'.'.$lbn->latitude  }}<
                                                    </div>
                                                </dd>
                                            </dl>

                                            <div class="m-t-30">
                                                <input type="hidden" name="SME_id" value="{{ $lbn->id  }}">
                                                <input type="hidden" value="{{ Session::token() }}" name="_token">
                                                <button type="submit" class="btn btn-primary btn-sm waves-effect">Save</button>
                                                <button data-ma-action="profile-edit-cancel" class="btn btn-link btn-sm waves-effect">Cancel</button>

                                            </div>

                                          </form>

                                        </div>
                                    </div>
                                </div>


                             <!-- content goes here also and not only the name the password also should be singular
                                 after you signedup the name you should get into the title that says ther are firends
                                 and girls should be able to register the name and the sample together with  -->



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