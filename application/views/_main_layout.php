<?php $this->load->view('components/page_head'); ?>
<div class="container">
	<section>
		<h1><?php echo config_item('site_name'); ?></h1>
	</section>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="nav nav-pills">
				<!--
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Link 1</a>
						<a class="dropdown-item" href="#">Link 2</a>
						<a class="dropdown-item" href="#">Link 3</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
			-->
			<?php echo get_menu($menu); ?>
			</ul>
		</div>
	</nav>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-9"><h2>Main content</h2></div>
		<div class="col-md-3"><h2>Recent news</h2></div>
	</div>
</div>
<?php $this->load->view('components/page_tail'); ?>