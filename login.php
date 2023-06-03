<?php
require_once('c://xampp/htdocs/PathToy/view/head/header.php');
if(!empty($_SESSION['usuario'])){
    header("Location:panel_control.php");
}
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/PathToy/">
            <i class="fa-solid fa-house back-icon"> back home</i>
        </a>
    </div>
    <div class="titulo">
        Inicia sesion
    </div>
    <!--formulario de login-->

    <form action="verificar.php" method="POST" class="col-8 col-md-3  login">
        <div class="md-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email"  name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="md-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarcontraseña('password', 'eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <?php if (!empty($_GET['error'])) :   ?>
            <div class="row p-2">
                <div id="alertError" style="margin: auto;" class=" alert alert-danger mb-2" role="alert">
                    <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="row p-3">
            <div class="d-grid">
                <button type="submit" class=" btn btn-dark">Login</button>
            </div>
        </div>
    </form>
    <div class="col-8 col-md-3 mt-3 login">
        registrate <a href="signup.php">Crea una cuenta</a>
    </div>

</div>

<?php require_once('c://xampp/htdocs/PathToy/view/head/footer.php');?>