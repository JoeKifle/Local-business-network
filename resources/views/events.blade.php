<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>

        <!-- Vendor CSS -->
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/sweetalert2.min.css" rel="stylesheet">
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="css/jquery.dataTables.min.css" rel="stylesheet">

        <!-- CSS -->
        <link href="css/app_1.min.css" rel="stylesheet">
        <link href="css/app_2.min.css" rel="stylesheet">
        
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
                            <button class="btn btn-info waves-effect">Post Event</button>

                        </li>
                        <li>
                            <button class="btn btn-info waves-effect">Add Admin Account</button>
                        </li>

                    </ul>
                </li> 
            </ul>

            
            <nav class="ha-menu">
                <ul>
                    <li><a href="{{ route('adminhome') }}">Home</a></li>
                    <li>
                        <a href="{{ route('smeapps') }}">SME APPLICATIONS</a>
                    </li>
                   
                    <li ><a href="{{ route('adapps') }}">AD APPLICATION</a></li>
                    <li><a href="{{ route('admin_messages') }}">Messages</a></li>

                    <li class="active"><a href="{{ route('events') }}">EVENTS</a></li>
                   
               </ul>
            </nav>

        </header>
          
        <section id="main">
            <!-- Mobile Menu -->
            <aside id="sidebar" class="sidebar sidebar-alt c-overflow">
                <div class="s-profile">
                    <a href="" data-ma-action="profile-menu-toggle">
                        <div class="sp-pic">
                            <img src="img/demo/profile-pics/1.jpg" alt="">
                        </div>

                        <div class="sp-info">
                          {{ \Illuminate\Support\Facades\Auth::user()->first_name }}

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
                            <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </div>

                <ul class="main-menu">
                    <li class="active">
                        <a href="index.html"><i class="zmdi zmdi-home"></i> Home</a>
                    </li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-chart"></i> Dashboards</a>

                        <ul>
                            <li><a href="dashboards/analytics.html">Analytics</a></li>
                            <li><a href="dashboards/school.html">School</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Headers</a>

                        <ul>
                            <li><a href="textual-menu.html">Textual menu</a></li>
                            <li><a href="image-logo.html">Image logo</a></li>
                            <li><a href="top-mainmenu.html">Mainmenu on top</a></li>
                        </ul>
                    </li>
                    <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-widgets"></i> Widgets</a>

                        <ul>
                            <li><a href="widget-templates.html">Templates</a></li>
                            <li><a href="widgets.html">Widgets</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Tables</a>

                        <ul>
                            <li><a href="tables.html">Normal Tables</a></li>
                            <li><a href="data-tables.html">Data Tables</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                        <ul>
                            <li><a href="form-elements.html">Basic Form Elements</a></li>
                            <li><a href="form-components.html">Form Components</a></li>
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validations.html">Form Validation</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                        <ul>
                            <li><a href="colors.html">Colors</a></li>
                            <li><a href="animations.html">Animations</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="alerts.html">Alerts</a></li>
                            <li><a href="preloaders.html">Preloaders</a></li>
                            <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                            <li><a href="media.html">Media</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="other-components.html">Others</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-trending-up"></i>Charts</a>
                        <ul>
                            <li><a href="flot-charts.html">Flot Charts</a></li>
                            <li><a href="other-charts.html">Other Charts</a></li>
                        </ul>
                    </li>
                    <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                        <ul>
                            <li><a href="photos.html">Default</a></li>
                            <li><a href="photo-timeline.html">Timeline</a></li>
                        </ul>
                    </li>

                    <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                        <ul>
                            <li><a href="profile-about.html">Profile</a></li>
                            <li><a href="list-view.html">List View</a></li>
                            <li><a href="messages.html">Messages</a></li>
                            <li><a href="pricing-table.html">Pricing Table</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="wall.html">Wall</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="login.html">Login and Sign Up</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>

                        <ul>
                            <li><a href="form-elements.html">Level 2 link</a></li>
                            <li><a href="form-components.html">Another level 2 Link</a></li>
                            <li class="sub-menu">
                                <a href="" data-ma-action="submenu-toggle">I have children too</a>

                                <ul>
                                    <li><a href="">Level 3 link</a></li>
                                    <li><a href="">Another Level 3 link</a></li>
                                    <li><a href="">Third one</a></li>
                                </ul>
                            </li>
                            <li><a href="form-validations.html">One more 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://wrapbootstrap.com/theme/material-admin-responsive-angularjs-WB011H985"><i class="zmdi zmdi-money"></i> Buy this template</a>
                    </li>
                </ul>
            </aside>
            <!-- End Mobile Menu -->

            <section id="content" class="content-alt" style="max-width: 99%;">
                <div class="container">
                   <div class="block-header">
                        <h2>Applications</h2>
                   </div>
                    
                    <div class="col-md-8">
                   <div class="card">
                        <div class="table-responsive">
                    <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Event ID</th>

                                    <th>Event Title</th>
                                    <th>Event Date</th>
                                    <th>Event Desc</th>
                                    <th>Event status</th>
                                    <th>Stop</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Event ID</th>

                                    <th>Event Title</th>
                                    <th>Event Date</th>
                                    <th>Event Desc</th>
                                    <th>Event status</th>
                                    <th>Stop</th>
                                </tr>
                                </tfoot>
                                <tbody>


                                    @foreach($all_events as $evs)
                                        <tr>
                                        <td>{{ $evs->id }}</td>
                                        <td>{{ $evs->event_title }}</td>
                                        <td>{{ $evs->event_date }}</td>
                                        <td>{{ $evs->event_content }}</td>
                                        <td @if($evs->event_status == "stopped")
                                                style="color: red"
                                                @else
                                                style="color: green"
                                            @endif
                                         >{{ $evs->event_status }}</td>
                                             <td><ul class="actions">
                                                <li>
                                                    <a href="{{ route('event.stop',['ev_id'=>$evs->id])  }}">
                                                        <i class="zmdi zmdi-stop"></i>
                                                    </a>
                                                </li>
                                            </ul> </td>
                                        </tr>


                                    @endforeach
                                </tbody>
                            </table>
                       
                       
                       </div>
                    </div>

                    
                    </div>
                    <div class="col-md-4">
                     <div id="todo" class="card card-light">
                                <div class="card-header ch-alt">
                                    <h2>Todo Lists <small>Add and manage your Todo Lists</small></h2>
                                </div>

                                <div class="card-body card-padding">
                                    <div class="t-add">
                                        <i class="ta-btn zmdi zmdi-plus" data-ma-action="todo-form-open"></i>

                                        <div class="ta-block">
                                            <textarea placeholder="What you want to do..."></textarea>

                                            <div class="tab-actions">
                                                <a data-ma-action="todo-form-close" href="" class="c-red"><i class="zmdi zmdi-close"></i></a>
                                                <a data-ma-action="todo-form-close" href="" class="c-green"><i class="zmdi zmdi-check"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group">
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
                                                <div class="checkbox checkbox-light">
                                                    <label>
                                                        <input type="checkbox">
                                                        <i class="input-helper"></i>
                                                        <span>
                                                            accept Business owners.
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

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
                                                <div class="checkbox checkbox-light">
                                                    <label>
                                                        <input type="checkbox">
                                                        <i class="input-helper"></i>
                                                        <span>
                                                            send notification to all SME owners
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

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
                                                <div class="checkbox checkbox-light">
                                                    <label>
                                                        <input type="checkbox">
                                                        <i class="input-helper"></i>
                                                        <span>
                                                            send notification to all SME owners
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                   
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
                                                <div class="checkbox checkbox-light">
                                                    <label>
                                                        <input type="checkbox">
                                                        <i class="input-helper"></i>
                                                        <span>
                                                            send notification to all SME owners
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                   
                                        <div class="list-group-item media">
                                            <div class="pull-right">
                                                <ul class="actions actions-alt">
                                                    <li class="dropdown">
                                                        <a href="" data-toggle="dropdown">
                                                            <i class="zmdi zmdi-more-vert"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="">Delete</a></li>
                                                            <li><a href="">Archive</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="media-body">
                                                <div class="checkbox checkbox-light">
                                                    <label>
                                                        <input type="checkbox">
                                                        <i class="input-helper"></i>
                                                        <span>
                                                              Meeting on 11:00 pm
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-group-item media">
                                            <div class="pull-right">
                                                <ul class="actions actions-alt">
                                                    <li class="dropdown">
                                                        <a href="" data-toggle="dropdown">
                                                            <i class="zmdi zmdi-more-vert"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="">Delete</a></li>
                                                            <li><a href="">Archive</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="media-body">
                                                <div class="checkbox checkbox-light">
                                                    <label>
                                                        <input type="checkbox">
                                                        <i class="input-helper"></i>
                                                        <span>
                                                            organize exhibition
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
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
       <script src="js/jquery.dataTables.min.js"></script>
        <![endif]-->

        <script src="js/app.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#data-table-basic').DataTable();
            } );
        </script>
    </body>
  </html>
<!-- Localized -->