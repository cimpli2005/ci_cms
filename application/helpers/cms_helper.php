<?php
function btn_edit($uri)
{
	return anchor($uri, '<i class="fas fa-user-edit"></i>');
}

function btn_delete($uri)
{
	return anchor($uri, '<i class="fas fa-user-slash"></i>', array(
		'onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
	));
}