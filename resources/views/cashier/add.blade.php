@extends('layout.cashierpage')
@section( 'content' )

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center container">
                    <div class="row">
                        <div></div>
                        @foreach($produk as $pdk)
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light m-3">
                                <a href="../assets/images/produk/{{$pdk->gambar}}" target="_blank">
                                    <img src="{{ asset("assets/produk/{$pdk->gambar}") }}" width="100" height="100">
                                </a>
                                </div>
                                <div class="card-body">
                                <h5 class="card-title mb-3 mt-3">{{$pdk->nama_produk}}</h5>
                                <p>Stok : {{$pdk->stok}}</p>
                                <h6 class="mb-3">Rp. {{$pdk->harga}}</h6>
                                <center>
                                            <table>
                                                <tbody><tr>
                                                    <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="minus_2"><b>-</b></td>
                                                    <td style="padding: 0px 10px 0px 10px;" class="num" id="quantity_2">0</td>
                                                    <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="plus_2"><b>+</b></td>
                                                </tr>
                                            </tbody></table>
                                        </center>
                                        <p>Sub Total <b><span id="total_{{$pdk->id}}">Rp. 0</span></b></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
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