<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="robots" content="noindex,nofollow">
    <title>Penjualan - IndoApril</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://45.64.100.26:88/ukk-kasir/public/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="http://45.64.100.26:88/ukk-kasir/public/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="http://45.64.100.26:88/ukk-kasir/public/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link href="http://45.64.100.26:88/ukk-kasir/public/dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://45.64.100.26:88/ukk-kasir/public/plugins/swal2.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
            <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
            data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

            <div class="modal fade" id="modalAction" tabindex="-1" aria-labelledby="modalActionLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalTitle">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="modalBody"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="modalBtn">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="#">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="http://45.64.100.26:88/ukk-kasir/public/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="http://45.64.100.26:88/ukk-kasir/public/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="http://45.64.100.26:88/ukk-kasir/public/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                    <!-- Light Logo text -->
                    <img src="http://45.64.100.26:88/ukk-kasir/public/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="mdi mdi-menu"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                        href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                            class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="http://45.64.100.26:88/ukk-kasir/public/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                            Kasir</a>
                        <a class="dropdown-item" href="http://45.64.100.26:88/ukk-kasir/public/logout"><i class="ti-user m-r-5 m-l-5"></i>
                            Logout</a>
                    </ul>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item "> <a  class="sidebar-link waves-effect" href="http://45.64.100.26:88/ukk-kasir/public/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://45.64.100.26:88/ukk-kasir/public/product" aria-expanded="false"><i class="mdi mdi-store"></i><span class="hide-menu">Produk</span></a></li>
                <li class="sidebar-item selected"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://45.64.100.26:88/ukk-kasir/public/sale" aria-expanded="false"><i class="mdi mdi-cart"></i><span class="hide-menu">Pembelian</span></a></li>
                            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 d-flex align-items-center">
                                    <li class="breadcrumb-item"><a href="index.html" class="link"><i
                                                class="mdi mdi-home-outline fs-4"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Penjualan</li>
                                </ol>
                            </nav>
                            <h1 class="mb-0 fw-bold">Penjualan</h1>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <section>
                        <div class="text-center container">
                            <div class="row" id="product-list">
                                
                                
                            </div>
                        </div>
                    </section>
                    
                </div>
                <div class="row fixed-bottom d-flex justify-content-end align-content-center" style="margin-left: 18%; width: 83%; height: 70px; border-top: 3px solid #EEE4B1; background-color: white;">
                    <div class="col text-center" style="margin-right: 50px;">
                        <form action="http://45.64.100.26:88/ukk-kasir/public/sale/create/post" method="post">
                            <input type="hidden" name="_token" value="CcHqap52VIu6rSWWPUmDr6DUbFLGA4ja1YhT4Vbk" autocomplete="off">                            
                            <div id="shop"></div>
                            <button class="btn btn-primary">Selanjutnya</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="http://45.64.100.26:88/ukk-kasir/public/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="http://45.64.100.26:88/ukk-kasir/public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://45.64.100.26:88/ukk-kasir/public/dist/js/app-style-switcher.js"></script>

    <script src="http://45.64.100.26:88/ukk-kasir/public/plugins/swal2.js"></script>

    <!--Wave Effects -->
    <script src="http://45.64.100.26:88/ukk-kasir/public/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="http://45.64.100.26:88/ukk-kasir/public/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="http://45.64.100.26:88/ukk-kasir/public/dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="http://45.64.100.26:88/ukk-kasir/public/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="http://45.64.100.26:88/ukk-kasir/public/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="http://45.64.100.26:88/ukk-kasir/public/dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            let products = [{"id":17,"name":"jet tempur","price":8000,"stock":1,"created_at":"2024-03-29T15:16:07.000000Z","updated_at":"2024-04-04T23:38:05.000000Z","img":"20240329151607.jpg"},{"id":3,"name":"Kelapa","price":7000,"stock":3,"created_at":"2024-03-16T21:00:37.000000Z","updated_at":"2024-04-04T08:38:26.000000Z","img":"20240316210037.jpeg"}];
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

    <script>
    function notif(type, msg) {
        Swal.fire({
            icon: type,
            text: msg
        })
    }

    
    </script>

    <script>
    function HitData(urlPost, dataPost, typePost) {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: urlPost,
                data: dataPost,
                type: typePost,
                headers: {
                    'X-CSRF-TOKEN': "CcHqap52VIu6rSWWPUmDr6DUbFLGA4ja1YhT4Vbk"
                },
                success: (response) => {
                    resolve(response)
                },
                error: (error) => {
                    reject(error)
                }
            })
        })
    }
  </script>
</body>

</html>
