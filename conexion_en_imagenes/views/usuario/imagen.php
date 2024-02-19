<?php require "views/contenido/header.php"; ?>
                <div class="cont-formul">
                    <form class="form-img" action="?controller=imagen&action=store" method="post" enctype="multipart/form-data">
                        <div class="file">
                            <p>Agregar foto</p>
                            <input type="file" name="imagen" required />
                        </div>
                        <div>
                                <!-- <input type="submit" value="Enviar"> -->
                            <button>Guardar</button>
                        </div>
                    </form>
                </div>            
<?php require "views/contenido/footer.php"; ?>