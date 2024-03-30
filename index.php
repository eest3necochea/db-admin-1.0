<?php require_once("header.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">
                        <?php 
                            if(isset($_SESSION['dbName'])) {
                                echo "Conectado a la base de datos: " . $_SESSION['dbName'];
                            }else{
                                require_once("welcomeView.php");
                            }  
                        ?>
                    </h1>

                </div>
                <!-- /.container-fluid -->
<?php require_once("footer.php") ?>

