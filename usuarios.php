<?php require_once("header.php") ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
    <?php
        if(isset($_SESSION['resultDB'])){
            require_once("tableView.php");
        }
    ?>
    </div>
    <!-- /.container-fluid -->
<?php require_once("footer.php") ?>
