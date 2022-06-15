<h2 class="text-left top-space">Utilizadores</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Username</h3></th><th><h3>Password</h3></th><th><h3>Email</h3></th><th><h3>Telefone</h3></th><th><h3>Morada</h3></th><th><h3>Código Postal</h3></th><th><h3>Localidade</h3></th><th><h3>Role</h3></th></thead>
            <tbody>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->username?></td>
                    <td><?=$user->password?></td>
                    <td><?=$user->email?></td>
                    <td><?=$user->telefone?></td>
                    <td><?=$user->morada?></td>
                    <td><?=$user->codigopostal?></td>
                    <td><?=$user->localidade?></td>
                    <td><?=$user->role?></td>
                    <td>
                        <a href="router.php?c=user&a=index"
                           class="btn btn-warning" role="button">Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
