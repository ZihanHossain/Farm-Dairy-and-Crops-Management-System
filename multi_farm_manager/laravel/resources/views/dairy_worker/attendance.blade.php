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
    <title>Attendance Sheet</title>
</head>
<body> 


                            <div class="container">
                                <h2 class="text-center">Attendance Sheet</h2>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Login_ID</th>
                                        <th>User_ID</th>
                                        <th>Login_Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $loginDetails as $detail )
                                    <tr>
                                    <td>{{ $detail->l_id }}</td>
                                    <td>{{ $detail->u_id }}</td>
                                    <td>{{ $detail->login_time }}</td>
                                    </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>  
        
</body>
</html>