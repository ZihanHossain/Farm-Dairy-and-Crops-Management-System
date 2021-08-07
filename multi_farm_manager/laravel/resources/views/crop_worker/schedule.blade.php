<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Time Schedule</title>
</head>


<body>
<form method="POST" action="">
{{csrf_field()}}
<div class="container">
<h2 class="text-center">View Season Schedule</h2>
<table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Season_ID</th>
        <th>I_ID</th>
        <th>Starting_Date</th>
        <th>Ending_Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($seasonTiming as $timing)
      <tr>
      <td>{{ $timing->s_id }}</td>
      <td>{{ $timing->i_id }}</td>
      <td>{{ $timing->starting_date }}</td>
      <td>{{ $timing->ending_date }}</td>
      <!-- <td>{{ $timing->action }}</td> -->
      
      <td>
      @if($timing->action == "active")
      <a href="/time/schedule/{{ $timing->s_id }}">Process</a>
      @else
      <a href="#">Processed</a>
      @endif
      </td>

      </tr>
      @endforeach
    </tbody>
  </table>
  </div>  
</form>  
</body>
</html>