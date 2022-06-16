<h2 class="text-left top-space">Book Detail</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Name</h3></th><th><h3>ISBN</h3></th><th><h3>User Actions</h3></th></thead>
            <tbody>
                <tr>
                    <td><?=$book->id?></td>
                    <td><?=$book->name?></td>
                    <td><?=$book->isbn?></td>
                    <td>
                        <a href="router.php?c=book&a=index"
                           class="btn btn-warning" role="button">Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

