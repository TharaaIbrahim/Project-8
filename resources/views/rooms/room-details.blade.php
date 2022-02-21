@extends('layouts.footer')
@extends('layouts.header')
@section('content')

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="{{$room->img}}" alt="{{$room->name}}">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{$room->img}}" alt="{{$room->name}}">
                            </div> 
                            <div class="col-4">
                                <img src="{{$room->img2}}" alt="{{$room->name}}">
                            </div>
                            <div class="col-4">
                                <img src="{{$room->img3}}" alt="{{$room->name}}">
                            </div>
                        </div>
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{$room->name}}</h3>
                               
                            </div>
                            <h2>{{$room->price}}JD<span>/Pernight</span></h2>
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
                                    <tr>
                                        <td class="r-o">Description:</td>
                                        <td>{{$room->description}}</td>
                                    </tr>
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                   
                    <div class="review-add">
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>Your Reservation</h3>
                        @if(!empty(Session::get('success')))
                           <div class="alert alert-success"> {{ Session::get('success') }}</div>
                            @endif
                        @php
                        $datetime = date_create()->format('Y-m-d H:i:s');
                        @endphp
                        <form method="post" action="{{route('rooms.book',$room->id)}}">
                        @csrf
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="date"  min=<?php echo $datetime ?> id="date-in" name="check_in" required>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="date" min=<?php echo $datetime ?>  id="date-out" name="check_out" required>
                            </div>
                          
                            <div class="check-date">
                                <label for="user">Phone:</label>
                                <input type="tel" id="phone" name="phone" required>
                                <i class="icon_phone"></i>
                            </div>
                            <div class="check-date">
                                <label for="number">Persons</label>
                                <input type="number" id="number" name="number" required>
                               
                            </div>
                            @if(!empty(Session::get('message')))
                           <div class="alert alert-danger"> {{ Session::get('message') }}</div>
                            @endif
                            <button type="submit">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>

           
        </div>
    </section>


   

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

    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    @endsection
</body>

</html>