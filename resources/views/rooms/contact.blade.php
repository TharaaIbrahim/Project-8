@extends('layouts.footer')
@extends('layouts.header')
@section('content')


    <!-- Contact Section Begin -->
    <section class="contact-section spad" >
        <div class="container">
            <div class="row" style="display:flex;justify-content:center">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <p >Here are the best hotel booking sites, including recommendations for international travel and for finding low-priced hotel rooms.</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>Amman</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>0777777777</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>RelaxO.Hotel@gmail.com</td>
                                </tr>
                                <!-- <tr>
                                    <td class="c-o">Fax:</td>
                                    <td>+(12) 345 67890</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            <div class="map">
                <iframe
                src="https://maps.google.com/maps?q=amman%20jordan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    height="470" style="border:0;" allowfullscreen=""></iframe>
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