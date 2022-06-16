<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">


                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php $con = mysqli_connect("localhost","root","","bdfatura");

                                $sql = "SELECT * from faturas";

                                if ($result = mysqli_query($con, $sql)) {

                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );

                                    // Display result
                                    //printf("Users : %d\n", $rowcount);
                                }

                                // Close the connection
                                mysqli_close($con);

                                echo "$rowcount";       ?></h3>
                            <p>Faturas Count</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a  class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php $con = mysqli_connect("localhost","root","","bdfatura");

                                $sql = "SELECT * from produtos";

                                if ($result = mysqli_query($con, $sql)) {

                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );

                                    // Display result
                                    //printf("Users : %d\n", $rowcount);
                                }

                                // Close the connection
                                mysqli_close($con);

                                echo "$rowcount";       ?></h3>
                            <p>Produtos Count</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a  class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php $con = mysqli_connect("localhost","root","","bdfatura");

                                $sql = "SELECT * from users";

                                if ($result = mysqli_query($con, $sql)) {

                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );

                                    // Display result
                                    //printf("Users : %d\n", $rowcount);
                                }

                                // Close the connection
                                mysqli_close($con);

                                echo "$rowcount";       ?></h3>
                            <p>User Count</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a  class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php $con = mysqli_connect("localhost","root","","bdfatura");

                                $sql = "SELECT * from ivas";

                                if ($result = mysqli_query($con, $sql)) {

                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );

                                    // Display result
                                    //printf("Users : %d\n", $rowcount);
                                }

                                // Close the connection
                                mysqli_close($con);

                                echo "$rowcount";       ?></h3>
                            <p>IVA Count</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
