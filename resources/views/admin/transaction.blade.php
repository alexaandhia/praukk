@extends('layout.adminpage')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Transaksi</h4>
            <div class="table-responsive">
                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pelanggan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Total</th>
                            <th scope="col">Kasir</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Julie</td>
                            <td>17-03-2023</td>
                            <td>Rp. 15.000</td>
                            <td>Kasir 1</td>
                            <td>
                                <a href="" class="btn waves-effect waves-light btn-rounded btn-warning">Lihat</a>
                                <a href="" class="btn waves-effect waves-light btn-rounded btn-info">Unduh Bukti</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Belle</td>
                            <td>17-03-2023</td>
                            <td>Rp. 30.000</td>
                            <td>Kasir 3</td>
                            <td>
                            <button type="button" class="btn waves-effect waves-light btn-rounded btn-warning" data-toggle="modal"
                                        data-target="#scrollable-modal">Detail</button>
                                <a href="" class="btn waves-effect waves-light btn-rounded btn-info">Unduh Bukti</a>
                            </td>
                        </tr>
                    </tbody>

                    <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollableModalTitle">Detail Penjualan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Nama: Belle</p>
                                                <p>No. Hp: 081562778391</p>
                                                <p>Alamat: Rumah</p>
                                                <br>
                                                <div class="row mb-3 text-center">
                                                <div class="col-3"><b>Produk</b></div>
                                                <div class="col-3"><b>Qty</b></div>
                                                <div class="col-3"><b>Harga</b></div>
                                                <div class="col-3"><b>Subtotal</b></div>
                                                </div>
                                                <div class="row mb-1">
                                                <div class="col-3">Air Mineral</div>
                                                <div class="col-3">2</div>
                                                <div class="col-3">Rp. 5000</div>
                                                <div class="col-3">Rp. 10000</div>
                                                </div>
                                                <div class="row mb-1">
                                                <div class="col-3">Detergent</div>
                                                <div class="col-3">1</div>
                                                <div class="col-3">Rp. 20000</div>
                                                <div class="col-3">Rp. 20000</div>
                                                </div>
                                                <div class="row text-center mt-3">
                                                <div class="col-9 "><b>Total</b></div>
                                                <div class="col-3 "><b>Rp. 30000</b></div>
                                                </div>
                                            </div>
                                            <div class="row text-center mt-3">
                                                <div class="col-12">
                                                <p> Tanggal Transaksi: 17-03-2023 <br> Oleh: Kasir 3 </p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection