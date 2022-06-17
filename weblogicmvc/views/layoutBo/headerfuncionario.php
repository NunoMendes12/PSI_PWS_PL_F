
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= APP_NAME ?></title>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="public/back/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="./router.php?c=backoffice&a=index" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="./router.php?c=info&a=index" class="nav-link">Dashboard </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <?php
                if(isset($username))
                {
                    echo '<a href="./router.php?c=login&a=logout" class="nav-link">Logout</a>';
                }
                ?>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="public/back/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?= APP_NAME ?></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="public/back/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <?php
                    if(isset($username))
                    {
                        echo '<a href="#" class="d-block">'.$username.'</a>';
                    }
                    ?>
                </div>
            </div>

            <div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-header"> <ion-icon name="basket-outline"> </ion-icon> Produtos</li>
                        <li class="nav-item">
                            <a href="./router.php?c=produto&a=index" class="nav-link">
                                <i class="nav-icon "></i>
                                <p>
                                    Ver Produtos
                                </p>
                            </a>
                        <li class="nav-item">
                            <a href="./router.php?c=produto&a=create    " class="nav-link">
                                <i class="nav-icon "></i>
                                <p>
                                    Criar Produtos
                                </p>
                            </a>
                        </li>
                        <li class="nav-header"> <ion-icon name="newspaper-outline"> </ion-icon> Faturas</li>
                        <li class="nav-item">

                        </li>
                        <li class="nav-item">
                            <a href="router.php?c=fatura&a=create" class="nav-link" role="button">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Emitir Faturas
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="router.php?c=fatura&a=index" class="nav-link" role="button">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Faturas Emitidas
                                </p>
                            </a>
                        </li>
                        <li class="nav-header"> <ion-icon name="body-outline"> </ion-icon> Perfils </li>
                        <li class="nav-item">
                            <a href="router.php?c=user&a=create" class="nav-link">
                                <i class="nav-icon "></i>
                                <p>
                                    Criar Perfil
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="router.php?c=user&a=index" class="nav-link">
                                <i class="nav-icon "></i>
                                <p>
                                    Ver Perfils
                                </p>
                            </a>
                        </li>
                        <li class="nav-header"> <ion-icon name="cash-outline"> </ion-icon> Taxa IVA</li>
                        <li class="nav-item">
                            <a href="router.php?c=iva&a=create" class="nav-link">
                                <i class="nav-icon "></i>
                                <p>
                                    Adicionar Taxa IVA
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="router.php?c=iva&a=index" class="nav-link">
                                <i class="nav-icon "></i>
                                <p>
                                    Ver Taxa IVA
                                </p>
                            </a>
                        </li>
                        <li class="nav-header"> <ion-icon name="business-outline"> </ion-icon> Empresa </li>
                        <li class="nav-item">
                            <a href="router.php?c=empresa&a=index" class="nav-link">
                                <i class="nav-icon "></i>
                                <p>
                                    Consultar Dados
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
    </aside>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

