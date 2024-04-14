@extends('layout.cashierpage')
@section( 'content' )

<div class="row" id="product-list">
</div>
<script>
        $(document).ready(function() {
            var products = {!! json_encode($produk) !!};         
            $.each(products, function(key, item) {
                $("#product-list").append(`
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light">
                                <img src="/storage/product/`+item.img+`" class="w-50" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">`+ item.name +`</h5>
                                <p>Stok `+ item.stock +`</p>
                                <h6 class="mb-3">Rp. `+ item.price +`</h6>
                                <p id="price_`+item.id+`" hidden>`+ item.price +`</p>
                                <center>
                                    <table>
                                        <tr>
                                            <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="minus_`+item.id+`"><b>-</b></td>
                                            <td style="padding: 0px 10px 0px 10px;" class="num" id="quantity_`+item.id+`">0</td>
                                            <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="plus_`+item.id+`"><b>+</b></td>
                                        </tr>
                                    </table>
                                </center>
                                <br>
                                <p>Sub Total <b><span id="total_`+item.id+`">Rp. 0</span></b></p>
                            </div>
                        </div>
                    </div>
                `);
                
                $('#plus_'+item.id).click(function (e) { 
                    const elem=$(this).prev();
                    const getId=elem.attr("id").split("_")[1]; // To find the price id
                    const price=$("#price_"+getId).html(); // price amount
                    let qty = parseInt(elem.html())+1;
                    elem.html(qty);
                    let total = price*qty;
                    $("#total_"+item.id).html("Rp. "+price*qty); // set total, assume total is qty * price
                    if (qty > 0) {
                        let shop = ``+item.id+`;`+item.name+`;`+item.price+`;`+qty+`;`+total+`;`;
                        $('#shop').append(`
                            <input name="shop[]" value="`+shop+`" type="text" hidden />
                        `)
                    }
                });
                $('#minus_'+item.id).click(function (e) { 
                    const elem=$(this).next();
                    const getId=elem.attr("id").split("_")[1]; // To find the price id
                    const price=$("#price_"+getId).html(); // price amount
                    let qty = parseInt(elem.html());
                    if(qty>0){
                        qty--;
                    }
                    elem.html(qty);
                    let total = price*qty;
                    $("#total_"+item.id).html("Rp. "+price*qty); // set total, assume total is qty * price
                    if (qty > 0) {
                        let shop = ``+item.id+`;`+item.name+`;`+item.price+`;`+qty+`;`+total+`;`;
                        $('#shop').append(`
                            <input name="shop[]" value="`+shop+`" type="text" hidden />
                        `)
                    }
                });
            })
        })
    </script>

@endsection