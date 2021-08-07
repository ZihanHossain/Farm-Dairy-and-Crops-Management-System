
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Milk Collection</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>


  <body class="nav-md">

    <div class="container body">
      <div class="main_container">
        
        <!-- page content -->
        <div class="center_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Milk Collection <small>Table</small></h2>
                    
                    
                    <ul class="nav navbar-right panel_toolbox">
                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target=".add"> Add </button>
                    <div class="modal fade add" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                    
                    <!-- form_Submission -->
                    <form method="POST" action="/collect/milk" class="form-label-left input_mask">
                    {{csrf_field()}}

                    <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Add Collection</h4>
                        </div>
                        
                        <div class="modal-body">
                            <div class="x_content">
                    <br>

        

                
                    <div class="col-md-6 col-sm-6  form-group has-feedback" >
                        <input type="date" class="form-control" id="inputSuccess5" placeholder="Date" name="date">
                    </div>


                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Liter" name="liter">
                        <span class="fa fa-pencil form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Cow ID" name="co_id">
                        <span class="fa fa-pencil form-control-feedback left" aria-hidden="true"></span>
                    </div>

                            </div>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>

                          <button type="submit" class="btn btn-primary">Save </button>
                          @foreach($errors->all() as $err)
                              {{$err}} <br>
                          @endforeach
                        </div>

                    </div>
                    </form>


                    </div>
                    </div>
                      
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a href="/dairy_worker/dashboard" class="close-link"><i class="fa fa-close"></i></a>
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
                        <th>Date</th>
                        <th>Liter</th>
                        <th>Cow ID</th>
  
                        </tr>
                      </thead>

                      
                      <tbody>

                        @foreach($milkingHistory as $collect)
                            <tr>
                            <td>{{ $collect->date }}</td>
                            <td>{{ $collect->liter }}</td>
                            <td>{{ $collect->co_id }}</td>
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
      </div>
    </div>


<!-- <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script> -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
  </body>
</html>




















