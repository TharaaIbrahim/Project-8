@extends('layouts.header')
@section('content')

<div class="container mb-5">

    <div class="row gutters-sm">
      <div class="col-md-4 d-none d-md-block">
        <div class="card">
          <div class="card-body">
            <nav class="nav flex-column nav-pills nav-gap-y-1">
              <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Profile Information
              </a>
              <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Reservations
              </a>
            
            </nav>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-body tab-content">
            <div class="tab-pane active" id="profile">
              <h6>YOUR PROFILE INFORMATION</h6>
              <hr>
              <form method="post"
               action="{{route('user.updateUserProfile',Auth::user()->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="fullName">Full Name</label>
                  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter name" value="{{ Auth::user()->name  }}" >
                  <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                </div>
              
                    <div class="form-group">
                      <label for="fullName">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ Auth::user()->email  }}" name="email">
                    </div>
                    <div class="form-group">
                        <label for="fullName">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required >
                      </div>
               
                <button type="submit" class="btn" style="background-color: #dfa974;color:white">Update Profile</button>
              </form>
            </div>
            <div class="tab-pane" id="security" >
                <h6>Reservations</h6>
                <hr>
                <div style="display: flex;flex-direction: column;align-items: center">
              @foreach ($rooms as $room )
                <div class="card d-flex mb-4"  style="width:fit-content;flex-direction: row">
                    <img class="card-img-top" src="{{$room->img}}" alt="Card image cap" style="width: 8rem">
                    <div class="card-body">
                        <div class="card-text">
                            <p>{{ $room->name }}</p>
                            <div style="color: rgb(110, 108, 108);">{{ $room->price }}JD</div>
                            <div style="color: rgb(141, 140, 140);font-size: 0.8em">check-in:{{Str::substr($room->check_in,0,11)}}</div>
                            <div style="color: rgb(141, 140, 140);font-size: 0.8em">check-out:{{Str::substr($room->check_out,0,11)}}</div>
                        </div>
                    </div>
                  </div>
              @endforeach
                </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>

  </div>

  
   
<footer class="footer-section">
  <div class="container">
      <div class="footer-text">
          <div class="row">
              <div class="col-lg-4">
                  <div class="ft-about">
                      <div class="logo">
                          <a href="#">
                              <!-- <img src="img/footer-logo.png" alt=""> -->
                          <h2 style="font-family: 'Lora', serif;color:white">RelaxO<span style="color: #dfa974;">.</span></h2>

                          </a>
                      </div>
                      <p>We inspire and reach millions of travelers</p>
                      <div class="fa-social">
                          <a href="https://web.facebook.com/" class="pt-2"><i class="fa fa-facebook"></i></a>
                          <a href="https://twitter.com/"  class="pt-2"><i class="fa fa-twitter"></i></a>
                          <!-- <a href="#"><i class="fa fa-tripadvisor"></i></a> -->
                          <a href="https://www.instagram.com/"  class="pt-2"><i class="fa fa-instagram"></i></a>
                          <!-- <a href="#"><i class="fa fa-youtube-play"></i></a> -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 offset-lg-1">
                  <div class="ft-contact">
                      <h6>Contact Us</h6>
                      <ul>
                          <li>0777163510</li>
                          <li>RelaxO.Hotel@gmail.com</li>
                          <!-- <li>856 Cordia Extension Apt. 356, Lake, United State</li> -->
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3 offset-lg-1">
                  <div class="ft-newslatter">
                      <h6>New latest</h6>
                      <p>Get the latest updates and offers.</p>
                      <form action="#" class="fn-form">
                          <input type="text" placeholder="Email">
                          <button type="submit"><i class="fa fa-send"></i></button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="copyright-option">
      <div class="container">
          <div class="row">
              <div class="col-lg-7">
                  <ul>
                      <li><a href="/contact">Contact</a></li>
                      <!-- <li><a href="#">Terms of use</a></li> -->
                      <li><a href="/about">About Us</a></li>
                      <li><a href="/rooms">Rooms</a></li>
                  </ul>
              </div>
              <div class="col-lg-5">
                  <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
              </div>
          </div>
      </div>
  </div>
</footer>

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    @endsection
</body>

</html>