<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Tutoring Session</h1>
    <div>
        @if ($errors->any())

        <ul>
            @foreach($errors-> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>
    <form method="post" action="{{route('session.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>

        <br></br>

        <div>
            <label>Subject</label>
            <input type="text" name="subject" placeholder="Subject">
        </div>
        <br></br>

        <div>
            <label>Time</label>
            <input type="text" name="time" placeholder="Time">
        </div>
        <br></br>

        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email">
        </div>


        <div>
            <input type="submit" value="Create A New Tutoring Session" />       
        </div>
</body>
</html>