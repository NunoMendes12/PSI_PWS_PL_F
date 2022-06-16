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
                        <b> Lista de Produtos</b><br>
                    </h4>
                </div>
                <!-- /.col -->
            </div>


            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Referencia</th>
                            <th>Descricao</th>
                            <th>Preço</th>
                            <th>Stock</th>
                            <th>TaxaIva</th>
                            <th>Iva_ID</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($produtos as $produto) { ?>
                        <tr>
                            <td><?=$produto->id?></td>
                            <td><?=$produto->referencia?></td>
                            <td><?=$produto->descricao?></td>
                            <td><?=$produto->preco?></td>
                            <td><?=$produto->stock?></td>
                            <td><?=$produto->taxaiva?></td>
                            <td><?=$produto->iva_id?></td>


                            <?php } ?>
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
            </div>
            <div class="row no-print">
                <div class="col-12">
                    <a type="button" href="./router.php?c=produto&a=create" class="btn btn-success">Criar Produtos </a>
                </div>
            </div>
        </div>
        <!-- /.invoice -->
    </div><!-- /.col -->
</body><!-- /.row -->

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