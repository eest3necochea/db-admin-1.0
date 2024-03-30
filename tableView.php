                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">DataTable <?php echo $_SESSION['tableName'] ?></h6>
                            <button id="botonAdd" class="botonAdd">+</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <?php 
                                                foreach($_SESSION['resultDB'][0] as $key=>$value){
                                                    echo "<th>$key</th>";
                                                }
                                            ?>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <?php 
                                                foreach($_SESSION['resultDB'][0] as $key=>$value){
                                                    echo "<th>$key</th>";
                                                }
                                            ?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                            foreach($_SESSION['resultDB'] as $row){
                                                echo "<tr class='fila'>";
                                                foreach($row as $value){
                                                    echo "<td>$value</td>";
                                                }
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" id="botonUpdateModal" class="btn btn-primary d-none" data-toggle="modal" data-target="#updatetModal"></button>
                    <button type="button" id="botonInsertModal" class="btn btn-primary d-none" data-toggle="modal" data-target="#insertModal"></button>
                
                    <!-- Update Registro Modal-->
                    <div class="modal fade" id="updatetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar información</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="php/updateDB.php" method="POST">
                                        <input type="text" class="d-none" name="id" id="exampleInputId">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="text" name="passw" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="updateCheck" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Acepto modificar los registros</label>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <input id="botonUpdate" type="submit" class="btn btn-primary d-none" value="Update" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Insert Registro Modal-->
                    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Insertar información</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="php/insertDB.php" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Dirección email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contraseña</label>
                                            <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNombre1">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" id="exampleInputNombre1" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputApellido1">Apellido</label>
                                            <input type="text" name="apellido" class="form-control" id="exampleInputApellido1" placeholder="Apellido">
                                        </div>                         
                                        <div class="form-group">
                                            <label for="exampleInputDireccion1">Dirección</label>
                                            <input type="text" name="direccion" class="form-control" id="exampleInputDireccion1" placeholder="Dirección">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCiudad1">Ciudad</label>
                                            <input type="text" name="ciudad" class="form-control" id="exampleInputCiudad1" placeholder="Ciudad">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSexo1">Sexo</label>
                                            <input type="text" name="sexo" class="form-control" id="exampleInputSexo1" placeholder="Sexo">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSexo1">Fecha Nacimiento</label>
                                            <input type="date" name="fnacimiento" class="form-control" id="exampleInputSexo1" placeholder="Sexo">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectProvincia1">Provincia</label>
                                            <select required name="provincia" class="form-control" id="exampleSelectProvincia1">
                                                <option value="">Elige Provincia</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="CiudadAutonoma">Ciudad Autónoma de Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                                <option value="BuenosAires">Buenos Aires</option>
                                            </select>    
                                        </div>    
                                        <div class="form-group">
                                            <label for="exampleOtrosDatos1">Otros Datos</label>
                                            <textarea name="otrosDatos" class="form-control" id="exampleOtrosDatos1" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="updateCheck" class="form-check-input" id="exampleCheck2">
                                            <label class="form-check-label" for="exampleCheck2">Acepto insertar los registros</label>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <input id="botonInsert" type="submit" class="btn btn-primary d-none" value="Insert" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>