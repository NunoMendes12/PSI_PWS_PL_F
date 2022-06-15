<h2 class="text-left top-space">Utilizador Edit</h2>
<h2 class="top-space"></h2>
<br>
<form action="router.php?c=user&a=update&id=<?= $user->id ?>" method="post">
    <div class="mb-3">
        <label for="username" class="form-label"> Username</label>
        <input type="text" class="form-control" name="username" value="<?= $user->username ?>"> <?php if(isset($user->errors)){ echo $user->errors->on('name'); }?>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" name="password" value="<?= $user->password ?>">
    </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" value="<?= $user->email ?>">
    </div>

      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telefone" value="<?= $user->telefone ?>">
    </div>

      <div class="mb-3">
        <label for="morada" class="form-label">Morada</label>
        <input type="text" class="form-control" name="morada" value="<?= $user->morada ?>">
    </div>

      <div class="mb-3">
        <label for="codigopostal" class="form-label">Código Postal</label>
        <input type="text" class="form-control" name="codigopostal" value="<?= $user->codigopostal ?>">
    </div>

     <div class="mb-3">
        <label for="localidade" class="form-label">Localidade</label>
        <input type="text" class="form-control" name="localidade" value="<?= $user->localidade ?>">
    </div>

       <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <input type="text" class="form-control" name="role" value="<?= $user->role ?>">
    </div>

    <button type="submit" class="btn btn-primary"> Enviar </button>
    <a href="router.php?c=user&a=index" class="btn btn-info" role="button"> Cancelar</a>
</form>


