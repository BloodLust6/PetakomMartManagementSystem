<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage Vendor</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .container {
                text-align: center;
            }

            h1 {
                font-size: 24px;
                margin-bottom: 30px;
            }

            .btn-container {
                display: flex;
                justify-content: center;
            }

            .btn-container .btn {
                margin: 0 10px;
            }
        </style>
</head>
<body>
    <div class="container">
        <h1>Manage Vendor</h1>

        <div class="btn-container">
            <a href="/AddVendorPage" class="btn btn-primary">Add Vendor List</a>
            <a href="/ViewVendorPage" class="btn btn-primary">View Vendor List</a>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script type="text/javascripts" src="{{ URL::asset('assets/js/custom.js')}}"></script>
</body>
</html>
