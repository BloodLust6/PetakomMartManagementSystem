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
                    <table class="table table-borderless" id="dataTable" width="70%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Item Name</th>
                                <th>Item Price (RM)</th>
                                <th>Quantity</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>milo.png</td>
                                <td>Milo</td>
                                <td>RM2.00</td>
                                <td>3</td>
                                <td><button type="button" class="btn btn-success">edit</button></td>
                                <td><button type="button" class="btn btn-danger">delete</button></td>
                            </tr>
                            <tr>
                                <td>air.png</td>
                                <td>air</td>
                                <td>RM2.00</td>
                                <td>3</td>
                                <td><button type="button" class="btn btn-success">edit</button></td>
                                <td><button type="button" class="btn btn-danger">delete</button></td>
                            </tr>
                            <tr>
                                <td>roti.png</td>
                                <td>roti</td>
                                <td>RM2.00</td>
                                <td>3</td>
                                <td><button type="button" class="btn btn-success">edit</button></td>
                                <td><button type="button" class="btn btn-danger">delete</button></td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary">Confirm</button>
    </section>
@endsection 