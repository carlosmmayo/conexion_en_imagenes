<?php require "views/contenido/admin/header.php"; ?>

    <form action="?controller=rol&action=store" method="post">
            <div class="form-cont-p">
                <div class="form-reg form2">	
                    <div>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" title="Nombre"/>
                    </div>
                </div>
                <div class="form-reg">
                    <!-- <input type="submit" value="Enviar"> -->
                    <button type="submit">Enviar</button>
                </div>
            </div>
    </form>

<?php require "views/contenido/admin/footer.php"; ?>