<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Tutoring Session</h1>
    <div>
        @if ($errors->any())

        <ul>
            @foreach($errors-> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>
    <form method="post" action="{{route('Tutor.update', ['dashboardT' => $dashboardT])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$dashboardT->name}}" />
        </div>

        <br></br>

        <div>
            <label>Subject</label>
            <input type="text" name="subject" placeholder="Subject" value="{{$dashboardT->subject}}" />
        </div>
        <br></br>

        <div>
            <label>Time</label>
            <input type="text" name="time" placeholder="Time" value="{{$dashboardT->time}}" />
        </div>
        <br></br>

        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" value="{{$dashboardT->email}}" />
        </div>


        <div>
            <input type="submit" value="Update Tutoring Session" />       
        </div>
</body>
</html>