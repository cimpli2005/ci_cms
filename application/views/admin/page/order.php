<div class="card-header">
	<h2>Order pages</h2>
	<p class="alert alert-info">Drag to order pages and then click 'Save'</p>
	<div id="orderResult"></div>
	<input type="button" class="btn btn-primary" id="save" value="save">
</div>

<script>
	$(function() {
		$.post('<?php echo base_url('admin/page/order_ajax'); ?>', {}, function(data){
			$('#orderResult').html(data);
		});

		$('#save').click(function(){
			oSortable = $('.sortable').nestedSortable('toArray');

			$('#orderResult').slideUp(function(){
				$.post('<?php echo base_url('admin/page/order_ajax'); ?>', { sortable: oSortable }, function(data){
					$('#orderResult').html(data);
					$('#orderResult').slideDown();
				});
			});
		});
	});
</script>