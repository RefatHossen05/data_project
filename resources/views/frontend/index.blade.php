<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{url('frontend/assets/images/favicon.png')}}" type="">

  <title>Labaid Diagonstic </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="{{url('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('frontend/assets/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('frontend/assets/css/responsive.css')}}" rel="stylesheet" />
<!-- vandor -->
  <link href="{{url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('frontend/assets/css/style.css')}}" rel="stylesheet">
  @notifyCss

</head>

<body>



    <!-- header section strats -->
    <div class="hero_area">

    <div class="hero_bg_box">
      <img src="{{url('frontend/assets/images/hero-bg.png')}}" alt="">
    </div>

        <!-- header section strats -->
        <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="">
            <span> 
              Labaid <br>
              Diagonstic <br>
              Center
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">


          <x:notify-messages />


            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('home.page')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about.page')}}"> About</a>
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
                <a class="nav-link" href="{{route('contact.page')}}">Appointment</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-lg-1 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>

              @auth()
             
              
              <li class="nav-item">
              <a class="nav-link" href="">{{auth()->user()->name}}</a>              
              </li>
            

              <li>
                <a class="btn btn-danger" href="{{route('frontend.logout')}}"> Logout</a>
              </li>            
            </ul>


@else

          <button type="button" class="btn btn-warning mr-1" data-toggle="modal" data-target="#registration">
  Registration

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#login">
  Login
</button>

@endguest





<!-- Modal -->


<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ragistration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

     
      <form action="{{route('reg')}}" method="post">
      @csrf
      <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" class="form-control" placeholder="Plase Enter Your Name">
      </div>
      <div class="form-group">
      <label for="">User Name</label>
      <input type="text" name="username" class="form-control" placeholder="Plase Enter Your Name">
      </div>
      <div class="form-group">
      <label for="">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Plase Enter Your Email">
      </div>

      <div class="form-group">
      <label for="">Password</label>
      <input type="password" name="password" class="form-control" placeholder="****">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      </form>

        
      </div>
    
    </div>
  </div>
</div>






<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{route('login.form')}}" method="post">
      @csrf
      <div class="form-group">
      <label for="">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Plase Enter Your Email">
      </div>
      <div class="form-group">
      <label for="">Password</label>
      <input type="password" name="password" class="form-control" placeholder="****">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">login</button>
      </div>
      </form>

        
      </div>
      
    </div>
  </div>
</div>


</div>







        </nav>
      </div>
    </header>
    <!-- end header section -->



<!-- <div class="container">
 <div class="text-right" style="direction:rtl">


Button trigger modal -



</div> 







</div> -->











