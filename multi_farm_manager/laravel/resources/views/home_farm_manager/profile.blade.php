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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="{{ url('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('/build/css/custom.min.css') }}" rel="stylesheet">
     
    <link href="{{ url('/css/profile.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard" class="site_title"><i class="fa fa-paw"></i> <span>  Dairy Farm</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ url('images/user.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li class=""><a href="dashboard"><i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li><a><i class="fa fa-list-alt"></i> Information <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="staffinfo.php">Staff</a></li>
                      <li><a href="cow_info">Cow</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Monitoring <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="vaccine.php">Vaccine</a></li>
                      <li><a href="feed.php">Feed</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Sale <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="salemilk.php">Milk</a></li>
                      <li><a href="salemilkreport.php">Milk Report</a></li>
                      <li><a href="salecow.php">Cow</a></li>
                      <li><a href="salecowreport.php">Cow Report</a></li>
                    </ul>
                  </li>
                  <li class="">
                      <a href="milkcollection.php"><i class="fa fa-shopping-cart"></i> Milk Collection </a>
                  </li>
                  <li class="">
                    <a href="profile" class="active"><i class="fa fa-user"></i> Profile </a>
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
                      <a class="dropdown-item"  href="add logout functionality"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>                  
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class=""> 
              <div class="row">
                <div class="edit">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </div>
              <div class="row">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
              </div>
              <div class="row info">
                <div>
                  <span>Full Name:</span>
                </div>
                <div>
                  <input name="name" type="text" value="{{$user['name']}}" class="form-control">
                </div>
              </div>
              <div class="row info">
                <div>
                  <span>User Name:</span>
                </div>
                <div>
                  <input name="user_name" type="text" value="{{$login_info['user_name']}}" class="form-control">
                </div>
              </div>
              <div class="row info">
                <div>
                  <span>Email:</span>
                </div>
                <div>
                  <input name="email" type="text" value="{{$user['email']}}" class="form-control">
                </div>
              </div>
              <div class="row info">
                <div>
                  <span>Password:</span>
                </div>
                <div>
                  <input name="password" type="text" value="{{$login_info['password']}}" class="form-control">
                </div>
              </div>
              <div class="row info">
                <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile" name="image">
                  <label class="custom-file-label" for="customFile">Choose Profile Image</label>
                </div>
              </div>
            </div>
          </form>
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
        <script src="{{ url('raphael-min.js') }}"></script>
        <script src="{{ url('canvasjs.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>