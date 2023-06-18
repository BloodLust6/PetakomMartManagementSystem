@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
        
</head>
<body>
    <div class="container">
        <h1>Add Vendor Form</h1>

        <form action="/create" method="GET">
        {{csrf_field()}}

            <!-- Vendor Name -->
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Vendor Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter vendor name" required>
                </div>
            </div>
            <br>

            <!-- Contact Number -->
            <div class="form-group row">
                <label for="contact_number" class="col-sm-2 col-form-label">Contact Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter contact number" required>
                </div>
            </div>
            <br>

            <!-- Type of Vendor -->
            <div class="form-group row">
                <label for="vendor_type" class="col-sm-2 col-form-label">Type of Vendor</label>
                <div class="col-sm-10">
                    <select class="form-control" id="type_vendor" name="type_vendor" required>
                        <option value="">Select vendor type</option>
                        <option value="Food">Food</option>
                        <option value="Beverage">Beverage</option>
                        <option value="Utensils">Utensils</option>
                    </select>
                </div>
            </div>
            <br>

            <!-- Vendor Item -->
            <div class="form-group row">
                <label for="vendor_item" class="col-sm-2 col-form-label">Vendor Item</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="item" name="item" placeholder="Enter vendor item" rows="3" required></textarea>
                </div>
            </div>
            <br>

            <!-- Button Container -->
            <div class="btn-container text-end">
                <a href="/VendorMainPage" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary" id="add_vendor_btn">Add Vendor</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.js"></script>
    <!-- Custom script -->

</body>
</html>
@endsection
