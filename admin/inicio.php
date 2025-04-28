<?php include '../configuration/funtions.php'; ?>
<?php include '../includes/header.php'; ?>

<body class="bg">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <?php include('../includes/navbar.php')?>

        <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            <h5>Crear usuario</h5>     
                        </div>
                    <div class="card-body">

                        <?= menAlerta(); ?>

                        <form action="codigo.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><b>Nombre</b></label>
                                            <input type="text" class="form-control" name="nombre" placeholder=""/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><b>Correo electrónico</b></label>
                                            <input type="email" class="form-control" name="email" placeholder="__@__.com" required/>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><b>Usuario</b></label>
                                            <input type="text" class="form-control" name="usuario_nuevo">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><b>Contraseña</b></label>
                                            <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label><b>Seleccionar rol</b></label>
                                            <select name="rol" class="form-select">
                                                <option value="">Seleccionar rol</option>
                                                <option value="administrador">Administrador</option>
                                                <option value="analista">Analista</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-3 text-start">
                                    <div class="mb-3">
                                            <label><b>Inactivar</b></label>
                                                <br/>
                                                    <input type="checkbox" name="is_ban" style= "width:30px;height:30px; margin: 0 auto;">
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <br/>
                                        <button type="submit" name="agregar" class="btn btn-success float-end">Agregar</button>  
                                    </div>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>            
        </div>
        </div>

<?php include '../includes/footer.php'; ?>