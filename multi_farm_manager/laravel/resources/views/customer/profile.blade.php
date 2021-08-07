<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h1>Profile Page</h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/customer">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
      <span class="navbar-text">
        {{$login['user_name']}}
      </span>
    </div>
  </div>
</nav>
<br><br><br><br>

<div align="center">
<table class="table table-striped" style="width:50%" border="2px"; align="center">
    <tr>
        <th> Name </th>
        <td>{{$user['name']}}</td>
    </tr>
    <tr>
        <th>ID</th>
        <td>{{$user['u_id']}}</td>
    </tr>
    <tr>
        <th>Username</th>
        <td>{{$login['user_name']}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$user['email']}}</td>
    </tr>
    <tr>
        <th>Gender</th>
        <td>{{$user['gender']}}</td>
    </tr>
    <tr>
        <th>User Type</th>
        <td>{{$user['type']}}</td>
    </tr>
</table>
<a type="button" name="edit" class="btn btn-secondary" href="/customer/profile/edit">Edit</a>
<a type="button" name="delete_prof" class="btn btn-secondary" href="/customer/profile/delete/{{$login['u_id']}}">Delete Profile</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>    
</body>
</html>