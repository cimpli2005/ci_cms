<?php $this->load->view('components/page_head'); ?>
<div class="container">
	<section>
		<h1><?php echo config_item('site_name'); ?></h1>
	</section>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Link
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a href="#" class="dropdown-item">Link</a>
						<a href="#" class="dropdown-item">Link</a>
						<a href="#" class="dropdown-item">Link</a>
					</div>
				</li>
				<li class="nav-item"><a href="#" class="nav-link">Link</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Link</a></li>
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