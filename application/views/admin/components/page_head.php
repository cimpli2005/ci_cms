<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">	
	<link rel="stylesheet" href="<?php echo base_url('public/css/admin.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap-datepicker.min.css'); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<title><?php echo $meta_title; ?></title>	
	<script src="https://kit.fontawesome.com/5389bc31fe.js" crossorigin="anonymous"></script>	
	<!-- include summernote css/js -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">	
	<?php if(isset($sortable) && $sortable === TRUE): ?>	
	<script src="<?php echo base_url('public/js/jquery.mjs.nestedSortable.js'); ?>"></script>
	<?php endif; ?>
</head>
<body>