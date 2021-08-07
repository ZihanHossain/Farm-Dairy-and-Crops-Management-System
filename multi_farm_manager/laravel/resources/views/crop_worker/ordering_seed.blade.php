<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Ordering Seeds</title>
    <style>
            body{
    background: -webkit-linear-gradient(left, #00ff, #f0ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 15%;
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
            
            <form method="POST" action="/ordering/seed">
                                {{csrf_field()}}
            <h3>Ordering Seeds</h3>
            
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            Items: 
                            <select name="items" input type="text" class="form-control" value="">
                            <option value="" selected="selected">Select Items</option>
                            @foreach($OrderingItem as $order)                            
                            <option value="{{$order->items}}">{{$order->items}}</option>
                            @endforeach

                            </select>
                                    
                        <br>    
                        </div>

                        <div class="form-group">
                            
                            <label for="|">Quantity</label>
                            <input type="number" class="form-control" name="quantity" min="1">     
                        <br>    
                        </div>

                        <div class="form-group">

                                
                                <div class="form-group">
                                    <input type="submit" name="order" class="btnContact" value="Order" />
                                </div>

                                @foreach($errors->all() as $err)
                                    {{$err}} <br>
                                @endforeach
                                
                        </div>
                            <div class="container">
                                <h2 class="text-center">Ordered Items</h2>
                                        <table class="table table-bordered table-striped">

                                        <thead>
                                        <tr>
                                        <th>Order_ID</th>
                                        <th>Items</th>
                                        <th>Quantity</th>
                                        <th>Price</th>                    
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach($OrderingItem as $order)
                                        <tr>
                                        <th>{{ $order->o_id }}</th>
                                        <th>{{ $order->items}}</th>
                                        <th>{{ $order->quantity}}</th>
                                        <th>{{ $order->price}}</th>
                                        </tr>
                                        @endforeach

                                        </tbody>

                                        </table>
                            </div>

                        
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div> -->
                </div>
                    
            </form>
            
</div>
</body>
</html>