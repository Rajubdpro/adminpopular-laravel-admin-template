
<?php use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="AdminPopular" />
    <!-- Description -->
    <meta name="description" content="AdminPopular : Bootstrap 4 Responsive Admnin Template" />
    <!-- Favicon icon  -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('contents/backend')}}/images/favicon.png" />
    <!-- Page title -->
    <title>{{__('Admin Starter - CodePopular')}}</title>
    <!-- Mobile specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->

    <!-- Load Page script here -->

    @stack('page-style')

    <!-- Template assets CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/backend')}}/css/assets.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/backend')}}/css/dashboard.css" />
{{--    <link rel="stylesheet" type="text/css" href="{{asset('contents/backend')}}/css/dashboard-light.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('contents/backend')}}/css/custom.css">
</head>

<body class="sidebar-mini">
    <div class="loader"></div>
    <!-- header start -->
    <header class="adminpopular-header">
        <div class="adminpopular-header-wrapper">

            <!--logo start -->
            <div class="adminpopular-logo-box">
                <div>
                    <a href="{{route('home')}}" class="adminpopular-logo">{{Helpers::getAppSetitngs()->app_name}}</a>
                </div>
            </div>


            <!--sidebar menu toggler start -->
            <div class="adminpopular-toggle-sidebar cp-wave-effect">
                <i class="ti-menu adminpopular-close-icon"></i>
            </div>
            <!--sidebar menu toggler end -->

            <!--logo end -->
            <div class="adminpopular-header-right adminpopular-with-seperator">
                <!-- header right menu start -->
                <ul class="adminpopular-header-navigation">
                    <li>
                        <a href="#" class="adminpopular-material-button adminpopular-search-toggle"><i
                                class="fa fa-search"></i></a>
                    </li>
                    <li>
                        <a href="#" class="adminpopular-material-button adminpopular-submenu-toggle">
                            <i class="fa fa-comments"></i>
                            <span class="button__badge">82</span>
                        </a>
                        <div class="adminpopular-header-submenu noti-menu">
                            <div class="adminpopular-notify-header">
                                <span class="adminpopular-notify-text-top">9 New</span>
                                <span class="adminpopular-notify-text">User Notifications</span>
                            </div>
                            <div class="noti-box-list">
                                <ul>
                                    <li>
                                        <span class="notification-icon dashbg-gray">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <span class="notification-text"> <span>Sneha Jogi</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 02:14</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-yellow">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                        <span class="notification-text"> <a href="#">Your order is placed</a> sent you a
                                            message. </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 7 Min</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-red">
                                            <i class="fa fa-bullhorn"></i>
                                        </span>
                                        <span class="notification-text"> <span>Your item is shipped</span> sent you a
                                            message. </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 2 May</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-green">
                                            <i class="fa fa-comments-o"></i>
                                        </span>
                                        <span class="notification-text"> <a href="#">Sneha Jogi</a> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 14 July</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-primary">
                                            <i class="fa fa-file-word-o"></i>
                                        </span>
                                        <span class="notification-text"> <span>Sneha Jogi</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 15 Min</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="adminpopular-material-button adminpopular-submenu-toggle">
                            <i class="fa fa-bell"></i>
                            <span class="button__badge">2</span>
                        </a>
                        <div class="adminpopular-header-submenu noti-menu">
                            <div class="adminpopular-notify-header">
                                <span class="adminpopular-notify-text-top">9 New</span>
                                <span class="adminpopular-notify-text">User Notifications</span>
                            </div>
                            <div class="noti-box-list">
                                <ul>
                                    <li>
                                        <span class="notification-icon dashbg-gray">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <span class="notification-text"> <span>Sneha Jogi</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 02:14</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-yellow">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                        <span class="notification-text"> <a href="#">Your order is placed</a> sent you a
                                            message. </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 7 Min</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-red">
                                            <i class="fa fa-bullhorn"></i>
                                        </span>
                                        <span class="notification-text"> <span>Your item is shipped</span> sent you a
                                            message. </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 2 May</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-green">
                                            <i class="fa fa-comments-o"></i>
                                        </span>
                                        <span class="notification-text"> <a href="#">Sneha Jogi</a> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 14 July</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-primary">
                                            <i class="fa fa-file-word-o"></i>
                                        </span>
                                        <span class="notification-text"> <span>Sneha Jogi</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 15 Min</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="adminpopular-material-button adminpopular-submenu-toggle">
                            <span class="adminpopular-user-avatar"><img alt="" src="{{asset('contents/backend')}}/images/pic.jpg" width="32" height="32" /></span>
                        </a>
                        <div class="adminpopular-header-submenu">
                            <ul>
                                <li><a href="page-user.html">My profile</a></li>
                                <li><a href="mailbox.html">Activity</a></li>
                                <li><a href="chat.html">Messages</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{__('Logout')}}<i class="fa fa-sign-out fa-lg"></i> </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- header right menu end -->
            </div>
            <!--header search panel start -->
            <div class="adminpopular-search-bar">
                <form class="adminpopular-search-form">
                    <div class="adminpopular-search-input-wrapper">
                        <input type="text" name="qq" placeholder="search something..."
                            class="adminpopular-search-input" />
                        <button type="submit" name="search" class="adminpopular-search-submit"><i
                                class="ti-arrow-right"></i></button>
                    </div>
                    <span class="adminpopular-search-close adminpopular-search-toggle">
                        <i class="ti-close"></i>
                    </span>
                </form>
            </div>
            <!--header search panel end -->
        </div>
    </header>
    <!-- header end -->
    <!-- Left sidebar menu start -->
    <aside class="adminpopular-sidebar">
        <div class="sidebar-user">
            <img class="sidebar-user-avatar" src="{{asset('contents/backend')}}/images/pic.jpg" alt="User Image">
            <div>
                <p class="sidebar-user-name"> @if(Auth::check())
                  {{Auth::user()->name}}
                  @endif</p>
                <p class="sidebar-user-designation">Frontend Developer</p>
            </div>
        </div>
        <ul class="adminpopular-menu">

             <?php use App\Models\user;?>
             <?php $loginid = Auth::id();
              $get_user = user::find($loginid);

              if(isset($get_user->role)){
              $get_menu_option = $get_user->role->show_option;

              $stringToArray = explode(',', $get_menu_option);

              ?>

            @if(in_array('dashboard', $stringToArray))
            <li>
                <a class="nav-item {{ (request()->is('home')) ? 'active' : '' }}" href="{{route('home')}}">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            @endif

            @if(in_array('customer-portal', $stringToArray))
            <li>
                <a class="nav-item {{ (request()->is('customer-portal')) ? 'active' : '' }}" href="{{route('customer-portal.index')}}">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <span class="nav-label">Customer Portal</span>
                </a>
            </li>
            @endif

            @if(in_array('user', $stringToArray))
            <li>
                <a class="nav-item {{ (request()->is('users')) ? 'active' : '' }}" href="{{route('users.index')}}">
                    <i class="nav-icon fa fa-user"></i>
                    <span class="nav-label">User</span>
                </a>
            </li>
            @endif

            @if(in_array('page', $stringToArray))
            <li>
                <a class="nav-item {{ (request()->is('admin_page')) ? 'active' : '' }}" href="{{route('admin_page.index')}}">
                    <i class="nav-icon fa fa-book"></i>
                    <span class="nav-label">Pages</span>
                </a>
            </li>
            @endif

            @if(in_array('newsletter', $stringToArray))
            <li>
                <a class="nav-item {{ (request()->is('newsletter')) ? 'active' : '' }}" href="{{route('newsletter.index')}}">
                    <i class="nav-icon fa fa-envelope"></i>
                    <span class="nav-label">Newsletter</span>
                </a>
            </li>
            @endif

            @if(in_array('settings', $stringToArray))
            <li>
                <a class="nav-item {{ (request()->is('admin_settings')) ? 'active' : '' }}" href="{{route('admin_settings.index')}}">
                    <i class="nav-icon fa fa-cog"></i>
                    <span class="nav-label">Settings</span>
                </a>
            </li>
            @endif

            <?php  } ?>
        </ul>
    </aside>
    <!-- Left sidebar menu end -->
    <!--Main container start -->
    <main class="adminpopular-wrapper">
        <div class="container-fluid">
           @yield('contents')
        </div>

    </main>
    <!-- Jquery javascript library -->
    <script src="{{asset('contents/backend')}}/js/jquery.min.js"></script>
    <!-- Bootstrap bundle javascript -->
    <script src="{{asset('contents/backend')}}/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scrollbar javascript -->
    <script src="{{asset('contents/backend')}}/vendors/scroll/scrollbar.min.js"></script>
    <!-- Waypoints javascript -->
    <script src="{{asset('contents/backend')}}/js/waypoints.min.js"></script>
    <!-- Chart javascript -->
    <script src="{{asset('contents/backend')}}/js/chart.js"></script>
    <!-- Jquery counterup javascript -->
    <script src="{{asset('contents/backend')}}/js/jquery.counterup.min.js"></script>
    @stack('page-script')
    <!-- Custom script -->
    <script src="{{asset('contents/backend')}}/js/functions.js"></script>
    <script src="{{asset('contents/backend')}}/js/admin.js"></script>
    <script type="text/javascript">
      "use strict";
    function adminPopularChart(response){

     var data = {
              labels:response.months,
              datasets: [{
                  label: "My Second dataset",
                  fillColor: "rgba(151,187,205,0.2)",
                  strokeColor: "rgba(151,187,205,1)",
                  pointColor: "rgba(151,187,205,1)",
                  pointStrokeColor: "#fff",
                  pointHighlightFill: "#fff",
                  pointHighlightStroke: "rgba(151,187,205,1)",
                  data:response.chart_count_data
              }]
          };
          var pdata = [{
              value: 300,
              color: "#46BFBD",
              highlight: "#5AD3D1",
              label: "Complete"
          }, {
              value: 50,
              color: "#F7464A",
              highlight: "#FF5A5E",
              label: "In-Progress"
          }]

          var ctxl = $("#lineChartDemo").get(0).getContext("2d");
          var lineChart = new Chart(ctxl).Line(data);

          var ctxp = $("#pieChartDemo").get(0).getContext("2d");
          var pieChart = new Chart(ctxp).Pie(pdata);

      }


      if (location.hostname === "localhost" || location.hostname === "127.0.0.1"){
          var foldername = window.location.pathname.split('/')[1];
          var urlPath =  'http://' + window.location.hostname + '/'+foldername+'/get_chartinfo';
      }else{
          var foldername = window.location.pathname.split('/')[1];
          var urlPath =  'https://' + window.location.hostname + '/'+foldername+'/get_chartinfo';
      }
        // edit
        var request = $.ajax( {
            url:urlPath,
            type:'GET',
            dataType:'json',
            success:function(response){
              console.log(response.months);
              adminPopularChart(response);
            }
        });

      adminPopularChart();
    </script>
</body>

</html>










