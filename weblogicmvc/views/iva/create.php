
<form action="router.php?c=iva&a=store" method="post"

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

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Inserir Dados</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="referencia">Percentagem</label>
                                <input type="text" class="form-control" id="percentagem" placeholder="Referencia">
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descricao</label>
                                <input type="text" class="form-control" id="descricao" placeholder="Descrição">
                            </div>
                            <div class="form-group">
                                <label for="preco">Em Vigor</label>
                                <input type="text" class="form-control" id="vigor" placeholder="Preço">
                            </div>


                            <!-- /.card-body -->

                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary">Adicionar Taxa de Iva</button>
                                <a type="button" href="./router.php?c=iva&a=index" class="btn btn-warning">Cancelar</a>
                            </div>
                    </form>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">

                <!-- /.col -->
            </div>


            <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">

                    </p>
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->


        </div>
        <!-- /.invoice -->
    </div><!-- /.col -->
</div><!-- /.row -->
</form>
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


