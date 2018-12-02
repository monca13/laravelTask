<!DOCTYPE html>
<html lang="en">
<head>
    <title>TEACHER MODULE MANAGMENT SYSTEM</title>

    <link type="text/css" rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script type="text/css" src="{{ url('js/app.js') }}"></script>

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
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-6 offset-3 form" style="margin: auto;">
            <h2>ADD NEW LECTURER</h2>
            <hr>
            <div class="form-group">
                <label for="lname">Lecturer's Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter lecturer's name" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label> <br>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="male" name="gender">Male
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="female" name="gender">Female
                    </label>
                </div>
                <div class="form-check-inline disabled">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="others" name="gender" >Others
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter valid phone number" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter valid email address" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" required>
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter your nationality" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="dob" required>
            </div>
            <div class="form-group">
                <label for="faculty">Faculty</label>
                <select class="form-control" name="faculty" id="faculty" required>
                    <option value="" selected>Select</option>
                </select>
            </div>
            <div class="form-group">
                <label for="module">Module</label>
                <select class="form-control" name="module" id="module" required>
                    <option value="" selected>Select</option>
                </select>
            </div>
            <button type="submit" class="btn btn-info btn-lg">Add</button>
        </div>
    </div>
</body>
</html>