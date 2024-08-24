<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tutoring Session</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .sidebar .info a {
            text-decoration: none;
        }

        .navbar {
            background-color: #ffffff; /* Adjust the background color as needed */
        }

        .navbar-nav .nav-item .nav-link {
            color: #000000; /* Adjust the text color as needed */
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #007bff; /* Adjust the hover text color as needed */
        
        }

        h1 {
            color: #333;
            margin-top: 40px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            color: #ff0000;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    
</head>

<body>
    <h1>Edit Tutoring Session</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('session.update', ['session' => $session])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$session->name}}" />
        </div>

        <div>
            <label>Subject</label>
            <input type="text" name="subject" placeholder="Subject" value="{{$session->subject}}" />
        </div>

        <div>
            <label>Time</label>
            <input type="text" name="time" placeholder="Time" value="{{$session->time}}" />
        </div>

        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" value="{{$session->email}}" />
        </div>

        <div>
            <input type="submit" value="Update Tutoring Session" />
        </div>
    </form>
</body>

</html>
