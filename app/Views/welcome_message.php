<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= esc($title) ?></title>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> -->
</head>
<body>
	
	<?= $this->include('layout/navbar') ?>

	<section class="hero is-link">
		<div class="hero-body">
			<p class="title">
				<?= esc($title) ?>
			</p>
			<p class="subtitle">
				Link subtitle
			</p>
		</div>
	</section>

	<section class="section is-medium">
		contenido
	</section>

</body>
</html>