<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dairy Worker Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    .footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 600px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4 classs="active">Dashboard</h4>

      
      <ul class="nav nav-pills nav-stacked">
        
        <!-- <li class="active"><a href="/home">Home</a></li> -->
        <li><a href="/give/attendance">Attendance</a></li>
        <li><a href="/collect/milk">Milk Collection</a></li>
        <li><a href="/food/distibute">Food Distribution</a></li>
        <li><a href="/check/health">Checkup</a></li>
        <li><a href="/entries/new_born_cow">New Born Cow's</a></li>
        <li><a href="/sell/milk">Selling Milk</a></li>
        <li><a href="/collect_manure">Manure Collection</a></li>
        <li><a href="/change/profile">Profile Edit</a></li>
        <li><a href="/logout">Logout</a></li>

      </ul><br>
      
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>




    <!-- <div class="col-sm-9">
      <h4 class="text-center">Crop Worker</h4>
      <h5><span class="glyphicon glyphicon-option"></span>Crop_Workers: <a href="/to-do-list">To-Do-List</a></h5>
      <hr> -->
      

<footer class="container-fluid">
<p>Dairy Farm And Management System-<a href="https://github.com/ZihanHossain/Farm-Dairy-and-Crops-Management-System_Advanced-Webtech">Github Link</a></p> 
</footer>

</body>
</html>
