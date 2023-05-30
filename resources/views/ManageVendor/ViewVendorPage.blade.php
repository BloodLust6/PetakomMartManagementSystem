<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vendor List</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
        <!-- SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css">
        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .container {
                text-align: left;
            }

            h1 {
                font-size: 24px;
                margin-bottom: 30px;
            }
        </style>
</head>
<body>
    <div class="container">
        <h1>Vendor List</h1>

        <form>
            @csrf

            <!-- Vendor Name -->
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Vendor Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter vendor name" value="Gardenia Sdn Bhd" required>
                </div>
            </div>
            <br>

            <!-- Contact Number -->
            <div class="form-group row">
                <label for="contact_number" class="col-sm-2 col-form-label">Contact Number</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter contact number" value="+(6)03-55423228" required>
                </div>
            </div>
            <br>

            <!-- Type of Vendor -->
            <div class="form-group row">
                <label for="vendor_type" class="col-sm-2 col-form-label">Type of Vendor</label>
                <div class="col-sm-6">
                    <select class="form-control" id="vendor_type" name="vendor_type" required>
                        <option value="">Select vendor type</option>
                        <option value="Food" selected>Food</option>
                        <option value="Beverage">Beverage</option>
                        <option value="Utensils">Utensils</option>
                    </select>
                </div>
            </div>
            <br>

            <!-- Vendor Item -->
            <div class="form-group row">
                <label for="vendor_item" class="col-sm-2 col-form-label">Vendor Item</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="vendor_item" name="vendor_item" placeholder="Enter vendor item" rows="3" required>
                        Gardenia Chocolate Cream Roll
                        Gardenia Corn Cream Roll
                        Gardenia Vanilla Cream Roll
                        Gardenia Butter Sugar Cream Roll
                    </textarea>
                </div>
            </div>
            <br>

            <!-- Button Container -->
            <div class="col-sm-6">
                <div class="btn-container text-end">
                    <button type="submit" class="btn btn-danger" id="delete_vendor_btn">Delete Vendor</button>
                    <a href="/EditVendorPage" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </form>
    </div>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.js"></script>
    <script>
        document.getElementById('delete_vendor_btn').addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                icon: 'success',
                title: 'Vendor Deleted',
                text: 'Vendor has been successfully deleted!',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/VendorMainPage";
                }
            });
        });
    </script>
</body>
</html>