<section class="slider_section ">









      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      We Provide Best Medical Test
                    </h1>
                    <p>
                      Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      We Provide Best Healthcare
                    </h1>
                    <p>
                      Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                    We Support 24/7 For Patient
                    </h1>
                    <p>
                      Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>
    <!-- end header section -->

  


  <!-- department section -->

  <section class="department_section layout_padding">
    <div class="department_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Our Departments
          </h2>
          <p>
            Asperiores sunt consectetur impedit nulla molestiae delectus repellat laborum dolores doloremque accusantium
          </p>
        </div> 
        <div class="row">
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="{{url('frontend/assets/images/s1.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Cardiology
                </h5>
                <p>
                  fact that a reader will be distracted by the readable page when looking at its layout.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="{{url('frontend/assets/images/s2.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Diagnosis
                </h5>
                <p>
                  fact that a reader will be distracted by the readable page when looking at its layout.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box">
              <div class="img-box">
              <img src="{{url('frontend/assets/images/labtest.jpg')}}" height="90px" width="90px" class="rounded-circle mb-3" alt="">
              </div>
              <div class="detail-box">
                <h5>
                 LabTest
                </h5>
                <p>
                  fact that a reader will be distracted by the readable page when looking at its layout.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="{{url('frontend/assets/images/s4.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  First Aid
                </h5>
                <p>
                  fact that a reader will be distracted by the readable page when looking at its layout.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            View All
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end department section -->

  <!-- about section -->

  <section class="about_section layout_margin-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{url('frontend/assets/images/about-img.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Us</span>
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- doctor section -->

  <section class="doctor_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Doctors
        </h2>
        <p class="col-md-10 mx-auto px-0">
          Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit, quisquam aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe quas fugit, beatae id quisquam.
        </p>
      </div>
      
      <div class="row">
       @foreach($doctoros as $doctor)
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{url('uploads/doctor/'.$doctor->doctor_image)}}" style=""  alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
               {{$doctor->doctorname}}
              </h5>
              <h6 class="">
               {{$doctor->degree}} <span>({{$doctor->dpt}})</span>
              </h6>
            </div>
          </div>
        </div>
      @endforeach
   
    
      </div>
      <div class="btn-box">
        <a href="">
          View All
        </a>
      </div>
    </div>
  </section>

  <!-- end doctor section -->





  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Appointment
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form"> 
          
          <form action="{{route('appointment.submit')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-1">
                    <label for="patient_name" class="mb-1">
                        <strong> Patient Name</strong></label>
                    <input type="text" name="patient_name" id="patient_name" class="form-control" placeholder="Place Enter Your name">
                </div>  


                <div class="form-group mb-1">
                    <label for="Doctor_name" class="mb-1">
                    <strong>Chose Doctor:</strong>
                    </label>
                    <select name="doctor_id" id="Doctor_name" class="form-control form-select">
                    @foreach($doctoros as $doctor)
                        <option value="{{$doctor->id}}">
                        {{$doctor->doctorname}}({{$doctor->dpt}})
                        </option>
                    @endforeach
                    </select>
                




                <div class="form-group mb-1">
                    <label for="date" class="mb-1">
                        <strong>Date of Serial</strong>
                    </label>
                    <input type="text" name="date" id="date" class="form-control" >
                </div>

                <div class="form-group mb-1 text-center">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>


          </div>
        </div>





        <div class="col-md-6 col-lg-12">
          <div class="map_container">
            <div class="map">
              <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.225675215452!2d91.1789148!3d23.452322799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547f27d45b4983%3A0x4fee518e7ce8a066!2sLabaid%20Ltd.%20Diagnostic%2C%20Cumilla%20Branch!5e0!3m2!1sbn!2sbd!4v1674623147838!5m2!1sbn!2sbd" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{url('frontend/assets/images/client.jpg')}}" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Alan Emerson
                      </h6>
                    </div>
                    <p>
                      Enim consequatur odio assumenda voluptas voluptatibus esse nobis officia. Magnam, aspernatur nostrum explicabo, distinctio laudantium delectus deserunt quia quidem magni corporis earum inventore totam consectetur corrupti! Corrupti, nihil sunt? Natus.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{url('frontend/assets/images/client.jpg')}}" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Alan Emerson
                      </h6>
                    </div>
                    <p>
                      Enim consequatur odio assumenda voluptas voluptatibus esse nobis officia. Magnam, aspernatur nostrum explicabo, distinctio laudantium delectus deserunt quia quidem magni corporis earum inventore totam consectetur corrupti! Corrupti, nihil sunt? Natus.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{url('frontend/assets/images/client.jpg')}}" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Alan Emerson
                      </h6>
                    </div>
                    <p>
                      Enim consequatur odio assumenda voluptas voluptatibus esse nobis officia. Magnam, aspernatur nostrum explicabo, distinctio laudantium delectus deserunt quia quidem magni corporis earum inventore totam consectetur corrupti! Corrupti, nihil sunt? Natus.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->
  
  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +8801740185610
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  labaid@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
              Beatae provident nobis mollitia magnam voluptatum, unde dicta facilis minima veniam corporis laudantium alias tenetur eveniet illum reprehenderit fugit a delectus officiis blanditiis ea.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
        <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="" href="{{route('home.page')}}">
                Home
              </a>
              <a class="active" href="{{route('about.page')}}">
                About
              </a>
              <a class="" href="{{route('department.page')}}">
                Departments
              </a>
              <a class="" href="{{route('doctor.page')}}">
                Doctors
              </a>
              <a class="" href="{{route('test.type')}}">
                Test Type
              </a>
              <a class="" href="{{route('contact.page')}}">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Newsletter
          </h4>
          <form action="#">
            <input type="email" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="footer-info">
        <p>
         
            &copy; <span id="displayYear"></span> Distributed By
            <a href="https://themewagon.com/">RifatIT</a>
        </p>
       
      </div>  
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="{{url('frontend/assets/js/jquery-3.4.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="{{('frontend/assets/js/bootstrap.js')}}"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="{{url('frontend/assets/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  
  <!-- End Google Map -->

@notifyJs

</body>

</html>