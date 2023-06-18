@extends('layout')
@section('content')
    <section class="bg-white px-3 py-3">
        <div class="container d-flex flex-column align-items-center">
            <h1 class="text-center pt-5 mt-5">Manage Vendor</h1>

            <div class="btn-container d-flex justify-content-center gap-3">
                <a href="/AddVendorPage" class="btn btn-primary">Add Vendor List</a>
                <a href="/ViewVendorPage" class="btn btn-primary">View Vendor List</a>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/custom.js') }}"></script>
@endsection
