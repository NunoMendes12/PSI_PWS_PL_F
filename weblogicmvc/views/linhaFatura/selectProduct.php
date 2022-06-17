    <div class="card-body p-0">
        <table class="table table-responsive-md">
            <thead>
            <tr>
                <th>Referencia</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Stock</th>
                <th>Iva</th>
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
                    <td><?=$produto->iva->percentagem?> </td>
                    <td>
                        <a href="./router?c=fatura&a=create&idProduto=<?=$produto->id?>&idfatura=<?=$fatura->id?>" class="btn-sm text-decoration-none btn-warning" >Selecionar</a>
                    </td>
                </tr>
            <?php   } ?>
            </tbody>
        </table>
    </div>
</div>
