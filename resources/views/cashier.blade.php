<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>POS | Cashier</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ asset('storage/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('storage/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('storage/bower_components/Ionicons/css/ionicons.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('storage/dist/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('storage/dist/css/skins/_all-skins.min.css') }}">

        <style>
            .container{
                min-width: 100%!important;
            }
            .border-dashed {
                border-style: dashed;
            }
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ asset('storage/index2.html') }}" class="navbar-brand"><b>POS</b></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Product List <span class="sr-only">(current)</span></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="{{ asset('storage/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="{{ asset('storage/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">

                <!-- Main content -->
                <section class="content">
                    <div class="col-md-8">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Recently Added Products</h3>

                                <div class="box-tools">
                                    <div class="input-group input-group-sm hidden-xs" style="width: 500px;">
                                        <input type="text" id="barcodeLookup" name="table_search" class="form-control pull-right" placeholder="input barcode..." autocomplete="off">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="height: 550px; overflow-y: scroll">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="border-dashed">
                                            <th style="width: 10px">#</th>
                                            <th>Description</th>
                                            <th style="width: 40px">Quantity</th>
                                            <th>Price</th>
                                            <th>Disc. %</th>
                                            <th>Sub Total</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_data">
                                       @include('cashier-data')
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="javascript:void(0)" class="uppercase">View All Products</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box box-success">
                            <div class="box-body bg-black">
                                <div class="header_price border p-0">
                                    <h5>Amount Due</h5>
                                    <p class="pb-0 mr-2" style="float: right; font-size: 40px;">₱ <span id="totalP">0.00</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <button class="btn btn-block btn-info">TOTAL</button>
                            <button class="btn btn-block btn-warning">HOLD</button>
                            <button class="btn btn-block btn-danger">CANCEL</button>
                            <button class="btn btn-block btn-success">CHECKOUT</button>
                        </div>

                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Purchase details</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="totalItems" class="col-sm-4 control-label">Total Items</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="totalItems" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="discount" class="col-sm-4 control-label">Discount %</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="discount">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="paymentAmount" class="col-sm-5 control-label">Payment Amount</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="paymentAmount">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="change" class="col-sm-4 control-label">Change</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="change" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="container">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2023 <a href="#">PointOfSales</a>.</strong> All rights
                reserved.
            </div>
            <!-- /.container -->
        </footer>
    </div>
    <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="{{ asset('storage/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('storage/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('storage/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('storage/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('storage/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('storage/dist/js/demo.js') }}"></script>


        <script>
            var input = document.getElementById('barcodeLookup');
            input.focus();
            input.select();
            const url = '{{ route('cashier_list') }}';

            function totalPurchase(){
                var sum = 0;
                if ($('#totalP').html() == 0) {
                    console.log('no money');
                }
                $('.subtotal').each(function(){
                    var num = $(this).attr('stotal');
                    if(num != 0){
                        sum += parseFloat(num);
                    }
                });
                $('#totalP').html(sum);
                sukli();
            };

            function scannerSound(){
                const audio = new Audio();
                audio.src = '{{ asset('storage/media/beep.mp3') }}'
                audio.play();
            };

            function totalItem(){
                var tItems = $('#table_data >tr').length;
                $('#totalItems').val(tItems);
            };
            
            function sukli() {
                var payment = $('#paymentAmount').val();
                var fee = $('#totalP').html();
                var sum = ''+payment - fee+''

                console.log(payment);
                console.log(fee)

                $('#change').val('₱ '+sum);
            }


            {{-- Delete Data --}}
            $('body').on('keyup', '#paymentAmount', function () {
                sukli();
            });


            input.addEventListener("keyup", (event) => {
                if (event.keyCode === 13) {
                    scannerSound();
                    var barcode = $('#barcodeLookup').val();

                    $.ajax({
                        url: '{{ route('cashier_list') }}'+"?barcode="+barcode,
                        success:function (data) {
                            console.log(data);
                            if(data !== '')
                            {
                                var table = document.getElementById("table_data");
                                var row = table.insertRow(0);
                                var cell1 = row.insertCell(0);
                                var cell2 = row.insertCell(1);
                                var cell3 = row.insertCell(2);
                                var cell4 = row.insertCell(3);
                                var cell5 = row.insertCell(4);
                                var cell6 = row.insertCell(5);
                                var cell7 = row.insertCell(6);
                                cell1.innerHTML = "1";
                                cell2.innerHTML = data.product_name;
                                cell3.innerHTML = '<input id="'+$('#barcodeLookup').val()+'-q"  type="number" value="1">';
                                cell4.innerHTML = '₱ <span id="'+$('#barcodeLookup').val()+'-p">'+data.price+'</span>';
                                cell5.innerHTML = "0%";
                                cell6.innerHTML = '₱ <span class="subtotal" stotal="'+(1 * data.price)+'">'+(1 * data.price)+'</span>';
                                cell7.innerHTML = '<span class="badge badge-danger">X</span>';
                                totalPurchase();
                                totalItem();
                            }
                        }
                    });
                    document.getElementById('barcodeLookup').value = '';
                }
            });

        </script>
    </body>
</html>
