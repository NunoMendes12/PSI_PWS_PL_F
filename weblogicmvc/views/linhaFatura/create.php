
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- Main content -->
                <div class="invoice p-2 mb-2">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h3>
                                <i class="fas fa-globe"></i> <br>
                            </h3>
                            <h5><?= $fatura->date?></h5>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            Empresa:
                            <address>
                                <strong><?= $empresa->designacao_social ?></strong><br>
                                <?= $empresa->morada ?><br>
                                <?= $empresa->codigo_postal ?>, <?= $empresa->localidade ?><br>
                                Telefone: <?= $empresa->telefone ?><br>
                                Email: <?= $empresa->email ?><br>
                                Nif: <?= $empresa->nif ?>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Cliente:
                            <address>
                                <?= $fatura->user->username ?><br>
                                <?= $fatura->user->morada ?><br>
                                <?= $fatura->user->codigo_postal ?>, <?= $fatura->user->localidade ?><br>

                            </address>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Produto</th>
                                    <th>Quantidade</th>
                                    <th>Valor Unitario</th>
                                    <th>Valor Iva</th>
                                    <th>Subtotal</th>
                                    <th>Açao</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(isset($linhasFatura)){
                                    foreach ($linhasFatura as $linhaFatura) { ?>
                                        <tr>
                                            <td><?=$linhaFatura->produto->descricao?></td>
                                            <td><?=$linhaFatura->quantidade?></td>
                                            <td>€ <?=number_format($linhaFatura->valor_unitario,2)?></td>
                                            <td>€ <?=number_format($linhaFatura->valor_iva,2)?></td>
                                            <td>€ <?=$linhaFatura->quantidade * ($linhaFatura->valor_iva + $linhaFatura->valor_unitario)?></td>
                                            <td>
                                                <a href="?c=linhaFatura&a=edit&idLinhaFatura=<?=$linhaFatura->id?>" class="btn-sm text-decoration-none btn-warning" >Editar</a>
                                            </td>
                                        </tr>
                                    <?php }
                                }
                                if(isset($produto)){?>
                                    <tr>
                                        <form action="./router?c=linhaFatura&a=store&idFatura=<?=$fatura->id?>&idProduto=<?=$produto->id?>" method="post">
                                            <td><?=$produto->descricao?></td>
                                            <td><input type="number" value="0" id="quantidade" name="quantidade" min="1" max="<?=$produto->stock?>"></td>
                                            <td>€ <input readonly id="valorunitario" name="valorunitario" value="<?=number_format($produto->preco,2)?>"></td>
                                            <td>€ <input readonly id="valoriva" name="valoriva" value="<?=number_format(($produto->preco * ($produto->iva->percentagem/100)),2)?>"></td>
                                            <td>...</td>
                                            <td>
                                                <button type="submit" class="btn-sm text-decoration-none btn-success" ><i class="fas fa-check"></i></button>
                                        </form>
                                        <a href="./router?c=linhaFatura&a=create&idFatura=<?=$fatura->id?>" type="submit" class="btn-sm text-decoration-none btn-danger" >apagar</a>

                                        </td>
                                    </tr>
                                    <?php
                                }else{?>
                                    <tr>
                                        <td colspan="7">
                                            <a href="./?c=linhaFatura&a=selectProduct&idFatura=<?=$fatura->id?>" class="btn-sm text-decoration-none btn-warning" >Selecionar Produto</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-6">

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td><?=($fatura->valor_total)?></td>
                                    </tr>
                                    <tr>
                                        <th>IVA </th>
                                        <td><?=($fatura->iva_total)?></td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td><?=($fatura->iva_total + $fatura->valor_total)?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<br><br>