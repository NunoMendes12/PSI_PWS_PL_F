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
                            <th>Ação</th>


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
                            <td><a type="button" href="./router.php?c=produto&a=edit&id=<?=$produto->id?>" class="btn btn-warning">Edit</a></td>
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

">