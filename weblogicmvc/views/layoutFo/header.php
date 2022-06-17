<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= APP_NAME ?></title>
    <!-- Favicon-->

</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="./router.php"><?php echo APP_NAME ?></a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./router.php">Home</a></li>
                <li class="nav-item mx-0 mx-lg-1">
                    <?php
                    if(isset($username))
                    {
                        echo '<a class="nav-link py-3 px-0 px-lg-3" href="./router.php?c=login&a=logout">Logout('.$username.')</a>';
                    }
                    else
                    {
                        echo '<a class="nav-link py-3 px-0 px-lg-3" href="./router.php?c=login&a=index">Login</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>