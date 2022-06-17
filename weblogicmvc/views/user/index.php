
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
                        <b> Lista de Utilizadores</b><br>
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
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Morada</th>
                            <th>Código Postal</th>
                            <th>Localidade</th>
                            <th>Role</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?=$user->id?></td>
                            <td><?=$user->username?></td>
                            <td><?=$user->password?> </td>
                            <td><?=$user->email?></td>
                            <td><?=$user->telefone?></td>
                            <td><?=$user->morada?></td>
                            <td><?=$user->codigopostal?></td>
                            <td><?=$user->localidade?></td>
                             <td><?=$user->role?></td>
                            <td><a type="button" href="./router.php?c=user&a=edit&id=<?=$user->id?>" class="btn btn-warning">Edit</a></td>
                            <td> <a type="button" href="router.php?c=user&a=show&id=<?=$user->id ?>" class="btn btn-warning" >Show</a></td>
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
                    <a type="button" href="./router.php?c=user&a=create" class="btn btn-success">Criar Utilizadores </a>
                </div>
            </div>
        </div>
        <!-- /.invoice -->
    </div><!-- /.col -->
</body><!-- /.row -->



