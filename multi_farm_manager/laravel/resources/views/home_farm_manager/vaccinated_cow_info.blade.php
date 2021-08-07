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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    {{-- <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> --}}
    <link href="{{ url('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="{{ url('/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

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
                  <li ><a href="dashboard"><i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li><a><i class="fa fa-list-alt"></i> Information <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a href="staffinfo.php">Staff</a></li>
                      <li ><a href="cowinfo.php">Cow</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop" class="active"></i> Monitoring <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="active"><a href="#">Vaccine</a></li>
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
                    <a href="" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{ url('images/user.png') }}" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Vaccine Information <small>Table</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th style="width: 10%">Image</th>
                          <th>Gender</th>
                          <th>Age</th>
                          <th>Vaccinated Status</th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>


                      <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($cows as $cow)
                        <tr>
                          <td><center><img src="{{ url('images/cow_picture/'.$cow[0][0]['image']) }}" width="40" alt="Avatar" align="center"></center></td>
                          <td>{{ucfirst($cow[0][0]['gender'])}}</td>
                          <td>{{\Carbon\Carbon::parse($cow[0][0]['date_of_birth'])->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}</td>
                          <td><span class="btn btn-info btn-sm">{{($cow[0][1] == null) ? 'False' : 'True'}}</span></td>
                          <td><button class="btn btn-info btn-sm"  data-toggle="modal" data-target=".edit"><a style="color: white" href="/home/vaccinated_cow_info/vaccinate_done/{{$cow[0][0]['co_id']}}"><i class="fa fa-check"></i></a></button> <button class="btn btn-danger btn-sm"><a style="color: white" href="/home/vaccinated_cow_info/vaccinate_undone/{{$cow[0][0]['co_id']}}"><i class="fa fa-times"></i></a></button></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>

              

              
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


    <!-- jQuery -->
    <script src="{{ url('/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
   <script src="{{ url('/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ url('/vendors/nprogress/nprogress.js') }}"></script>

    <!-- Datatables -->
    <!-- Custom Theme Scripts -->
    <script src="{{ url('/build/js/custom.min.js') }}"></script>

  </body>
</html>