<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <center><h1 >Customer Dashboard</h1></center>

    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/customer/profile"> Profile </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dairy Item</a>
          <a class="nav-link" href="/customer/crops">Corps Item</a>
          <a class="nav-link" href="/logout">Logout</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><b>{{session('name')}}</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br>

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <center>
        <li class="nav-item">
        <div class="card" style="width: 18rem;">
  <img src="images/corps_thumbnail.png" class="card-img-top" alt="corps">
  <div class="card-body">
    <h5 class="card-title">Corps Items</h5>
    <p class="card-text">The fresh field corps you can find in our farm!</p>
    <a href="/customer/crops" class="btn btn-primary">View</a>
  </div>
</div>
        </li>
        <br><br><br>
        <li class="nav-item">
        <div class="card" style="width: 18rem;">
  <img src="images/dairy_thumbnail.jpg" class="card-img-top" alt="dairy">
  <div class="card-body">
    <h5 class="card-title">Dairy Items</h5>
    <p class="card-text">Fresh dairy item you can find in our farm.</p>
    <a href="/customer/dairies" class="btn btn-primary">View</a>
  </div>
</div>
        </li>
        </center>
      </ul>


<br><br>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>    
</body>
</html>