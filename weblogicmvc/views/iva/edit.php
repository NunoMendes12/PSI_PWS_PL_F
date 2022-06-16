


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
                        <h3 class="card-title">Editar IVA</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="router.php?c=iva&a=update&id=<?=$iva->id?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Percentagem</label>
                                <input type="text" class="form-control" id="percentagem" name="percentagem" value="<?php if(isset($iva)){echo $iva->percentagem; }?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" value="<?php if(isset($iva)){echo $iva->descricao; }?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Em vigor</label>
                                <select class="form-group" id="vigor" name="vigor">
                                    <option disabled selected value> escolha uma opção </option>
                                    <option value="sim">Sim</option>
                                    <option value="nao">Nao</option>
                                    <?php if(isset($iva->errors)){ echo $iva->errors->on('vigor');} ?>

                                    <input type="text" disabled class="form-control" value="Taxa IVA atual: <?= $iva->vigor ?> ">
                                </select>
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



