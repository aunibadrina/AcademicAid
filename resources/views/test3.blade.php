<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoring Session</title>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Academic Aid
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div>
    <h1>Tutoring Session</h1>
        

    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>

    <div>
        <div>
            <a href="{{route('session.createS')}}"> Create New Session</a>
        </div>
            <div class="container mt-5">
                <table id="myTable" border="1">
                <thead>

                    <tr>
                        
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Time</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th> 
                    </tr>
                    <tbody>

                    @foreach($tutoringsession as $tutoringsession)
                        <tr>
                            
                            <td>{{$tutoringsession->name}}</td>
                            <td>{{$tutoringsession->subject}}</td>
                            <td>{{$tutoringsession->time}}</td>
                            <td>{{$tutoringsession->email}}</td>
                            <td>
                                <a href= "{{route('session.edit', ['session' => $tutoringsession])}}">Edit</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('session.destroy', ['session' => $tutoringsession])}}" >
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" />
                                </form>
                            </td>
                            
                        </tr>
                    @endforeach
                     </tbody>
                 </thead>

                </table>
            </div>
                <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
                <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"> </script>
                <script>
                    let table = new DataTable('#myTable');
                </script>

    </div>
</div>
        </main>
</div>

<footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright Muhammad Afnan &nbsp;&nbsp;&nbsp; Group 1</p>
      </div>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script> 
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>