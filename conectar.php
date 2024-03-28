<?php require_once("header.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Conectar</h1>
                    
                    <form class="formConectarDB" method="POST" action="php/conexionDB.php">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="inputServidorDB"
                                            placeholder="ServidorDB" name="ServidorDB" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="inputUsuarioDB"
                                            placeholder="UsuarioDB" name="UsuarioDB" required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="inputPasswDB"
                                            placeholder="PasswDB" name="PasswDB">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="inputBaseDB"
                                            placeholder="BaseDB" name="BaseDB" required>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Conectar">                            
 
                            </form>

                </div>
                <!-- /.container-fluid -->
<?php require_once("footer.php") ?>