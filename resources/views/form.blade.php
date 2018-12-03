<!DOCTYPE html>
<html lang="en">
<head>
    <title>TEACHER MODULE MANAGMENT SYSTEM</title>

    <link type="text/css" rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/css" src="{{ url('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{url('javascripts/jquery.validate.additional-methods.js')}}"></script>
    <script src="{{url('javascripts/jquery.validate.min.js')}}"></script>
    <script src="{{url('javascripts/validation.js')}}"></script>

    <style>
        .form{
            padding: 40px 25px;
            background-color: #3a78b7c9;
            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
        }

        button{
            color: #ffffff !important;
            border-radius: 0px !important;
        }

        input{
            font-weight: 700;
        }

        hr{
            border-color: #efefef ;
        }

        h2 {
            font-weight: 800;
        }
        .error,.help-block{
            color: red!important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-6 offset-3 form" style="margin: auto;">
            <h2>ADD NEW LECTURER</h2>
            <hr>
            <form method="post" action="{{url('/create')}}" id="add">
                @csrf
            <div class="form-group">
                <label for="lname">Lecturer's Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter lecturer's name" required>
                @if($errors->has('lname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lname') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="gender">Gender</label> <br>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="male" name="gender">Male
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="female" name="gender">Female
                    </label>
                </div>
                <div class="form-check-inline disabled">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="others" name="gender" >Others
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter valid phone number" required>
                @if($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter valid email address" required>
                @if($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" required>
                @if($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter your nationality" required>
                @if($errors->has('nationality'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nationality') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="dob" required>
                @if($errors->has('dob'))
                    <span class="help-block">
                        <strong>{{ $errors->first('dob') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="faculty">Faculty</label>
                <select class="form-control" name="faculty" id="faculty" required>
                  @foreach($faculty as $row)
                      <option value="{{$row->id}}">{{$row->faculty}}</option>
                    @endforeach
                </select>
                @if($errors->has('faculty'))
                    <span class="help-block">
                        <strong>{{ $errors->first('faculty') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="module">Module</label>
                <select class="form-control" id="module" name="module[]" multiple required>
                   <option value="">Select Faculty First</option>
                </select>
                @if($errors->has('module'))
                    <span class="help-block">
                        <strong>{{ $errors->first('module') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-info btn-lg">Add</button>
            </form>
        </div>
    </div>

    <script>
    $(document).ready(function() {
    $("#module").select2();
    });
    </script>

    <script>
        $('#faculty').on('change', function (e) {
            console.log(e);

            var faculty_id = e.target.value;
            var link = 'http://localhost/task/public/ajax/show/';

            $.get(link + faculty_id, function (data) {
                console.log(data);

                $('#module').empty();

                $.each(data, function(index, moduleObj){
                    $('#module').append('<option value="'+ moduleObj.id +'">'+ moduleObj.modules +'</option>');
                });
            });
        })
    </script>

</body>
</html>