<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dairy Farm Management System</title>

    <!-- Bootstrap -->
    <link href="{{ url('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>  Dairy Farm</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ url('images/manager_profile_picture/'.session('image')) }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{session('name')}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li class="active"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li><a><i class="fa fa-list-alt"></i> Information <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dairyfarm/staff">Staff</a></li>
                      <li><a href="/home/cow_info">Cow</a></li>
                      <li><a href="/home/new_born_cow">New Born Cow</a></li>
                      <li><a href="/home/shift_details">Working Shifts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Monitoring <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/home/vaccinated_cow_info">Vaccine</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Storage <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/home/cow_feeds">Feeds</a></li>
                      <li><a href="#">Produces Items</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Sale <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/home/sold_dairy_items">Dairy Items Sales Report</a></li>
                      <li><a href="/home/sold_cows">Sold Cows Report</a></li>
                    </ul>
                  </li>
                  <li class="">
                      <a href="/home/milk_collection"><i class="fa fa-shopping-cart"></i> Milk Collection </a>
                  </li>
                  <li class="">
                    <a href="profile"><i class="fa fa-user"></i> Profile </a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="{{ url('home/profile') }}" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{ url('images/user.png') }}" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>                  
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row" style="display: inline-block;">
          <div class="tile_count">
            <div class="col-md-3  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Staff</span>
              <div class="count">{{count($users)}}</div>
            </div>
            <div class="col-md-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-paw"></i> Total Cow</span>
              <div class="count green">{{count($cows)}}</div>
            </div>
            <div class="col-md-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-paw"></i> New Born Cow</span>
              <div class="count green">{{count($new_born_cows)}}</div>
            </div>
            <div class="col-md-3  tile_stats_count">
              <span class="count_top"><i class="fa fa-filter"></i> Total Collected Milk</span>
              <div class="count">{{$total_milking_amount}}</div>
            </div>
          </div>
        </div>
        <div class="row">
           <div id="chartContainer" style="height: 390px; width: 100%;"></div>
        </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Dairy Farm Management System - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
<script src="{{ url('jquery.min.js') }}"></script>

    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>