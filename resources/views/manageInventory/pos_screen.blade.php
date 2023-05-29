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
                            <tr>
                                <td>milo.png</td>
                                <td>Milo</td>
                                <td>RM2.00</td>
                                <td class="cart-product-quantity" width="130px">
                                <div class="input-group quantity">
                                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                        <span class="input-group-text">-</span>
                                    </div>
                                    <input type="text" class="qty-input form-control" maxlength="2" max="10" value="1">
                                    <div class="input-group-append increment-btn" style="cursor: pointer">
                                        <span class="input-group-text">+</span>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>air.png</td>
                                <td>air</td>
                                <td>RM2.00</td>
                                <td class="cart-product-quantity" width="130px">
                                <div class="input-group quantity">
                                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                        <span class="input-group-text">-</span>
                                    </div>
                                    <input type="text" class="qty-input form-control" maxlength="2" max="10" value="1">
                                    <div class="input-group-append increment-btn" style="cursor: pointer">
                                        <span class="input-group-text">+</span>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>roti.png</td>
                                <td>roti</td>
                                <td>RM2.00</td>
                                <td class="cart-product-quantity" width="130px">
                                <div class="input-group quantity">
                                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                        <span class="input-group-text">-</span>
                                    </div>
                                    <input type="text" class="qty-input form-control" maxlength="2" max="10" value="1">
                                    <div class="input-group-append increment-btn" style="cursor: pointer">
                                        <span class="input-group-text">+</span>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
            <p class="text-center fs-4 fw-semibold">TOTAL PRICE: RM</p>
        </div>
            <div class="float-end px-2 py-2">
            <button type="button" class="btn btn-primary btn-lg">PAY</button>
            </div>  
    </section>
@endsection 