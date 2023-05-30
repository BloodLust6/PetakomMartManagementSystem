@extends('layout')
@section('content')
    <section class="bg-dark px-3 py-3">             
                <div class="p-4 p-lg-5 bg-white rounded-3 text-center">
                    <div class="position-relative">
                    <a class="position-absolute top-0 end-0"  href="/pos"><i class="bi bi-x-lg"></i></a>
                    </div>
                    <div class="p-3 m-3 m-lg-5">
                        <h1 class="display-5 pb-5 fw-bold">Cash</h1>
                        <h3 class="display-8 fw-bold">Enter Amount Paid</h3>
                        <div class="input-group mb-3 display-8">
                        <span class="input-group-text">RM</span>
                        <input type="text" class="form-control form-control-lg bg-body-secondary">
                        </div>
                        <a href="/pay/balance" type="button" class="btn btn-primary">Confirm</a>
                    </div>
                </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script type="text/javascripts" src="{{ URL::asset('assets/js/custom.js')}}"></script>
    </section>
@endsection 