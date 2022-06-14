
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6"></div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h4>
                        <b> Fatura Nº</b><br>
                        <small class="float">Date: 2/10/2014</small>
                    </h4>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <address>
                        Empresa Fatura +<br>
                        Morada<br>
                        Codigo-Postal/Localidade <br>
                        Phone: <br>
                        Email: <br>
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-1 invoice-col">

                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                    Cliente: button select<br>
                    Nome Cliente: Joaquim <br>
                    Codigo-Postal/Localidade: Leiria<br>
                    NIF:
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Ref</th>
                            <th>Descrição</th>
                            <th>Qty</th>
                            <th>Preço Unidade</th>
                            <th>Iva</th>
                            <th>Taxa</th>
                            <th>Subtotal</th>
                            <th>Editar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> </td>
                            <td>Call of Duty</td>
                            <td> Adicionar button</td>
                            <td>El snort</td>
                            <td>$64.50</td>
                            <td>.</td>
                            <td>..</td>
                            <td><button type="button" class="btn btn-success">✓</button>


                                <button type="button" class="btn btn-danger">X</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">


                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">

                    </p>
                </div>
                <!-- /.col -->
                <div class="col-6">


                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>$250.30</td>
                            </tr>
                            <tr>
                                <th>Tava IVA</th>
                                <td>$10.34</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>$265.24</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-12">
                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                        <i class="far fa-credit-card"></i> Emitir
                    </button>

                    <?php
                    if(isset($username))
                    {
                        echo '<a> Fatura Emitida por <strong>'.$username.'</a>';
                    }
                    ?>

                </div>
            </div>
        </div>
        <!-- /.invoice -->
    </div><!-- /.col -->
</div><!-- /.row -->

<!-- jQuery -->
<script src="public/back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/back/dist/js/adminlte.min.js"></script>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="public/back/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="public/back/dist/css/adminlte.min.css">


