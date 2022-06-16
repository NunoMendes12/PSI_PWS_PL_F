

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
                            <form action="router.php?c=user&a=store" method="post" >
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text"  id="username" name="username" placeholder="Username" class="form-control" value="<?php if(isset($user)){echo $user->username; }?>">


                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text"   class="form-control" placeholder="password" id="password" name="password" value="<?php if(isset($user)){echo $user->password; }?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?php if(isset($user)){echo $user->email; }?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" class="form-control"  placeholder="Telefone"  id="telefone" name="telefone" value="<?php if(isset($user)){echo $user->telefone; }?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="morada">Morada</label>
                                        <input type="text" class="form-control" placeholder="Morada" id="morada" name="morada" value="<?php if(isset($user)){echo $user->morada; }?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="codigopostal">Código Postal</label>
                                        <input type="text" class="form-control" placeholder="Codigo-Postal" id="codigopostal" name="codigopostal" value="<?php if(isset($user)){echo $user->codigopostal; }?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="localidade">Localidade</label>
                                        <input type="text" class="form-control" placeholder="Localidade" id="localidade" name="localidade" value="<?php if(isset($user)){echo $user->localidade; }?>">
                                     </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Role</label>
                                        <select class="form-group" id="role" name="role">
                                            <option value="administrador">Administrador</option>
                                            <option value="funcionario">Funcionario</option>
                                            <option value="cliente">Cliente</option>
                                            <?php if(isset($user->errors)){ echo $user->errors->on('role');} ?>
                                        </select>
                                    </div>
                                
                                <!-- /.card-body -->

                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-primary">Adicionar Utilizador</button>
                                    <a type="button" href="./router.php?c=user&a=index" class="btn btn-warning">Cancelar</a>
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

