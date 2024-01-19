
<head>
    <link href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
</head>



<main class="py-4">
<div>
    <h1>Tutoring Session</h1>
</div>

    <div>
        
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

<main class="py-4">
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Tutoring Session</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('session.store')}}">
                @csrf
                @method('post')
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
                  </div>
                  
                  <div class="form-group">
                    <label>Time</label>
                    <input type="text" class="form-control" name="time" placeholder="Enter Time">
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</main>






