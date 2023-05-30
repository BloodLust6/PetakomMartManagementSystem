@extends('layout')
@section('content')
    <section class="bg-dark px-3 py-3">             
                <div class="p-4 p-lg-5 bg-white rounded-3 text-center">
                    <div class="position-relative">
                    <a class="position-absolute top-0 end-0"  href="/pos"><i class="bi bi-x-lg"></i></a>
                    </div>
                    <div class="p-5 m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Payment Method</h1>
                        <a class="btn btn-secondary btn-lg p-5 m-3" href="/pay/cash">CASH</a>
                        <a class="btn btn-secondary btn-lg p-5 m-3" href="/pay/qr">QR PAY</a>
                    </div>
                </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script type="text/javascripts" src="{{ URL::asset('assets/js/custom.js')}}"></script>
    </section>
@endsection 