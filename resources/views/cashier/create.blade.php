@extends('layout.cashierpage')
@section( 'content' )

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <h2>Produk yang dipilih</h2><table style="width: 100%;">
                                    <thead></thead>
                                    <tbody>
                                                                                                                            <input type="hidden" name="shop[]" value="3;Kelapa;7000;1;7000;" hidden="">
                                            <tr>
                                                <td>Kelapa <br> <small>Rp. 7.000 X 1</small></td>
                                                <td><b>Rp. 7.000</b></td>
                                            </tr>
                                                                                                                                <input type="hidden" name="shop[]" value="8;Kopi;9000;1;9000;" hidden="">
                                            <tr>
                                                <td>Kopi <br> <small>Rp. 9.000 X 1</small></td>
                                                <td><b>Rp. 9.000</b></td>
                                            </tr>
                                                                                                                            <tr>
                                            <td style="padding-top: 20px; font-size: 20px;"><b>Total</b></td>
                                            <td class="tex-end" style="padding-top: 20px; font-size: 20px;"><b>Rp. 16.000</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input type="text" name="total" value="16000" hidden="">
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-12">Nama Pelanggan <span class="text-danger">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" name="name" class="form-control form-control-line " required="">
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-12">Alamat Pelanggan <span class="text-danger">*</span></label>
                                            <div class="col-md-12">
                                                <textarea class="form-control form-control-line " name="address" required=""></textarea>
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-12">No Telepon <span class="text-danger">*</span></label>
                                            <div class="col-md-12">
                                                <input type="number" name="no_hp" class="form-control form-control-line " onkeypress="if(this.value.length==13) return false;" required="">
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-end">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" type="submit">Pesan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>

@endsection