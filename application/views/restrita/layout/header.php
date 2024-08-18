<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<?php echo isset($titulo) ? '<title>' . $titulo . '</title>' : '<title>Admin | Painel de Controle</title>'; ?>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo site_url('public/restrita/'); ?>assets/css/app.min.css">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo site_url('public/restrita/'); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo site_url('public/restrita/'); ?>assets/css/components.css">
	<!-- Custom style CSS -->
	<link rel="stylesheet" href="<?php echo site_url('public/restrita/'); ?>assets/css/custom.css">
	<link rel='shortcut icon' type='image/x-icon' href='<?php echo site_url('public/restrita/'); ?>assets/img/favicon.ico' />

	<?php if (!empty($styles)): ?>
		<?php foreach ($styles as $style): ?>
			<link rel="stylesheet" href="<?php echo site_url('public/restrita/'); ?><?php echo $style; ?>">
		<?php endforeach; ?>
	<?php endif; ?>

</head>

<body>
	<div class="loader"></div>
		<div id="app">
