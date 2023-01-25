<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{route('home.page')}}">
            <span>
             Labaid</br>
             Diagonstic Center 

            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home.page')}}">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('about.page')}}"> About <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('department.page')}}">Departments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('doctor.page')}}">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('test.type')}}">Test Type</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact.page')}}">Appointement</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>