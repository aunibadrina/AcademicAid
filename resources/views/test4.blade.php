<div class="section events" id="events">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Schedule</h6>
            <h2>Tutoring Sessions</h2>
          </div>
        </div>
        @foreach($tutoringsession as $tutoringsession)
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
            
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/event-01.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">{{$tutoringsession->name}}</span>
                    <h4>{{$tutoringsession->subject}}</h4>
                  </li>
                  <li>
                    <span>Time:</span>
                    <h6>{{$tutoringsession->time}}</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>3 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>RM5.00</h6>
                  </li>
                  
                  
                </ul>
                <a href="{{route('Tutor.edit', ['dashboardT' => $tutoringsession])}}">EDIT</i></a>
                <br></br>
                
                <form method="post" action="{{route('Tutor.destroy', ['dashboardT' => $tutoringsession])}}" >
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" />
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      
    </div>
  </div>