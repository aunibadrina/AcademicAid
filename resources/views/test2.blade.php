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
                <a href="{{route('Tutor.createS')}}"> Create New Session</a>
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
                                    <a href= "{{route('Tutor.edit', ['dashboardT' => $tutoringsession])}}">Edit</a>
                                </td>
                                <td>
                                    <form method="post" action="{{route('Tutor.destroy', ['dashboardT' => $tutoringsession])}}" >
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
