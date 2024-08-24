@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Options</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/student.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        body {
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            background-size: cover;
            align-items: center;
            justify-content: center;
        }

        h1 {
            color: #333;
        }

        .registration-box {
            display: inline-block;
            width: 250px; /* Increase width for a larger box */
            height: 250px; /* Increase height for a larger box */
            margin: 20px;
            border: 1px solid #ccc;
            border-radius: 15px; /* Make the corners more rounded */
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .registration-box:hover {
            transform: scale(1.05);
        }

        .box-content {
            padding: 20px;
        }

        .student-box,  .tutor-box{
            background-color: #212529; /* Light Sky Blue */
        }

        .registration-link {
            display: block;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            background-color: #fff;
        }

        .registration-link:hover{
            color: none;
        }
    </style>
</head>
@section('content')
<body>
    <br><br>
    <h1>How Would You Like To Register</h1>
    <br>
    <div class="registration-box student-box">
        <div class="box-content">
            <h2 class="fw-bold text-uppercase" style="color: #fff; margin-top: 10px; margin-bottom: 20px;">Student</h2>
            <p style="color: #fff; margin-bottom: 30px;">Click below to register as student.</p>
            <a href="/register">
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
            </a>
        </div>
    </div>

    <div class="registration-box tutor-box">
        <div class="box-content">
            <h2 class="fw-bold text-uppercase" style="color: #fff; margin-top: 10px; margin-bottom: 20px;">Tutor</h2>
            <p style="color: #fff; margin-bottom: 30px;">Click below to apply as a tutor.</p>
            <a href="/tutor/apply">
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Apply</button>
            </a>
        </div>
    </div>

</body>

</html>
@endsection
