@extends('layout')
@section('content')
    <section class="bg-dark px-3 py-3">             
                <div class="p-4 p-lg-5 bg-white rounded-3 text-center">
                    <div class="position-relative">
                        <div class="position-absolute top-0 end-0"><i class="bi bi-x-lg"></i></div>
                    </div>
                    <div class="p-3 m-3 m-lg-5">
                        <h1 class="display-5 pb-3 fw-bold"><i class="bi bi-check-circle"></i></h1>
                        <h3 class="display-8 fw-bold">Your details inventory is updated</h3>
                    </div>
                    <a href="/inventory" type="button" class="btn btn-primary">Confirm</a>
                </div>
    </section>
@endsection 