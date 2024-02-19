<?php require "views/contenido/admin/header.php"; ?>

    <a href="?controller=rol&action=create">Agregar Rol</a>
    <div>
        <table class="p-table" style="border: solid 3px;">
            <thead style="border: solid 3px;">
                <tr>
                    <th style="border: solid 3px;" class="p-th">Id</th>
                    <th style="border: solid 3px;" class="p-th">Nombre</th>
                    <th style="border: solid 3px;" class="p-th">Estado</th>
                    <th style="border: solid 3px;" class="p-th">Fecha creación</th>
                    <th style="border: solid 3px;" class="p-th">Ultima fecha modificacion</th>
                    <th style="border: solid 3px;" class="p-th">Acciones</th>
                </tr>
            </thead>
            <tbody style="border: solid 3px;">	
                <?php foreach ($roles as $rol) : ?>
                    <tr>
                        <td style="border: solid 3px;" class="p-td"><?=$rol->getRol_id() ?></td>
                        <td style="border: solid 3px;" class="p-td"><?=$rol->getNombre() ?></td>
                        <td style="border: solid 3px;" class="p-td"><?=$rol->getEstado() ?></td>
                        <td style="border: solid 3px;" class="p-td"><?=$rol->getFecha_creacion() ?></td>
                        <td style="border: solid 3px;" class="p-td"><?=$rol->getUltima_fecha_modificacion() ?></td>
                        <td class="p-td">
                            <a href="?controller=rol&action=edit&rol_id=<?=$rol->getRol_id()?>">Editar</a>
                            <a href="?controller=rol&action=destroy&rol_id=<?=$rol->getRol_id()?>">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
	    </table>
    </div>
     
<?php require "views/contenido/admin/footer.php"; ?>