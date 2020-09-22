<?php $this->load->view('admin/components/page_head.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 mt-5">
			<div class="card">
				<?php $this->load->view($subview); // subview is set in controller ?>
				<div class="card-footer">
					&copy; <?php echo $meta_title; ?>
				</div>
			</div>			
		</div>
	</div>
</div>


<?php $this->load->view('admin/components/page_tail.php'); ?>