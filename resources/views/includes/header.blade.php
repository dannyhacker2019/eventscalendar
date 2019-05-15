<header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="{{ route('frontend.home')}}">EventsCalendar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('frontend.home')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('frontend.events')}}">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('frontend.blog')}}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('frontend.about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('frontend.contact')}}">Contact</a>
              </li>              
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Timetable</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{ route('frontend.course')}}">Class Timetable</a>
                  <a class="dropdown-item" href="{{ route('frontend.course')}}">Exam Timetable</a>
                  <a class="dropdown-item" href="{{ route('frontend.course')}}">School Calendar</a>
                </div>

              </li>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="{{ route('login')}}">Login</a> / <a href="{{ route('register')}}">Register</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>