<?php $this->load->view('components/page_head'); ?>
<div class="container">
	<section>
		<h1><?php echo anchor('', strtoupper(config_item('site_name'))); ?></h1>
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
		<?php $this->load->view('templates/' . $subview); ?>
	</div>
</div>
<?php $this->load->view('components/page_tail'); ?>