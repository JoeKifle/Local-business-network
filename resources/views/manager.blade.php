<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>

    <link rel="stylesheet" href="css/animate.min.css">
        <!-- Vendor CSS -->
     <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="css/lightgallery.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- modal related css` and js` -->

    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>


    <!-- CSS -->
        <link href="css/app_1.min.css" rel="stylesheet">
        <link href="css/app_2.min.css" rel="stylesheet">

    <script>

        function saveNotes(user_id){

            var note_cont = document.getElementById("note_cont").value;

             alert(note_cont) ;

            $.ajax({
                method: 'POST',
                url: url,
                data: { admin_id:user_id, note: note_cont,_token: token }


            }).done(function (msg) {

                alert(msg);
            });


        }

        function noteDisabled(noteId) {

            alert(document.getElementById("checkedOruncheched").value);


        }



    </script>

    </head>
    <body>

        <header id="header-alt" class="clearfix" data-ma-theme="lightblue"> <!-- Make sure to change both class and data-current-skin when switching sking manually -->
            <ul class="h-inner clearfix">
                <li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>

                <li class="hi-logo hidden-xs">
                    <a href="index.html">SME Manager</a>
                </li>

                <li class="pull-right">
                    <ul class="hi-menu">
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
                                    </div>
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
                                    </div>

                                    <a class="view-more" href="">View Previous</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a data-toggle="dropdown" href="">
                                <i class="him-icon zmdi zmdi-view-list-alt"></i>
                                <i class="him-counts">2</i>
                            </a>

                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href=""><i class="him-icon zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu dm-icon pull-right">
                                <li class="hidden-xs">
                                    <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                                </li>
                                <li>
                                    <a data-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                                </li>
                                <li>
                                    <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                                </li>
                                <li>
                                    <a href="setting.html"><i class="zmdi zmdi-settings"></i> Other Settings</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                             <button class="md-trigger btn btn-info waves-effect" data-modal="modal-7">Add Event</button>

                         </li>
                        <li>
                            <button class="btn btn-info waves-effect">Add Admin Account</button>
                        </li>
                    </ul>
                </li>
            </ul>

            <nav class="ha-menu">
                <ul>
                    <li class="active"><a href="{{ route('adminhome') }}">Home</a></li>
                    <li>
                        <a href="{{ route('smeapps') }}">SME APPLICATIONS</a>
                    </li>

                    <li><a href="{{ route('adapps') }}">AD APPLICATION</a></li>
                    <li><a href="{{ route('admin_messages') }}">Messages</a></li>


                    <li><a href="{{ route('events') }}">EVENTS</a></li>

                </ul>
            </nav>

        </header>

        <section id="main">
            <!-- Mobile Menu -->
          <!-- End Mobile Menu -->

            <section id="content" class="content-alt" style="max-width:1400px;">
                <div class="container">
                 <div class="col-md-8">
                    <div class="block-header">
                        <h2>Applications</h2>
                   </div>

                    <div class="mini-charts">
                        <div class="row">

                           <div class="col-xs-3">
                                    <div class="bgm-amber brd-2 p-15">
                                        <div class="c-white m-b-5">Total Application</div>
                                        <h2 class="m-0 c-white f-300">{{ $lbns->count()+ $smeads->count() }}</h2>
                                 </div>
                            </div>

                            <div class="col-xs-3">
                                    <div class="bgm-blue brd-2 p-15">
                                        <div class="c-white m-b-5">Total Accepted</div>
                                        <h2 class="m-0 c-white f-300">{{$lbns->count()}}</h2>
                                    </div>
                                </div>
                            <div class="col-xs-3">
                                    <div class="bgm-green brd-2 p-15">
                                        <div class="c-white m-b-5">Accepted Applications</div>
                                        <h2 class="m-0 c-white f-300">{{ $lbns->count()  }}</h2>
                                    </div>
                                </div>
                            <div class="col-xs-3">
                                    <div class="bgm-red brd-2 p-15">
                                        <div class="c-white m-b-5">Suspended Applications</div>
                                        <h2 class="m-0 c-white f-300">

                                            {{ $smeads->count()  }}

                                        </h2>
                                    </div>
                                </div>

                        </div>
                    </div><br><br>

                       <div class="block-header">
                        <h2>AD Applications</h2>
                   </div>

                    <div class="mini-charts">
                        <div class="row">

                            <div class="col-xs-3">
                                    <div class="bgm-blue brd-2 p-15">
                                        <div class="c-white m-b-5">Total Ads</div>
                                        <h2 class="m-0 c-white f-300">{{ $pendingpass->count() + $acceptedads->count()  }}</h2>
                                    </div>
                                </div>

                            <div class="col-xs-3">
                                    <div class="bgm-green brd-2 p-15">
                                        <div class="c-white m-b-5">Running Ads</div>
                                        <h2 class="m-0 c-white f-300">{{$acceptedads->count()}}</h2>
                                    </div>
                                </div>

                            <div class="col-xs-3">
                              <div class="bgm-red brd-2 p-15">
                                  <div class="c-white m-b-5">Stopped Ads</div>
                                  <h2 class="m-0 c-white f-300">{{   $pendingpass->count()   }}</h2>
                              </div>
                            </div>

                        </div>
                    </div><br><br>

                     <div class="block-header">
                         <h2>Events</h2>
                     </div>
                     <div class="mini-charts">
                         <div class="row">

                             <div class="col-xs-3">
                                 <div class="bgm-blue brd-2 p-15">
                                     <div class="c-white m-b-5">Total Events</div>
                                     <h2 class="m-0 c-white f-300">{{ $events_running->count() + $event_stopped->count()  }}</h2>
                                 </div>
                             </div>

                             <div class="col-xs-3">
                                 <div class="bgm-green brd-2 p-15">
                                     <div class="c-white m-b-5">Running Events</div>
                                     <h2 class="m-0 c-white f-300">{{$events_running->count()}}</h2>
                                 </div>
                             </div>

                             <div class="col-xs-3">
                                 <div class="bgm-red brd-2 p-15">
                                     <div class="c-white m-b-5">Stopped Events</div>
                                     <h2 class="m-0 c-white f-300">{{   $event_stopped->count()   }}</h2>
                                 </div>
                             </div>

                         </div>
                     </div><br><br>



                     <div class="card">
                        <div class="card-header">
                            <h2>Recent Applications
                            </h2>
                        </div>

                        <div class="card-body table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Business name</th>
                                    <th>Owner Name</th>
                                    <th>Phone Number</th>
                                    <th>App Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($smeads->count()>0)

                             @foreach($smeads as $sme)
                                <tr>
                                    <td>{{$sme->id}}</td>
                                    <td>{{$sme->Name}}</td>
                                    <td>{{$sme->user_fname}}</td>
                                    <td>{{$sme->phone}}</td>
                                    <td>{{$sme->created_at}}</td>
                                    <td>{{$sme->status}}</td>
                                </tr>
                               @endforeach

                              @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                <div class="col-md-4">

                    <div id="todo" class="card card-light">
                                <div class="card-header ch-alt">
                                    <h2>Todo Lists  <small>Add and manage your Todo Lists</small></h2>
                                </div>

                                <div class="card-body card-padding">
                                    <div class="t-add">
                                        <i class="ta-btn zmdi zmdi-plus" data-ma-action="todo-form-open"></i>

                                        <div class="ta-block">
                                            <textarea id="note_cont" placeholder="What you want to do..."></textarea>

                                            <div class="tab-actions">
                                                <a data-ma-action="todo-form-close" href="" class="c-red"><i class="zmdi zmdi-close"></i></a>
                                                <a onclick="saveNotes({{ \Illuminate\Support\Facades\Auth::user()->id  }})" data-ma-action="todo-form-close" href="" class="c-green"><i class="zmdi zmdi-check"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group">

                                       @foreach(\Illuminate\Support\Facades\Auth::user()->notes as $notet)

                                            <div class="list-group-item media">
                                                <div class="pull-right">
                                                    <ul class="actions actions-alt">
                                                        <li class="dropdown">
                                                            <a href="" data-toggle="dropdown">
                                                                <i class="zmdi zmdi-more-vert"></i>
                                                            </a>

                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="">Delete</a></li>
                                                                <li><a href="">Edit</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="media-body">
                                                    <div class="checkbox checkbox-light" onclick="noteDisabled({{$notet->id}})">
                                                        <label>
                                                            <input id="checkedOruncheched" type="checkbox" checked  >
                                                            <i class="input-helper"></i>
                                                            <span>
                                                            accept Business owners.
                                                        </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                    @endforeach

                                    </div>
                                </div>
                            </div>

                    </div>

                 </div>


                <div class="md-modal md-effect-7" id="modal-7">
                    <div class="md-content" style="background-color: #00bcd4">
                        <h3>Add Event</h3>

                        <div class="row">
                            <form action="{{ route('event.save') }}" method="post">

                            <div class="col-sm-12">

                                <div class="input-group form-group col-md-8" style="color: white;">

                                    <div class="dtp-container">

                                  <span style="color:white">
                                           <input name="ev_title" type='text' class="form-control "placeholder="Event Title" style="color: white">
                                    </span>
                                           <input name="ev_content" type='text' class="form-control "placeholder="Event content">

                                           <input name="ev_date" type='text' class="form-control date-picker"
                                               placeholder="Event Date">
                                     </div>
                                </div>

                            </div>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <button  class="btn btn-info waves-effect md-close" type="submit">Add Event</button>
                            </form>
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


        <!-- modal related js` -->



        <script src="js/classie.js"></script>
        <script src="js/modalEffects.js"></script>

        <script>
            var polyfilter_scriptpath = '/js/';
        </script>
        <script src="js/cssParser.js"></script>
        <script src="js/css-filters-polyfill.js"></script>


        <script>

            var token = '{{ Session::token() }}';
            var url = '{{ route('notes.save')  }}';


        </script>

        <!-- Javascript Libraries -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/waves.min.js"></script>
        <script src="js/bootstrap-growl.min.js"></script>
        <script src="js/sweetalert2.min.js"></script>
        <script src="js/lightgallery-all.min.js"></script>
        <script src="js/autosize.min.js"></script>
        <script src="js/fileinput.min.js"></script>
       <!-- date time picker resources -->
        <script src="js/moment.min.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js"></script>
        <![endif]-->

        <script src="js/app.min.js"></script>
    </body>
  </html>
<!-- Localized -->
