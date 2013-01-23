<section class="content">
	<article>
		<?php echo form_open('curling/ajouter'); ?>
			<section id="choixImage">
				<?php foreach($srcImg as $img): ?>
					<div class="imagesChoix">
						<?php
							$imgChoix = array('name' => 'img', 'value' => $img, 'class' => 'uneImage', 'checked' => 'checked');
							echo form_radio($imgChoix);
						?>
						<?php echo form_label('<img src="' . $img . '" />', 'img'); ?>
			    	</div>
			    <?php endforeach; ?>
			    <div class="controls">
				    <?php
					    $next = array('id' => 'prevI', 'content' => '<');
						echo form_button($next);
						$prev = array('id' => 'nextI', 'content' => '>');
						echo form_button($prev);
					?>
			    </div>
				<input type="hidden" name="description" value="<?php echo $description; ?>" >
				<input type="hidden" name="lien" value="<?php echo $lien; ?>">
				<input type="hidden" name="titre" value="<?php echo $title; ?>">


			</section>
			<section class="contenuArticle">
				<h3><?php echo $title; ?></h3>
				<p class="lien"><?php echo $lien; ?></p>
				<p><?php echo $description; ?></p>
			</section>
			<input id="submitChoix" type="submit" value="Envoyer" name="choix">
		<?php echo form_close(); ?>
	</article>
</section>
