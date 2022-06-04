<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bulma.min.css') ?>">
</head>
<body>

	<?= $this->include('layout/navbar') ?>
	<?= $this->include('layout/header') ?>

	<div class="container">
		<?= $this->renderSection('content') ?>	
	</div>
	

	<?= $this->include('layout/footer') ?>

</body>
</html>