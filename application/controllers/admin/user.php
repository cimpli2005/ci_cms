<?php
/**
 * User
 */
class User extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		$this->data['subview'] = 'admin/user/login';
		$this->load->view('admin/_layout_modal', $this->data);
	}	
}