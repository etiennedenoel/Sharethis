<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ShareThis</title>
	<link rel="stylesheet" type="text/css" href="<?php echo(site_url().STYLE_DIR); ?>" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Marck+Script' rel='stylesheet' type='text/css'>
	<script src="<?= base_url() ?>web/js/modernizr.js" type="text/javascript"></script>

</head>
<body>
	<header>
		<section class="content">
			<h1>Sharethis</h1>

			<?php if($this->session->userdata('logged_in')): ?>

				<div id="deconnect">
					<?php echo anchor('connex/deconnexion','Déconnexion',array('title' => 'Se déconnecter')); ?>
				</div>
			<?php endif; ?>


		</section>

	</header>
	<div id="container">

		<?php echo $vue;?>

	</div>
	<script src="<?= base_url() ?>web/js/jquery.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>web/js/script.js" type="text/javascript"></script>
</body>
</html>
