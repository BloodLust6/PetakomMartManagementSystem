@extends('layout')
@section('content')
    <section class="bg-body-secondary">
        <!-- Page header with logo and tagline-->
        <div class="text-start py-3 px-3">
                    <h1 class="fw-bolder">Inventory</h1>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-1">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Item Name</th>
                                <th>Item Price (RM)</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_inventory as $inventory) 
                            <tr>
                                <td><div class="container" style="max-width: 200px;"><img src="{{$inventory->inventory_image}}" class="figure-img img-fluid rounded"></div></td>
                                <td>{{$inventory->inventory_name}}</td>
                                <td>{{$inventory->inventory_price}}</td>
                                <td class="cart-product-quantity" width="130px">
                                <div class="input-group quantity">
                                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                        <span class="input-group-text">-</span>
                                    </div>
                                    <input type="text" class="qty-input form-control" maxlength="2" max="10" value="{{$inventory->inventory_quantity}}">
                                    <div class="input-group-append increment-btn" style="cursor: pointer">
                                        <span class="input-group-text">+</span>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
            <p class="text-center fs-4 fw-semibold">TOTAL PRICE: RM</p>
        </div>
            <div class="float-end px-2 py-2">
            <a href="pos/pay" type="button" class="btn btn-primary btn-lg">PAY</a>
            </div>  
    </section>
@endsection 