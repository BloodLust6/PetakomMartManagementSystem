@extends('layout')
@section('content')
<section class="bg-dark px-3 py-3">             
                <div class="p-4 p-lg-5 bg-white rounded-3 text-center">
                    <div class="position-relative">
                        <a class="position-absolute top-0 end-0"  href="/inventory"><i class="bi bi-x-lg"></i></a>
                    </div>
                    <div class="p-3 m-3 m-lg-5">
                    <!--Form-->
                    <form action="/inventory/{{$data_inventory->inventory_id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="input-group mb-3 display-8">
                        <span class="input-group-text">Item Image</span>
                        <input id="inventory_image" name="inventory_image" type="text" class="form-control form-control-lg bg-body-secondary" value="{{$data_inventory->inventory_image}}">
                    </div>
                    <div class="input-group mb-3 display-8">
                        <span class="input-group-text">Item Name</span>
                        <input id="inventory_name" name="inventory_name" type="text" class="form-control form-control-lg bg-body-secondary" value="{{$data_inventory->inventory_name}}">
                    </div>
                    <div class="input-group mb-3 display-8">
                        <span class="input-group-text">Item Price</span>
                        <input id="inventory_price" name="inventory_price" type="text" class="form-control form-control-lg bg-body-secondary" value="{{$data_inventory->inventory_price}}">
                    </div>
                    <div class="input-group mb-3 display-8">
                        <span class="input-group-text">Item Quantity</span>
                        <input id="inventory_quantity" name="inventory_quantity" type="text" class="form-control form-control-lg bg-body-secondary" value="{{$data_inventory->inventory_quantity}}">
                    </div>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                    </form>
                </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script type="text/javascripts" src="{{ URL::asset('assets/js/custom.js')}}"></script>
    </section>
@endsection 