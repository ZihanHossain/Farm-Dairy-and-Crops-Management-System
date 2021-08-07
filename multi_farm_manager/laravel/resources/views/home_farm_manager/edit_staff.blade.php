<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Edit Staff</title>
</head>
<body>
    <form class="form-label-left input_mask" action="/home/dairyfarm/staff/edit/{{$user['u_id']}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="container">

            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Edit Staff</h4>
              </button>
            </div>
            <div class="modal-body">
              <div class="x_content">
                <br />
                <div class="mb-3">
                  <input type="text" name="name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Staff Name" value="{{$user['name']}}">
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="mb-3">
                  <input type="email" name="email" class="form-control" id="inputSuccess3" placeholder="Email" value="{{$user['email']}}">
                  <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                </div>

                <div class="mb-3">
                  <input type="text" name="user_name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Username" value="{{$login_info['user_name']}}">
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="mb-3">
                  <input type="password" name="password" class="form-control" id="inputSuccess3" placeholder="Password" value="{{$login_info['password']}}"
                  <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
                </div>

                <div class="mb-3">
                  <input type="number" name="salary" class="form-control" id="inputSuccess3" placeholder="Salary" value="{{$user['salary']}}">
                  <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
                </div>
                <div class="md-3">
                  <select name="shift_id" class="form-control">
                      @foreach ($shift_details as $shift_detail)
                        <option {{($shift_detail['sh_id'] == $user['sh_id']) ? 'selected' : ''}} value="{{$shift_detail['sh_id']}}">{{$shift_detail['shift_name']}}</option>
                      @endforeach  
                  </select>
                </div>

                <div class="mb-3  form-group has-feedback">
                  <span>Gender</span>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" {{$user['gender']=='male'? "checked" : ""}}>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" {{$user['gender']=='female'? "checked" : ""}}>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                </div>

                <div class="mb-3  form-group has-feedback">
                  <span>Type</span>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio3" value="dairy" {{$user['type']=='dairy'? "checked" : ""}}>
                    <label class="form-check-label" for="inlineRadio3">Dairy Farm</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio4" value="crop" {{$user['type']=='crop'? "checked" : ""}}>
                    <label class="form-check-label" for="inlineRadio4">Crops Farm</label>
                  </div>
                </div>

                <div class="custom-file mb-3">
                  <label for="formFile" class="form-label">Choose Profile Image</label>
                  <input class="form-control" type="file" id="formFile" name="image" value="{{$user['image']}}">
                  {{-- <input type="file" class="custom-file-input" id="customFile" name="image" value="{{$user['image']}}">
                  <label class="custom-file-label" for="customFile">Choose Profile Image</label> --}}
                </div>
                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save </button>
            </div>

        </div>
      </form>
</body>
</html>