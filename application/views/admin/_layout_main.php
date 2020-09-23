<?php $this->load->view('admin/components/page_head.php') ?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?php echo base_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url('admin/dashboard'); ?>">Dashboard <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('admin/page'); ?>">Pages</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('admin/user'); ?>">Users</a>
				</li>
			</ul>			
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php $this->load->view($subview); ?>
			</div>
			<div class="col-md-3">
				<section>
					<?php echo mailto('cimpli2005@googlemail.com', '<i class="fas fa-envelope"></i> cimpli2005@googlemail.com'); ?><br>
					<?php echo anchor('admin/user/logout', '<i class="fas fa-power-off"></i> logout'); ?>
				</section>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/components/page_tail.php') ?>