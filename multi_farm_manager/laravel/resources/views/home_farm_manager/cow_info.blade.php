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
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ url('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Datatables -->

    <!-- Custom Theme Style -->
    <link href="{{ url('/build/css/custom.min.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/cow_info.js') }}" defer></script>
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
                  <li class="active"><a><i class="fa fa-list-alt"></i> Information <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a href="staffinfo.php">Staff</a></li>
                      <li class="active"><a href="cowinfo.php">Cow</a></li>
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
                    <h2>Cow Information <small>Table</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <button class="btn btn-success btn-sm" data-toggle="modal" data-target=".add"> Add </button>
                      <div class="modal fade add" id="add_cow" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                    <form class="form-label-left input_mask" method="POST" action="/home/cow_info/add_cow" enctype="multipart/form-data">

                      @csrf
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Add Cow</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="x_content">
                            <br/>
                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                  <input type="text" name="price" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Cow Price">
                                  <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                  <select name="gender" class="form-control">
                                      <option>Select Gender</option>
                                      <option value="male">Male</option>
                                      <option value="femaile">Female</option>
                                  </select>
                                </div>

                                {{-- <div class="col-md-6 col-sm-6  form-group has-feedback">
                                  <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Cow Type">
                                  <span class="fa fa-paw form-control-feedback left" aria-hidden="true"></span>
                                </div> --}}
                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                  <select name="availability" class="form-control">
                                      <option>Select Status</option>
                                      <option value="available">Availbale</option>
                                      <option value="sold">Sold</option>
                                  </select>
                                </div>
                                <div class="col-md-12 col-sm-6  form-group has-feedback" style="margin-top: -1%">
                                  <p>Date of Birth</p>
                                  <input type="date" name="date" class="form-control" id="inputSuccess5" placeholder="Date of Birth" style="margin-top: -3%">
                                </div>
                                <div class="custom-file mb-3">
                                  <input type="file" class="custom-file-input" id="customFile" name="image">
                                  <label class="custom-file-label" for="customFile">Choose Cow Image</label>
                                </div>
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
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save </button>
                        </div>
                      </div>

                    </form>
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
                          <th style="width: 10%">Image</th>
                          <th>Gender</th>
                          <th>Price</th>
                          <th>Age</th>
                          <th>Milking Amount</th>
                          <th>Status</th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>


                      <tbody>

                        @foreach ($cows as $cow)
                        <tr>
                          <td><center><img src="{{ url('images/cow_picture/'.$cow['image']) }}" width="40" alt="Avatar" align="center"></center></td>
                          <td>{{ucfirst($cow['gender'])}}</td>
                          <td>{{$cow['price']}}</td>
                          <td>{{\Carbon\Carbon::parse($cow['date_of_birth'])->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}</td>
                          <td><b style="color: brown">{{$cow['milk']}}</b></td>
                          <td><span class="btn btn-info btn-sm">{{ucfirst($cow['availability'])}}</span></td>
                          <td><button class="btn btn-danger btn-sm"><a href="/home/cow_info/delete_cow/{{$cow['co_id']}}"></a><i class="fa fa-trash"></i> <button class="btn btn-info btn-sm"  id="edit"><a href="/home/cow_info/sell_cow/{{$cow['co_id']}}"><i class="fa fa-pencil"></i></a></button></button></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                    <div class="modal fade edit" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                   <form class="form-label-left input_mask">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Edit Cow</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="x_content">
                    <br />
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Control Number">
                        <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <select class="form-control">
                            <option>Select Gender</option>
                            <option>Option one</option>
                          </select>
                      </div>

                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Cow Type">
                        <span class="fa fa-paw form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Option one</option>
                          </select>
                      </div>
                      <div class="col-md-12 col-sm-6  form-group has-feedback" style="margin-top: -1%">
                        <p>Date of Birth</p>
                        <input type="date" class="form-control" id="inputSuccess5" placeholder="Date of Birth" style="margin-top: -3%">
                      </div>
                      <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose Cow Image</label>
                  </div>
                  </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save </button>
                        </div>
                      </div>
                    </form>
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
    <script type="text/javascript">
      if(@php
        if($errors->any())
        {
          echo 'true';
        }
      @endphp)
      {
        $(window).on('load',function(){
          $('#add_cow').modal('show');
        });
      }
    </script>
    <script src="{{ url('/build/js/custom.min.js') }}"></script>

  </body>
</html>