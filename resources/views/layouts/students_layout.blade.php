<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HMS of SUSL - Students</title>

    <!-- icon library -->
    <link href="{{asset('admin_template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    {{-- css --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- js scripts --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

    <div class="content">

        <nav class="navbar navbar-dark bg-dark">

            <!-- Just an image -->

            <a class="navbar-brand" href="/">
                <img src="/images/b.png" width="30" height="30" class="d-inline-block align-top" alt="">
                 HMS of SUSL
            </a>

            <ul class="nav justify-content-center">

                <!-- home -->
                <li class="nav-item">
                    <a class="nav-link active text-light" href="{{route('home')}}">Home</a>
                </li>

                <!-- hostels -->
                <li class="nav-item">
                    <a class="nav-link active text-light" href="{{route('hostel_list')}}">Hostels</a>
                </li>

                <!-- Faculty -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Faculties
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <a class="dropdown-item" href="http://www.sab.ac.lk/app/">Applied Sciences</a>
                        <a class="dropdown-item" href="http://www.sab.ac.lk/agri/">Agricultural Sciences</a>
                        <a class="dropdown-item" href="http://www.sab.ac.lk/geo/">Geomatics</a>
                        <a class="dropdown-item" href="http://www.sab.ac.lk/med/">Medical</a>
                        <a class="dropdown-item" href="http://www.sab.ac.lk/mgmt/">Management Studies</a>
                        <a class="dropdown-item" href="http://www.sab.ac.lk/fssl/">Social Sciences & Languages</a>
                        <a class="dropdown-item" href="http://www.sab.ac.lk/tech/">Technology</a>

                    </div>
                </li><!-- End Faculty -->

                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('contact')}}">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('about')}}">About</a>
                </li>
            </ul>




            <!-- Topbar Navbar -->
            <ul class="nav justify-content-end">

                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow ">

                <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    {{Auth::user()->std_first_name}}
                </span>

                    <img class="img-profile rounded-circle" width="40" height="40" src="/images/3.png">
                </a>

                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Change Password
                    </a>

                    <div class="panel-body" align="center">
                            <a class="dropdown-item" href="{{route('admin.login')}}">
                                @component('components.who')
                                @endcomponent
                            </a>
                    </div>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>

            </li>

            </ul><!-- End of Topbar -->

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Are you sure you want to "Logout" ?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                            <form action="{{route('user.logout')}}" method="get">
                                {{csrf_field()}}

                                <button type="submit" name="logout_btn" class="btn btn-primary">Yes</button>

                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </nav>

    </div>

    <!-- content body -->
    <div class="bg-light">

    @yield('content')



        <!-- Footer -->
        <div class="bg-dark text-light">
            <footer class="page-footer font-small blue">
                <!-- Copyright -->
                <div class="footer-copyright text-center py-2">
                    <p>Copyright © 2020 - Present <br> Powered by <a href="/">HMS of SUSL</a> <br> Designed and Developed by <a href="/">Dilshan Chathuranga</a></p>
                </div><!-- Copyright -->
            </footer>
        </div>
        <!-- /.Footer -->
</div>



</body>
</html>
