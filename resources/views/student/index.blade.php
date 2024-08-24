<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Student Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/student.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>AcademicAid</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                   
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      
                      
                      <li class="scroll-to-section"><a href="#team">Tutors</a></li>
                      <li class="scroll-to-section"><a href="{{route('student.schedule')}}">Sessions</a></li>                        
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
                            <li class="nav-item dropdown" style="margin-top: -8px;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color: #000;" href="{{ route('userProfile') }}">{{ __('User Profile') }}</a>    
                                    <a class="dropdown-item" style="color: #000;" href="{{ route('logout') }}"
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
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Our Courses</span>
                <h2>With Scholar Teachers, Everything Is Easier</h2>
                <p>Our dedicated educators provide the guidance and support needed for your academic success.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="login">Book Session</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Best Result</span>
                <h2>Get the best result out of your effort</h2>
                <p>Unlock your full potential and achieve your best result with our tutors, crafted to provide expert guidance and continuous support for your journey.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="login">Book Session</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Online Learning</span>
                <h2>Online Learning helps you save the time</h2>
                <p>Embrace Efficiency: Online Learning Unleashes Time-Saving Benefits for Your Educational Journey.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="login">Book Session</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                   <p class="count-text ">Happy Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                  <p class="count-text ">Tutoring Session</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="16" data-speed="1000"></h2>
                  <p class="count-text ">Certified Tutors</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="2023" data-speed="1000"></h2>
                  <p class="count-text ">Ever Since</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        @foreach($tutoringsession as $tutoringsession)
        <div class="col-lg-3 tutorcart col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-01.jpg" alt="">
              <span class="category">{{$tutoringsession->subject}} Tutor</span>
              <h4>{{$tutoringsession->name}}</h4>
              <ul class="social-icons">
                <li><a href="mailto:{{$tutoringsession->email}}"><i class="far fa-envelope"></i></a></li>
                
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div> 

  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p style="text-align: justify;">“Academic Aid has been a game-changer for me. As an engineering student, finding qualified tutors who understand the intricacies of my subjects was crucial. The tutors here not only met but exceeded my expectations. The personalized approach and flexibility in scheduling have made my learning journey smoother and more enjoyable.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Engineering Student</span>
                <h4>Sarah K.</h4>
              </div>
            </div>
            <div class="item">
              <p style="text-align: justify;">“Academic Aid is a treasure for social sciences students like me. The range of subjects offered and the adaptability of the tutors to different academic levels are commendable. The platform's user-friendly interface and the dedication of the tutors have significantly contributed to my academic success.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author2.jpg" alt="">
                <span class="category">Social Sciences Major</span>
                <h4>Emily L.</h4>
              </div>
            </div>
            <div class="item">
              <p style="text-align: justify;">“Being passionate about computer science, I was thrilled to discover Academic Aid. The tutors, who are students and lecturers from UTM, have an in-depth understanding of the subject. The interactive tools and live sessions allowed me to clarify doubts in real-time, making my learning experience highly effective.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author3.jpg" alt="">
                <span class="category">Computer Science Enthusiast</span>
                <h4>Raj M</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONIALS</h6>
            <h2>What they say about us?</h2>
            <p style="text-align: justify;">Discover the impact of Academic Aid through the inspiring stories of students like Sarah K. and Ray M. Their testimonials reveal why Academic Aid is the preferred choice for those seeking excellence in online learning.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright &nbsp;&nbsp;&nbsp; Academic Aid &nbsp;&nbsp;&nbsp; Group 1</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

  <!-- Bootstrap JavaScript (Popper.js is required for dropdowns) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>