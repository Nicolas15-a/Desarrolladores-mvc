<?php require "views/shared/header.php";?>

   <div class="container">

    <h1 class="text-center my-3"><?php echo $data["titulo"];?></h1>
        
    <a href="" class="btn btn-primary mb-3">Crear Proyecto</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID </th>
                <th>Nombre</th>
                <th>Duracion</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data["proyectos"] as $proyecto){?>
                <tr>
                    <td><?php echo $proyecto["id"]?></td>
                    <td><?php echo $proyecto["nombre"]?></td>
                    <td><?php echo $proyecto["duracion"]?></td>
                    <td>
                        <a href="" class="btn btn-info">ver </a>
                        <a href="" class="btn btn-warning">Editar </a>
                        <a href="" class="btn btn-danger">Eliminar </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
   </div>
   <?php require "views/shared/footer.php";?>