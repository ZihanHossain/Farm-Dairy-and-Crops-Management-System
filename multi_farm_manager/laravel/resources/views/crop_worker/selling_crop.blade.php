<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Adding Crops</title>
    <style>
            body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
    </style>
</head>
       
<body>

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            
            
            
            
               <div class="row">
                        <div class="col-md-6">
                        <form method="POST" action='/selling/crop'>
                            {{csrf_field()}}
                            <h3>Adding Crops</h3>
                            
                            <div class="form-group">

                            <label for="|">Item Name</label>
                            <input type="text" class="form-control" name="name">     
                            <br>

                            </div>

                        <div class="form-group">
                            
                            <label for="|">Price:</label>
                            <input type="number" class="form-control" name="price" min="1">     
                        <br>    
                        </div>

                        <div class="form-group">
                            
                            <label for="|">Farm Type</label>
                            <input type="text" class="form-control" name="farm">     
                        <br>    
                        </div>
                    
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Add Item" />
                        </div>

                                @foreach($errors->all() as $err)
                                    {{$err}} <br>
                                @endforeach
                                </form>        
                        </div>
                            <div class="container">
                                <h2 class="text-center">My Added Items</h2>
                                        <table class="table table-bordered table-striped">

                                        <thead>
                                        <tr>
                                        <th>Item ID</th>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Farm Type</th>
                                        <th>Action</th>                        
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach( $addItem as $add)
                                        <tr>
                                        <th>{{ $add->i_id}}</th>
                                        <th>{{ $add->name }}</th>
                                        <th>{{ $add->price }}</th>
                                        <th>{{ $add->farm }}</th>
                                        <th>
                                            <a href="/crop/details{{ $add->i_id}}">Details</a>
                                        </th>    
                                        </tr>
                                        @endforeach
                                        

                                        </tbody>
                                        </table>
                            </div>
                    
                </div>
                               
                    
            
            
</div>
</body>
</html>