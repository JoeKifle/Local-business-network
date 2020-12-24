<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Local Business Network</title>

    <!-- modal css -->

    <!-- end modal css -->

    <!-- Vendor CSS -->
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/sweetalert2.min.css" rel="stylesheet">
    <link href="../css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="../css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="../css/lightgallery.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuYpJPqZrw8TPGjZuLSzOclIdbYIA3g-o"></script>

    <!-- CSS -->
    <link href="../css/app_1.min.css" rel="stylesheet">
    <link href="../css/app_2.min.css" rel="stylesheet">

    <script>

        var user_long;
        var user_lat;

        function submitPost(user_id,sme_id) {
            var com_com = "com-"+sme_id;
            var com = document.getElementById(com_com).value;

            $.ajax({
                method: 'POST',
                url: url,
                data: { body:com, com_user_id: user_id,com_sme_id:sme_id,_token: token }


            }).done(function (msg) {

                var divId = "curr_com"+sme_id;
                var com_small = "curr_com_cont"+sme_id;
                document.getElementById(divId).style.display='block';
                document.getElementById(com_small).innerHTML=com;

            });

        }

        function rate(rate_val,sme_id,user_id){

            $.ajax({
                method: 'POST',
                url: url2,
                data: { rate_val1:rate_val, sme_id1: sme_id,user_id1:user_id,_token: token }


            }).done(function (msg) {

                alert(msg);


                document.getElementById("ave_rate").innerHTML=msg;

            });
        }


        function showMapPic(long,lat,id){


            var altIm = "sme Location"
            var elem = "mapcont-2"+id;
            var latlon = long + "," +lat;
            var img_url = "https://maps.googleapis.com/maps/api/staticmap?zoom=15&size=600x200&maptype=roadmap&markers=color:red%7Clabel:C%7C"+latlon+"&key=AIzaSyDuYpJPqZrw8TPGjZuLSzOclIdbYIA3g-o";

            document.getElementById(elem).innerHTML = "<img src='"+img_url+"'>";
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

                    <a href="{{ route('mysme',['sme_id'=>$user->l_n_b_s_id])}}" class="btn btn-info waves-effect">My SME Manager</a>

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
        <div class="container container-alt">
            <div class="row wall">
                <div class="col-md-7">

                    @foreach($lnbs as $lnb)
                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('sme.detail',['sme_id'=>$lnb->id]) }}"><h2>{{ $lnb->LNB_name  }}</h2></a>

                            </div>

                            <div class="card-body">
                                <ul class="tab-nav tn-justified tn-icon hi-menu" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="col-sx-4" href="#tab-1{{$lnb->id}}" aria-controls="tab-1{{$lnb->id}}" role="tab"
                                           data-toggle="tab">
                                            <i class="zmdi zmdi-home icon-tab"></i>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a onclick="showMapPic({{$lnb->longitude}},{{$lnb->latitude}},{{$lnb->id}})" class="col-xs-4" href="#tab-2{{$lnb->id}}" aria-controls="tab-2{{$lnb->id}}" role="tab"
                                           data-toggle="tab">
                                            <i class="zmdi zmdi-pin icon-tab"></i>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a class="col-xs-4" href="#tab-3{{$lnb->id}}" aria-controls="tab-3{{$lnb->id}}" role="tab"
                                           data-toggle="tab">
                                            <i class="zmdi zmdi-star icon-tab"></i>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a class="col-xs-4" href="#tab-4{{$lnb->id}}" aria-controls="tab-4{{$lnb->id}}" role="tab"
                                           data-toggle="tab">
                                            <i class="zmdi zmdi-comments icon-tab"></i>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a class="col-xs-4" href="#tab-5{{$lnb->id}}" aria-controls="tab-4{{$lnb->id}}" role="tab"
                                           data-toggle="tab">

                                            <i class="him-icon zmdi zmdi-case-check"></i>
                                            <i class="him-counts" style="padding:9px 9px 9px 9px;font-size:12px;color:white;line-height: 10px;">{{ $lnb->jobs->count()  }}</i>



                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content p-20">
                                    <div role="tabpanel" class="tab-pane animated fadeIn in active" id="tab-1{{$lnb->id}}">
                                        <img src="{{ route('user.profile',['filename'=>"lnbprofilepic-".$lnb->User->first_name."-".$lnb->id.".jpg"])}}" class="img-responsive m-b-15" alt="" style="width:600px;height:120px;">
                                        {{ $lnb->lnb_quote}} {{$lnb->User->first_name}}
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-2{{$lnb->id}}">

                                        <div class="map-content" id="mapcont-2{{$lnb->id}}">

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-3{{$lnb->id}}">
                                        <div class="card-header text-center rating-list">
                                            <h2 id="ave_rate">Average Rating {{$lnb->rated_val}}</h2>
                                            <div class="rl-star">
                                                <i class="zmdi zmdi-star active"></i>
                                                <i class="zmdi zmdi-star active"></i>
                                                <i class="zmdi zmdi-star active"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                            </div>
                                            <br>
                                            <h2 style="cursor: hand">Rate Here</h2>


                                            <input  id=":5tars{{$lnb->id}}" type="radio" name="gender" onclick="rate(5,{{$lnb->id}},{{\Illuminate\Support\Facades\Auth::user()->id}})"  >
                                            <label for=":5tars{{$lnb->id}}">
                                                <div class="rl-star" style="cursor: pointer;">
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star active"></i>
                                                </div>
                                            </label><br>
                                            <input id=":4stars{{$lnb->id}}" type="radio" name="gender" onclick="rate(4,{{$lnb->id}},{{\Illuminate\Support\Facades\Auth::user()->id}})">
                                            <label for=":4stars{{$lnb->id}}" >
                                                <div class="rl-star" style="cursor: pointer;">
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star "></i>
                                                </div>
                                            </label><br>
                                            <input id=":3stars{{$lnb->id}}" type="radio" name="gender" onclick="rate(3,{{$lnb->id}},{{\Illuminate\Support\Facades\Auth::user()->id}})" >
                                            <label for=":3stars{{$lnb->id}}">
                                                <div class="rl-star" style="cursor: pointer;">
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star "></i>
                                                    <i class="zmdi zmdi-star "></i>
                                                </div>
                                            </label><br>
                                            <input id=":2stars{{$lnb->id}}" type="radio" name="gender" onclick="rate(2,{{$lnb->id}},{{\Illuminate\Support\Facades\Auth::user()->id}})" >
                                            <label for=":2stars{{$lnb->id}}">
                                                <div class="rl-star" style="cursor: pointer;">
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star "></i>
                                                    <i class="zmdi zmdi-star "></i>
                                                    <i class="zmdi zmdi-star "></i>
                                                </div>
                                            </label><br>
                                            <input id=":1stars{{$lnb->id}}" type="radio" name="gender" onclick="rate(1,{{$lnb->id}},{{\Illuminate\Support\Facades\Auth::user()->id}})" >
                                            <label for=":1stars{{$lnb->id}}">
                                                <div class="rl-star" style="cursor: pointer;">
                                                    <i class="zmdi zmdi-star active"></i>
                                                    <i class="zmdi zmdi-star "></i>
                                                    <i class="zmdi zmdi-star "></i>
                                                    <i class="zmdi zmdi-star "></i>
                                                    <i class="zmdi zmdi-star "></i>
                                                </div>
                                            </label>



                                        </div>

                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-4{{$lnb->id}}">
                                        <div class="list-group">
                                            @foreach($lnb->comments as $coms)
                                                <div class="list-group-item media" href="">
                                                    <div class="pull-left">
                                                        <img class="lgi-img" src=" {{ route('user.com.profile',['user_id'=>$coms->User_id])}} " alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="lgi-heading">{{\App\User::find($coms->User_id)->first_name}} {{\App\User::find($coms->User_id)->last_name}}</div>
                                                        <small class="lgi-text">{{ $coms->comment  }}</small>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="list-group-item media" href="" style="display: none" id="curr_com{{$lnb->id}}">
                                                <div class="pull-left">
                                                    <img class="lgi-img" src=" {{ route('user.com.profile',['user_id'=>\Illuminate\Support\Facades\Auth::user()->id])}} " alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lgi-heading">{{\Illuminate\Support\Facades\Auth::user()->first_name}}  {{\Illuminate\Support\Facades\Auth::user()->last_name}}</div>
                                                    <small class="lgi-text" id="curr_com_cont{{$lnb->id}}"></small>
                                                </div>
                                            </div>


                                            <div class="wi-comments">
                                                <!-- Comment form -->
                                                <div class="wic-form toggled">


                                                    <textarea placeholder="Write something..." id="com-{{$lnb->id}}" data-ma-action="wall-comment-open" name="com_cont"></textarea>
                                                    <input type="text" hidden value="{{$lnb->id}}" name="sme_id">
                                                    <input type="text" hidden value="{{\Illuminate\Support\Facades\Auth::user()->id}}" name="user_id">
                                                    <div class="wicf-actions text-right">
                                                        <input type="hidden" name="_token" value="{{ Session::token() }}">

                                                        <button  class="btn btn-sm btn-link waves-effect" data-ma-action="wall-comment-close">Cancel</button>
                                                        <button onclick="submitPost({{\Illuminate\Support\Facades\Auth::user()->id}},{{ $lnb->id }})" class="btn btn-sm btn-primary waves-effect" data-ma-action="wall-comment-close">Post</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-5{{$lnb->id}}">
                                        <div class="list-group">

                                            @if($lnb->jobs->count() == 0)
                                                <a class="list-group-item media">
                                                    <div class="pull-left">
                                                        <img  src="{{ route('job.profile')}}" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="lgi-heading">Not Hiring at the moment</div>
                                                    </div>
                                                </a>
                                            @else

                                                @foreach($lnb->jobs as $job)

                                                    <a class="list-group-item media" href="{{ route('job.info',['job_id'=>$job->id]) }}">
                                                        <div class="pull-left">
                                                            <img  src="{{ route('job.profile')}}" alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="lgi-heading">{{$job->job_title}}</div>
                                                            <small class="lgi-text">{{ $job->job_desc  }}</small>
                                                        </div>
                                                    </a>

                                                @endforeach

                                            @endif

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div id="applyModal">
                        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
                        <div class="container" style="background-color:#f5f5f5!important;">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">

                                <div class="block-header">

                                </div>

                                <div class="card">
                                    <form action="{{ route('applications.submit')  }}" method="post" enctype="multipart/form-data">
                                        <div class="card-header">
                                            <h2>PLEASE FILL THE FOLLOWING FORM AND WE WILL GET BACK TO YOU SOON
                                                <small>SME FOR OUR Renaissance
                                                </small>
                                            </h2>
                                        </div>

                                        <div class="card-body card-padding">
                                            <form role="form">

                                                <div class="form-group fg-line select">
                                                    <label for="businessCat">Select Business Category</label>
                                                    <select name="business_cat" class="form-control" id="businessCat">
                                                        <option>Select an Option</option>
                                                        @foreach($subcats as $subcat)
                                                            <option value="{{ $subcat->sub_cat }}">{{ $subcat->sub_cat }}</option>
                                                        @endforeach
                                                    </select>

                                                </div><br>

                                                <div class="form-group fg-line">
                                                    <label for="exampleInputEmail1">Enter Business Name</label>
                                                    <input type="text" name="business_name" class="form-control input-sm" id="exampleInputEmail1"
                                                           placeholder="Enter title goes here..">
                                                </div><br>

                                                <div class="form-group fg-line">
                                                    <label for="exampleInputEmail1">Enter Business Motto</label>
                                                    <input type="text" name="business_motto" class="form-control input-sm" id="exampleInputEmail1"
                                                           placeholder="Enter title goes here..">
                                                </div><br>

                                                <div  class="form-group fg-line select">
                                                    <label for="essaySec">Essay</label>
                                                    <textarea id="essaySec" name="business_essay"  class="form-control" rows="5" placeholder="Please write an essay about your self and business Idea. Shouldnt be more than 200 words"></textarea>
                                                </div><br>

                                                <div class="form-group fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                                    <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Upload Legal ID</span>
                                        <input type="file" name="legal_Id">
                                    </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                                <div class="form-group fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                                    <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Upload Letter</span>
                                        <input type="file" name="business_letter">
                                    </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-success btn-sm m-t-10" style="float:right">Submit </button>
                                                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                                                    <button class="btn btn-danger btn-sm m-t-10 close-applyModal" style="float:right; margin-right: 7px;" >cancel</button>

                                                </div>
                                            </form>
                                        </div>

                                    </form>


                                </div>


                            </div>
                            <div class="col-md-2">

                            </div>
                        </div>

                        <br>>   <p style="align-content: center;text-align: center">&copy; 2016 ALL RIGHTS RESERVED</p>
                    </div>


                </div>

                <div class="col-md-5 hidden-sm hidden-xs">

                    <div class="card">
                        <div class="card-header bgm-bluegray" style="padding:12px 30px">
                            <h2>Yonatan Hand-Made scarfs
                                <small>checkout our new men and female styles</small>
                            </h2>

                            <ul class="actions actions-alt">
                                <li class="dropdown">
                                    <a href="" data-toggle="dropdown" aria-expanded="false">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="">Dont show This ad</a>
                                        </li>
                                        <li>
                                            <a href="">Report this Ad</a>
                                        </li>
                                        <li>
                                            <a href="">This ad was appropriate</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body card-padding" style="6px 6px">
                            <img src="img/headers/sm/10.png" class="img-responsive m-b-15" alt="">
                            Enjoy our new 50% Discount

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bgm-bluegray" style="padding:6px 7px">
                            <h2>Yonatan Hand-Made scarfs
                                <small>checkout our new men and female styles</small>
                            </h2>

                            <ul class="actions actions-alt">
                                <li class="dropdown">
                                    <a href="" data-toggle="dropdown" aria-expanded="false">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="">Dont show This ad</a>
                                        </li>
                                        <li>
                                            <a href="">Report this Ad</a>
                                        </li>
                                        <li>
                                            <a href="">This ad was appropriate</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body card-padding" style="6px 6px">
                            <img src="img/headers/sm/10.png" class="img-responsive m-b-15" alt="">
                            Enjoy 50% Discount

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>Upcoming Events <small>All Events are near you</small></h2>
                        </div>

                        <div class="card-body">
                            <div class="list-group">
                                <div class="list-group-item media">
                                    <div class="pull-left">
                                        <div class="event-date bgm-green">
                                            <span class="ed-day">24</span>
                                            <span class="ed-month-time">Jul 05:00</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Addis Ababa,Arada Subsity Exhibition</div>
                                        <small class="lgi-text">All are invited!</small>
                                    </div>
                                </div>

                                <div class="list-group-item media">
                                    <div class="pull-left">
                                        <div class="event-date bgm-green">
                                            <span class="ed-day">30</span>
                                            <span class="ed-month-time">Jul 14:15</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Fasika Expo 2017</div>
                                        <small class="lgi-text">Great place to meet new people</small>
                                    </div>
                                </div>

                                <div class="list-group-item media">
                                    <div class="pull-left">
                                        <div class="event-date bgm-green">
                                            <span class="ed-day">02</span>
                                            <span class="ed-month-time">Aug 08:30</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Grand Expo 2018</div>
                                        <small class="lgi-text">New products are shown off by various vendors</small>
                                    </div>
                                </div>

                                <div class="list-group-item media">
                                    <div class="pull-left">
                                        <div class="event-date bgm-green">
                                            <span class="ed-day">13</span>
                                            <span class="ed-month-time">Aug 09:00</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Joey Fashion Night</div>
                                        <small class="lgi-text"> By Desiener yohannes kifle, sheraton Hotel, All are invited.</small>
                                    </div>
                                </div>

                                <div class="list-group-item media">
                                    <div class="pull-left">
                                        <div class="event-date bgm-green">
                                            <span class="ed-day">15</span>
                                            <span class="ed-month-time">Aug 14:10</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="lgi-heading">Arada Subsity Exhibition</div>
                                        <small class="lgi-text">come and visit us</small>
                                    </div>
                                </div>

                                <a class="view-more" href="">View All</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <ul class="pagination lg-pagination">
        <li>
            <a href="" aria-label="Previous">
                <i class="zmdi zmdi-chevron-left"></i>
            </a>
        </li>
        <li class="active"><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li><a href="">5</a></li>
        <li>
            <a href="" aria-label="Next">
                <i class="zmdi zmdi-chevron-right"></i>
            </a>
        </li>
    </ul>
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

<!-- modals -->
<script src="../js/jquery.min.js"></script>
<script src="../js/animatedModal.min.js"></script>
<script>


    $("#apply").animatedModal(

        {
            modalTarget:'applyModal',
        }
    );

</script>

<script>

    var token = '{{ Session::token() }}';
    var url = '{{ route('post')  }}';
    var url2 = '{{ route('rate')}}';


</script>

<!-- modal end -->


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
