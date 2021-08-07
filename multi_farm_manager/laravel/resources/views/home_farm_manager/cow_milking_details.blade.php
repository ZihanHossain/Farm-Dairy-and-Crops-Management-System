<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/farm_manager/cow_milking_details.css')}}">
    <title>Dairy Farm Management System</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="table-wrap">
                    <br>
                    <br>

                    <table class="table table-dark table-hover">
                        <thead>
                            <th>
                                <span>Milking Details</span>
                            </th>
                        </thead>
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Milk Amount</th>
                            <th scope="col">Date</th>
                        </thead>
                        <tbody>
                            @php
                                $i = 1
                            @endphp
                            @foreach ($milking_historys as $milking_history)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$milking_history['liter_amount']}} Ltr.</td>
                                    <td>{{$milking_history['date']}}</td>
                                </tr>
                            @php
                                $i += 1;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="table-wrap">
                    
                    <table class="table table-dark table-hover">
                        <thead>
                            <th>
                                <span>Feed Details</span>
                            </th>
                        </thead>
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Feed Amount</th>
                            <th scope="col">Quality</th>
                            <th scope="col">Date</th>
                        </thead>
                        <tbody>
                            @php
                                $i = 1
                            @endphp
                            @foreach ($feeds as $feed)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$feed['amount']}} Kg</td>
                                    <td>Grade {{Str::ucfirst($feed['quality'])}}</td>
                                    <td>{{$feed['date']}}</td>
                                </tr>
                            @php
                                $i += 1;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col">
                <div class="container right_section">
                    <form method="POST">
                        @csrf
                        <div class="row">
                            <div class="col align-items-center">
                                <label for="inputPassword6" class="col-form-label">Age:</label>
                            </div>
                            <div class="col align-items-center">
                                <label for="inputPassword6" class="col-form-label">{{\Carbon\Carbon::parse($cow['date_of_birth'])->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}</label>
                            </div>
                        </div>
                        <div class="row right_section_items">
                            <div class="col align-items-center">
                                <label for="inputPassword6" class="col-form-label">Price:</label>
                            </div>
                            <div class="col align-items-center">
                                <label for="inputPassword6" class="col-form-label">{{$cow['price']}} Tk</label>
                            </div>
                        </div>
                        <div class="row right_section_items">
                            <div class="col align-items-center">
                                <label for="inputPassword6" class="col-form-label">Vaccinated:</label>
                            </div>
                            <div class="col align-items-center">
                                <label for="inputPassword6" class="col-form-label">{{($vaccinated == null) ? 'False' : 'True'}}</label>
                            </div>
                        </div>
                        <div class="row right_section_items">
                            <div class="col align-items-center">
                                <label for="inputPassword6" class="col-form-label">Total Feed Cost:</label>
                            </div>
                            <div class="col align-items-center">
                                <label for="inputPassword6" class="col-form-label">{{$total_feed_price}} Tk</label>
                            </div>
                        </div>
                        <div class="row right_section_items">
                            <div class="col align-items-center">
                                <label for="inputPassword6" class="col-form-label">Total Collected Milk Price:</label>
                            </div>
                            <div class="col align-items-center">
                                <label for="inputPassword6" class="col-form-label">{{$total_milk_price}} Tk</label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <div class="right_button">
                            <a href=""><button type="submit" class="btn btn-primary">Save</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>