    <h2 class="text-left top-space">Fatura Index</h2>
    <h2 class="top-space"></h2>
    <div class="row">
     <div class="col-sm-12">
     <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Data</h3></th><th><h3>Valor Total</h3></th><th><h3>Genero</h3></th><th><h3>User Actions</h3></th></thead>  
     <tbody>
     <?php foreach ($faturas as $fatura) { ?>
        <tr>
        <td><?=$fatura->id?></td>
        <td><?=$fatura->data?></td>
        <td><?=$fatura->valortotal?></td>

        <td>
           <a href="route.php?c=book&a=show&id=<?=$book->id ?>"
    class="btn btn-info" role="button">Show</a>
        <a href="route.php?c=book&a=edit&id=<?=$book->id ?>"
    class="btn btn-info" role="button">Edit</a>
    <a href="route.php?c=chapter&a=index&id=<?=$book->id ?>" class="btn
btn-info" role="button">Chapters</a>
     <a href="route.php?c=book&a=delete&id=<?=$book->id ?>"
    class="btn btn-warning" role="button">Delete</a>
     </td>
     </tr>
     <?php } ?>
     </tbody>
     </table>
     </div>
     <div class="col-sm-6">
     <h3>Criar fatura</h3>
        <p>
        <a href="route.php?c=book&a=create" class="btn btn-info"
    role="button">New</a>
        </p>
        </div>
    </div> <!-- /row -->


