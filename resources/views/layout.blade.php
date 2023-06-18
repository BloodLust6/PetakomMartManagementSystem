<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PETAKOM Mart Management System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-5">
                <img src="{{ URL::asset('assets/images/petakom.jpg')}}" class="rounded" width="5%" height="5%">
                <a class="navbar-brand fst-italic" href="#!">PETAKOM MART</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">[Username]</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!"><i class="bi bi-person-circle"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-pri p-3" href="#!">Home</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Account</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Payment</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Pos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">User Management</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Promotion</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Vendor</a>
                </div>
            </div>
            <!-- Page content-->
            <div class="container-fluid">
            @yield('content')    
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-black">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Petakom Mart Management System 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script type="text/javascripts" src="{{ URL::asset('assets/js/custom.js')}}"></script>
    </body>
</html>