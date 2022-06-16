

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
                            <form action="./router.php?c=produto&a=store" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="referencia">Referencia</label>
                                        <input type="number" class="form-control" id="referencia"  name="referencia" placeholder="Referencia" value="<?php if(isset($produto)){echo $produto->referencia; }?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="descricao">Descricao</label>
                                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="<?php if(isset($produto)){echo $produto->descricao; }?>"
                                    </div>
                                    <div class="form-group">
                                        <label for="preco">Preço</label>
                                        <input type="number" class="form-control" id="preco"  name="preco"  placeholder="Preço" value="<?php if(isset($produto)){echo $produto->preco; }?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="stock">Stock</label>
                                        <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock" value="<?php if(isset($produto)){echo $produto->stock; }?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="taxaiva">Taxa de IVA</label>
                                        <select class="form-control" id="taxaiva" name="taxaiva" >
                                            <?php if(isset($ivas)){
                                                foreach($ivas as $iva){?>
                                                    <option value="<?= $iva->id?>"> <?= $iva->percentagem; ?></option>
                                                <?php }
                                            }?>
                                        </select>
                                    </div>





                                <!-- /.card-body -->

                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-primary">Adicionar Produto</button>
                                    <a type="button" href="./router.php?c=produto&a=index" class="btn btn-warning">Cancelar</a>
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



