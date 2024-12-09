<?php require RUTA_APP.'/views/inc/header.php'; ?>


Inicio Bienvenido <?php 
                    if (isset($_SESSION['nombre_completo'])) {
                        echo $_SESSION['nombre_completo'];
                    }
                ?>

<?php require RUTA_APP.'/views/inc/footer.php'; ?>