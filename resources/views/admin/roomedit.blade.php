<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="{{asset('css2/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body >

            
            @section('content')
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">edit Room</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('rooms.update',$room->id)}}">
                                        @csrf
                                        @method('PUT')
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter room name" name="name" value="{{$room->name}}" />
                                                        <label for="inputFirstName">name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="number" placeholder="Enter price" name="price"  value="{{$room->price}}"/>
                                                        <label for="inputLastName">price</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="Enter description" name="description" value="{{$room->description}}" />
                                                <label for="inputEmail">description</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputPassword" type="text" placeholder="Enter capacity" name="capacity" value="{{$room->capacity}}"/>
                                                        <label for="inputPassword">capacity</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" placeholder=" bed type" name="bed" value="{{$room->bed}}"/>
                                                        <label for="inputPasswordConfirm">bed</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 ">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" placeholder="services" name="services" value="{{$room->services}}"/>
                                                        <label for="inputPasswordConfirm">services</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 ">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" placeholder="image one" name="img" value="{{$room->img}}"/>
                                                        <label for="inputPasswordConfirm">image one</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" placeholder="image two" name="img" value="{{$room->img2}}"/>
                                                        <label for="inputPasswordConfirm">image two</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" placeholder="image three" name="img" value="{{$room->img3}}"/>
                                                        <label for="inputPasswordConfirm">image three</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit">Edit Room</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js2/scripts.js"></script>
    </body>
</html>
