<?php require "views/contenido/header.php"; ?>
				<div class="contenido-p-img">
					<div class="contenido-img">
						<?php foreach ($todos as $imagen) : ?>
							<img class="img" src="assets/uploads/<?=$imagen->getImagen() ?>" />
						<?php endforeach; ?>
					</div>
				</div> 
<?php require "views/contenido/footer.php"; ?>