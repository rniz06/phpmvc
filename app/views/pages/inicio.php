<?php require RUTA_APP.'/views/inc/header.php'; ?>


<div>
<table>

    <thead>
        
            <th>Nombre</th>
            <th>Identificación</th>           
            <th>Correo</th>
            <th>Creado el:</th>
        
    </thead>

        <?php foreach($data ['usuarios'] as $usuario): ?>

    <tbody>
        
            <td><?php echo $usuario -> nombre_completo; ?></td>
            <td><?php echo $usuario -> cedula; ?></td>
            <td><?php echo $usuario -> correo; ?></td>
            <td><?php echo date('d/m/Y h:m', strtotime($usuario->creado_el)); ?><?php echo " Hs.";?></td>

            <?php endforeach; ?>    
    </tbody>

</table>
</div>

<?php require RUTA_APP.'/views/inc/footer.php'; ?>