<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= APP_NAME . " | " . APP_COMPANY ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugin/fontawesome-free/css/all.min.css') ?>" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugin/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugin/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugin/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    <!-- Date Range Picker -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugin/daterangepicker/daterangepicker.css') ?>" />
    <!-- sweet alert 2-->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugin/sweetalert2/sweetalert2.min.css') ?>" />
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-inverse">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="<?= base_url('assets/img/sanoh1-2.jpg') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light text-primary"><?= APP_NAME ?></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link text-primary" href="#">
                            <i class="fas fa-sign-in-alt"></i> Login

                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-secondary"> Material Out List <small><?= date('Y-m-d ') ?></SMALL></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"><?= APP_COMPANY ?></a></li>
                                <li class="breadcrumb-item text-primary"><?= date('Y-m-d ') ?> <span id="clock"></span></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="card card-outline card-success">
                                <div class="card-header">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="scLabel" class="col-md-1 col-form-label text-right">Scan Label</label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control form-control-lg" id="scType" name="scType" value="OUT" readonly>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control form-control-lg" id="scWarehouse" name="scWarehouse" value="WHRM01" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control form-control-lg" id="scLabel" name="scLabel" placeholder="Please Scan Material Label" autofocus>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h4>Material Out Summary</h4>
                                    <div class="table responsive">
                                        <table class="table table-striped table-hover" id="tbScan">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Item Code</th>
                                                    <th>Part No</th>
                                                    <th>Description</th>
                                                    <th>Qty</th>
                                                    <th>Unit</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; <?= date('Y') ?> <a href="http://www.sanohindonesia.co.id/">PT. Sanoh Indonesia</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/adminlte/plugin/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/adminlte/plugin/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/adminlte/js/adminlte.min.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?= base_url('assets/adminlte/plugin/sweetalert2/sweetalert2.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugin/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugin/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugin/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugin/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugin/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugin/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var span = document.getElementById('clock');

            function time() {
                var d = new Date();
                var s = d.getSeconds();
                var m = d.getMinutes();
                var h = d.getHours();
                span.textContent =
                    ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
            }

            setInterval(time, 1000);

            var tbScan = $('#tbScan').DataTable({
                dom: "Bfrtip",
                "ajax": "<?= base_url("/data-scan") ?>/" + $("#scType").val() + "/" + $("#scWarehouse").val(),
                "dataSrc": "data",
                buttons: [{
                    extend: 'excelHtml5',
                    title: `Scan_Out_File`
                }, ],
                stateSave: true,
                columns: [
                    {
                        data: "sc_date",
                    },
                    {
                        data: "sc_part",
                    },
                    {
                        data: "itm_part",
                    },
                    {
                        data: "itm_dsca",
                    },
                    {
                        data: "sc_qty",
                    },
                    {
                        data: "itm_unit",
                    },
                    
                ],
                order: [
                    [0, "desc"],
                ],
            });

            $('#scLabel').blur(function() {
                var type = $('#scType').val();
                var wh = $('#scWarehouse').val();
                var label = $('#scLabel').val();

                if (label == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please Scan Label!'
                    });
                }

                $.ajax({
                    url: '<?= base_url('/scan-proses') ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        type: type,
                        wh: wh,
                        label: label
                    },
                    success: function(response) {
                        $("#scLabel").val("");
                        console.log(response);
                        if (response.success == false) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: response.msg
                            });
                        } else {
                            tbScan.ajax.reload(null, false);
                            $("#scLabel").focus();
                        }
                    }
                })
            });
        })
    </script>
</body>

</html>