<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cart</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand"><b> Cart </b></span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/customer">Dashboard</a>
          <a class="nav-link" href="/customer/dairies">Dairy Items</a>
          <a class="nav-link" href="/customer/crops">Corps Items</a>
          <a class="nav-link" href="/customer/profile">Profile</a>
          <a class="nav-link" href="/logout">Logout</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><b>Users Name</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
    <center>
<table id="datatable" class="table table-striped table-bordered" style="width:50%">

<thead>
  <tr>
    <th>Product ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Amount</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  @foreach ($cart_items as $item)
  <tr>
    <td>{{$item['i_id']}}</td>
    <td>{{$item['i_name']}}</td>
    <td>{{$item['i_price']}}</td>
    <td>{{$item['amount']}}</td>
    <td><a href="/customer/crops/cart/delete/{{$item['i_id']}}"><i class="fa fa-pencil"></i>Delete</a> || <a href="/customer/crops/cart/confirm/{{$item['i_id']}}"><i class="fa fa-pencil"></i>Confirm</a></td>
  </tr>
  @endforeach

</tbody>
</table>
</center>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>