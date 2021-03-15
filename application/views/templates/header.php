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

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/33f8bea938.js" crossorigin="anonymous"></script>

	<!-- from favicon generator -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/favicon-16x16.png">
	<link rel="manifest" href="<?= base_url() ?>/site.webmanifest">
	<link rel="mask-icon" href="<?= base_url() ?>/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<title><?= $view_title; ?></title>
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
