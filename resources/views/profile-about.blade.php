<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$user->first_name}}`s About Page</title>

    <!-- Vendor CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="css/lightgallery.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/app_1.min.css" rel="stylesheet">
    <link href="css/app_2.min.css" rel="stylesheet">
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
                <a href="

        {{

           route('smehome',compact(['user' => \Illuminate\Support\Facades\Auth::user()]) )

        }}

           ">Local Business Network</a>
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
                    <a href="" data-ma-action="profile-menu-toggle" style="background-color: #f3f3f3;">
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
                            {{ \Illuminate\Support\Facades\Auth::user()->first_name.' '.\Illuminate\Support\Facades\Auth::user()->last_name  }}

                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </a>

                    <ul class="main-menu">
                        <li>
                            <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href="profile-about.html"><i class="zmdi zmdi-settings"></i> Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
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
                                    <li><a href="index.html">{{ $subcat->sub_cat  }}</a></li>
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
   </aside>

            <section id="content">
                <div class="container container-alt">

                    <div class="block-header">
                        <h2> {{ $user->first_name}} {{$user->last_name}}

                            <small>{{$user->job}}</small>
                        </h2>

                    </div>

                    <div class="card" id="profile-main">
                        <div class="pm-overview c-overflow">

                            <div class="pmo-pic">
                                <div class="p-relative">
                                    <a href="">
                                        <img class="img-responsive" src="
                                       @if(\Illuminate\Support\Facades\Storage::disk('local')->has($user_profile))
                                        {{ route('user.profile',['filename'=>$user_profile])}}
                                        @else
                                        {{ route('user.profile',['filename'=>'dump_profile.jpg'])}}
                                        @endif " alt="">
                                    </a>
                                 </div><br>
                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                    <form action="{{ route('upd.profpic')  }}" method="post" enctype="multipart/form-data">
                                    <span class="btn btn-primary btn-file m-r-10" style="padding-bottom: 3px;">
                                            <span class="fileinput-new waves-effect" >Change</span>
                                            <span class="fileinput-exists"></span>
                                            <input type="file" name="prof_pic">
                                        </span>
                                    <span class="fileinput-filename"></span>
                                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                                        <input type="hidden" value="{{ Session::token() }}" name="_token">

                                        <input type="submit" class="btn btn-success" name="upload" style="float: right">
                                    </form>
                                </div>

                            </div>

                            <div class="pmo-block pmo-contact hidden-xs">
                                <b>Contact</b>

                                <ul>
                                    <li><i class="zmdi zmdi-phone"></i> {{ \Illuminate\Support\Facades\Auth::user()->phone }}</li>
                                    <li><i class="zmdi zmdi-email"></i>{{ \Illuminate\Support\Facades\Auth::user()->email  }}</li>
                                    <li><i class="zmdi zmdi-facebook-box"></i> N/A</li>
                                    <li><i class="zmdi zmdi-twitter"></i> @joekifle (twitter.com/yohnnes.kifle)</li>
                                    <li>
                                        <i class="zmdi zmdi-pin"></i>
                                        <address class="m-b-0 ng-binding">
                                            {{\Illuminate\Support\Facades\Auth::user()->address}}<br>
                                            {{\Illuminate\Support\Facades\Auth::user()->city}},<br>
                                            Ethiopia
                                        </address>
                                    </li>
                                </ul>
                            </div>

                         </div>

                        <div class="pm-body ">
                            <ul class="tab-nav tn-justified">
                                <li class="active"><a href="profile-about.html">About</a></li>
                            </ul>


                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-account m-r-10"></i> Basic Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
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
                                            <dt>Full Name</dt>
                                            <dd>{{ \Illuminate\Support\Facades\Auth::user()->first_name.' '.\Illuminate\Support\Facades\Auth::user()->last_name  }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Gender</dt>
                                            <dd>{{ \Illuminate\Support\Facades\Auth::user()->gender   }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Birthday</dt>
                                            <dd>FEB 17, 1995</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Martial Status</dt>
                                            <dd>Single</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">


                                 <form action="{{ route('account.update')  }}" method="post">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">First Name</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input name="fname" type="text" class="form-control"
                                                           placeholder="Yohannes">
                                                </div>

                                            </dd>
                                        </dl>
                                         <dl class="dl-horizontal">
                                             <dt class="p-t-10">Last Name</dt>
                                             <dd>
                                                 <div class="fg-line">
                                                     <input name="last_name" type="text" class="form-control"
                                                            placeholder="Abebe">
                                                 </div>

                                             </dd>
                                         </dl>

                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Birthday</dt>
                                            <dd>
                                                <div class="dtp-container dropdown fg-line">
                                                    <input name="bday" type='text' class="form-control date-picker"
                                                           data-toggle="dropdown" placeholder="mm/dd/yyyy">
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="m-t-30">
                                            <input type="hidden" value="{{ Session::token() }}" name="_token">
                                             <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                            <button data-ma-action="profile-edit-cancel" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                     </form>
                                    </div>
                                </div>
                            </div>

                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-phone m-r-10"></i> Contact Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
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
                                <form class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>Mobile Phone</dt>
                                            <dd>{{ \Illuminate\Support\Facades\Auth::user()->phone }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Email Address</dt>
                                            <dd>{{ \Illuminate\Support\Facades\Auth::user()->email }}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Twitter</dt>
                                            <dd>N/A</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Skype</dt>
                                            <dd>N/A</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">

                                       <form action="addetail.blade.php" method="post">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Mobile Phone</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" name="phone" class="form-control"
                                                           placeholder="eg. 0971 1234567">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Email Address</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input name="email" type="email" class="form-control"
                                                           placeholder="eg. john.@gmail.com">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Address</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" name="location" class="form-control" placeholder="King james St.">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Job</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control"
                                                           placeholder="CEO">
                                                </div>
                                            </dd>
                                        </dl>

                                        <div class="m-t-30">
                                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                            <button data-ma-action="profile-edit-cancel" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                </form>
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
    
    
        <!-- Javascript Libraries -->
          <script src="js/jquery.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/waves.min.js"></script>
          <script src="js/bootstrap-growl.min.js"></script>
          <script src="js/sweetalert2.min.js"></script>
          <script src="js/lightgallery-all.min.js"></script>
          <script src="js/autosize.min.js"></script>
         <script src="js/fileinput.min.js"></script>


          <!-- Placeholder for IE9 -->
          <!--[if IE 9 ]>
          <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
          <![endif]-->

          <script src="js/app.min.js"></script>
    </body>
</html>
<!-- Localized -->