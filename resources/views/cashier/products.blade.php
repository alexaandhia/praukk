@extends('layout.cashierpage')

@section( 'content' )

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Produk</h4>
            <div class="table-responsive">
                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach( $produk as $pdk )
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>
                                <a href="../assets/images/produk/{{$pdk->gambar}}" target="_blank">
                                    <img src="{{ asset("assets/produk/{$pdk->gambar}") }}" width="120">
                                </a>
                            </td>
                            <td>{{$pdk->nama_produk}}</td>
                            <td>Rp. {{$pdk->harga}}</td>
                            <td>{{$pdk->stok}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection