<div class="row">
    <div class="col-12 table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
                           class="btn btn-warning" role="button">Cancelar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
