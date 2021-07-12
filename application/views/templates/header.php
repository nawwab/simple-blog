<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="icon" href="<?= base_url('assets/icons/tabicon.png')?>">

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/33f8bea938.js" crossorigin="anonymous"></script>

	<title><?= $view_title ?></title>
	<style>
		body {
			font-family: 'Roboto', sans-serif;
		}

		.vh-100 {
			min-height: 100vh;
		}

		.article-card:hover {
			background-color: ghostwhite;
		}

		.article-card>a {
			text-decoration: none;
			color: currentColor;
		}
	</style>
</head>

<body>
	<div class="container-xl text-black-50">
		<div class="row vh-100">
