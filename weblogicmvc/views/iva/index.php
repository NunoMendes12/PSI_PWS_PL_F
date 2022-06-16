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
                        <b>Taxas de Iva</b><br>
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
                            <th>Percentagem</th>
                            <th>Descricao</th>
                            <th>Em Vigor</th>
                            <th> Ação </th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($ivas as $iva) { ?>
                        <tr>
                            <td><?=$iva->id?></td>
                            <td><?=$iva->percentagem?></td>
                            <td><?=$iva->descricao?></td>
                            <td><?=$iva->vigor?></td>
                            <td><a type="button" href="./router.php?c=iva&a=edit&id=<?=$iva->id?>" class="btn btn-warning">Edit</a> </td>
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
                    <a type="button" href="./router.php?c=iva&a=create" class="btn btn-success">Criar Taxa Iva </a>
                </div>
            </div>
        </div>
        <!-- /.invoice -->
    </div><!-- /.col -->
</body><!-- /.row -->

