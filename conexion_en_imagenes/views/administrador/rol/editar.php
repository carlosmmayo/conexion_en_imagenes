<?php require "views/contenido/admin/header.php"; ?>

    <form action="?controller=rol&action=update" method="post">
            <div class="form-cont-p">
                <div>
                    <input type="hidden" name="rol_id" value="<?=$rol->getRol_id()?>"/>
                </div>
                <div class="form-reg form2">	
                    <div>
                        <input type="text" name="nombre" id="nombre" value="<?=$rol->getNombre()?>" placeholder="Nombre" title="Nombre"/>
                    </div>
                </div>
                <div class="form-reg">
                    <!-- <input type="submit" value="Enviar"> -->
                    <button type="submit">Enviar</button>
                </div>
            </div>
    </form>

<?php require "views/contenido/admin/footer.php"; ?>