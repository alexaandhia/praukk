@extends('layout.cashierpage')
@section( 'content' )

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light m-3">
                                <img src="{{ asset('assets/images/products/water.jpeg') }}" width="100" height="100">
                                </div>
                                <div class="card-body">
                                <h5 class="card-title mb-3 mt-3">Water Bottles</h5>
                                <p>Stok : 50</p>
                                <h6 class="mb-3">Rp. 5000</h6>
                                <center>
                                            <table>
                                                <tbody><tr>
                                                    <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="minus_2"><b>-</b></td>
                                                    <td style="padding: 0px 10px 0px 10px;" class="num" id="quantity_2">0</td>
                                                    <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="plus_2"><b>+</b></td>
                                                </tr>
                                            </tbody></table>
                                        </center>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light m-3">
                                <img src="{{ asset('assets/images/products/egg.jpeg') }}" width="100" height="100">
                                </div>
                                <div class="card-body">
                                <h5 class="card-title mb-3 mt-3">Egg</h5>
                                <p>Stok : 30</p>
                                <h6 class="mb-3">Rp. 2500</h6>
                                <center>
                                            <table>
                                                <tbody><tr>
                                                    <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="minus_2"><b>-</b></td>
                                                    <td style="padding: 0px 10px 0px 10px;" class="num" id="quantity_2">0</td>
                                                    <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="plus_2"><b>+</b></td>
                                                </tr>
                                            </tbody></table>
                                        </center>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light m-3">
                                <img src="{{ asset('assets/images/products/detergent.jpeg') }}" width="100" height="100">
                                </div>
                                <div class="card-body">
                                <h5 class="card-title mb-3 mt-3">detergent</h5>
                                <p>Stok : 20</p>
                                <h6 class="mb-3">Rp. 20000</h6>
                                <center>
                                            <table>
                                                <tbody><tr>
                                                    <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="minus_2"><b>-</b></td>
                                                    <td style="padding: 0px 10px 0px 10px;" class="num" id="quantity_2">0</td>
                                                    <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="plus_2"><b>+</b></td>
                                                </tr>
                                            </tbody></table>
                                        </center>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center align-center">
                            <a href="/cashier-create" class="btn btn-primary">Next</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection