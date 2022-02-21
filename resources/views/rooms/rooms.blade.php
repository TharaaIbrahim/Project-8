@extends('layouts.footer')
@extends('layouts.header')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="./home.html">Home</a>
                            <span>Rooms</span>
                        </div>
                        <div class="row search" style=" width:100%;margin:2% auto 0% auto;">
                       <form method="GET" action="{{route('rooms.search')}}" style="display:flex;justify-content:center">
                      <input style="width:100%!important;margin-right:1rem;" type="text" name="search" value="" placeholder="Search" class="form-control" id="search" />
                     <button type="submit" style="background-color:#dea973;color:white" class="btn btn">Search</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                      @foreach($rooms as $room)
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{$room->img}}" alt="{{$room->name}}">
                        <div class="ri-text">
                            <h4>{{$room->name}}</h4>
                            <h3>{{$room->price}}JD<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max Person {{$room->capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{$room->bed}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>{{$room->services}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{route('rooms.show',$room->id)}}" class="primary-btn">More Details</a>
                        </div>
                    </div>
                  
                </div>
                @endforeach
            
          
              
            </div>
        </div>
    </section>
   
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    @endsection

      <!-- Js Plugins -->
      <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
      <script src="{{asset('js/jquery-ui.min.js')}}"></script>
      <script src="{{asset('js/jquery.slicknav.js')}}"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
