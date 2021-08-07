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
    <title>Crop Details</title>
</head>
<body>

                            <div class="container">
                                <h2 class="text-center">Available Items</h2>
                                        <table class="table table-bordered table-striped">

                                        <thead>
                                        <tr>
                                        <th>Item ID</th>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Farm Type</th>
                                        <th>Created Time</th>
                                        <th>Updated Time</th>
                                        <th>Action</th>
                                                            
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach( $Details as $detail)
                                        <tr>
                                        <th>{{ $detail->i_id}}</th>
                                        <th>{{ $detail->name }}</th>
                                        <th>{{ $detail->price }}</th>
                                        <th>{{ $detail->farm }}</th>
                                        <th>{{ $detail->create_time}}</th>
                                        <th>{{ $detail->update_time }}</th>
                                        <th>
                                        <a href="/selling/crop{{ $detail->i_id}}">Purchased</a>
                                        </th>
                                           
                                        </tr>
                                        @endforeach
                                        

                                        </tbody>
                                        </table>
                            </div>
    
</body>
</html>