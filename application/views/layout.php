<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ShareThis</title>
	<link rel="stylesheet" type="text/css" href="<?php echo(site_url().STYLE_DIR); ?>" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo(site_url().STYLE_PRINT); ?>" media="print" />
    <script src="<?= base_url() ?>web/js/modernizr-2.6.2.min.js" type="text/javascript"></script>
	<meta name="viewport" content="initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Marck+Script' rel='stylesheet' type='text/css'>

</head>
<body>
	<div class="wrapper">
		<div id="container">
			<header>
				<section>

					<?php echo anchor('curling/lister','<h1>Sharethis</h1>',array('title' => 'ShareThis')); ?>


					<?php if($this->session->userdata('logged_in')): ?>

						<div id="deconnect">
							<?php echo anchor('connex/deconnexion','<i class="icon-logout"></i> Déconnexion',array('title' => 'Se déconnecter')); ?>
						</div>
					<?php endif; ?>


				</section>

			</header>


			<?php echo $vue;?>
			<div class="push"></div>
		</div>
		<footer>
			<section class="content">
				<h4>ShareThis - Conception Etienne Denoel &copy;</h4>
			</section>
		</footer>
	</div>

	<script src="<?= base_url() ?>web/js/jquery.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>web/js/script.js" type="text/javascript"></script>
</body>
</html>
