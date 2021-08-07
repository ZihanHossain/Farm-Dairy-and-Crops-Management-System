<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Buying Seeds</title>
    <style>
            body{
    background: -webkit-linear-gradient(left, #00ff, #f0ff);
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
            
            <form method="POST" action=''>
            {{csrf_field()}}
            <h3>Buying Seeds</h3>
            
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            Items: <select name="items" input type="" placeholder="" value="">
                            <option value="" selected="selected">Select Items</option>
                                    </select>
                                    <br>
                            <!-- <input type="text" name="txtName" class="form-control" placeholder="Name_of_crop *" value="" /> -->
                        </div>
                        <div class="form-group">
                            Price: <select name="items" input type="" placeholder="" value="">
                            <option value="" selected="selected">Select Items</option>
                                    </select>
                                    <br>
                            <!-- <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" /> -->
                        </div>

                        <div class="form-group">
                        <!-- <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Purchase" />
                        </div>
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