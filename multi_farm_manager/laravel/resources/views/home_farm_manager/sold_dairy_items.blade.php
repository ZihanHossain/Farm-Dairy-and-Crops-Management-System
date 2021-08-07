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
    <link href="{{ url('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="{{ url('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Datatables -->
    

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
                  <li ><a href="/home/dashboard"><i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li ><a><i class="fa fa-list-alt"></i> Information <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a href="staffinfo.php">Staff</a></li>
                      <li><a href="/home/cow_info">Cow</a></li>
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
                      <li><a href="">Dairy Items Sales Report</a></li>
                      <li><a href="salecow.php">Cow</a></li>
                      <li><a href="salecowreport.php">Cow Report</a></li>
                    </ul>
                  </li>
                  <li class="">
                    <a href="milkcollection.php"><i class="fa fa-shopping-cart"></i> Milk Collection </a>
                  </li>
                  <li class="">
                    <a href="/home/profile"><i class="fa fa-user"></i> Profile </a>
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
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
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
                    <h2>Dairy Items Sales Report (Today) <small>Table</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <div class="modal fade add" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">


                    </div>
                  </div>
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
                          <th>Item Name</th>
                          <th>Total Liter</th>
                          <th>Priceper Ltr.</th>
                          <th>Total Price</th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>


                      <tbody>
                        @php
                          $i = 0
                        @endphp
                        @foreach ($sold_items as $sold_item)
                          <tr>
                            <td>{{$sold_item['name']}}</td>
                            <td>{{$sold_amount[$i]}}</td>
                            <td>{{$sold_item['price']}}</td>
                            <td>{{$sold_item['price']*$sold_amount[$i]}}</td>
                            <td><a href="/home/dairyfarm/staff/details/"><i class="fa fa-pencil"></i></a> <a href="/home/dairyfarm/staff/delete/"><i class="fa fa-trash"></i></a> </td>
                          </tr>
                          @php
                            $i += 1;
                          @endphp
                        @endforeach

                      </tbody>
                    </table>
                    <div class="modal fade edit" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                    {{-- <form class="form-label-left input_mask" action="/home/dairyfarm/staff/edit/{{$user['u_id']}}" enctype="multipart/form-data" method="POST">
                      @csrf
                      <div class="modal-content">

                          <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Edit Staff</h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="x_content">
                              <br />
                              <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" name="name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Staff Name" value="{{$user['name']}}">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="email" name="email" class="form-control" id="inputSuccess3" placeholder="Email" value="{{$user['email']}}">
                                <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" name="user_name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Username" value="{{$user['user_name']}}">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="password" name="password" class="form-control" id="inputSuccess3" placeholder="Password" value="{{$user['password']}}"
                                <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="number" name="salary" class="form-control" id="inputSuccess3" placeholder="Salary" value="{{$user['salary']}}">
                                <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
                              </div>

                              <div class="mb-3  form-group has-feedback">
                                <span>Gender</span>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" {{$user->gender=='male'? "checked" : ""}}>
                                  <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" {{$user->gender=='female'? "checked" : ""}}>
                                  <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                              </div>

                              <div class="mb-3  form-group has-feedback">
                                <span>Type</span>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="dairy" {{$user->type=='dairy'? "checked" : ""}}>
                                  <label class="form-check-label" for="inlineRadio1">Dairy Farm</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="crop" {{$user->type=='crop'? "checked" : ""}}>
                                  <label class="form-check-label" for="inlineRadio2">Crops Farm</label>
                                </div>
                              </div>

                              <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="image" value="{{$user['image']}}">
                                <label class="custom-file-label" for="customFile">Choose Profile Image</label>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save </button>
                          </div>

                      </div>
                    </form> --}}
                    </div>
                  </div>
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
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

    <!-- jQuery -->
    <script src="{{ url('/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Datatables -->

    <!-- Custom Theme Scripts -->
    <script src="{{ url('/build/js/custom.min.js') }}"></script>

  </body>
</html>