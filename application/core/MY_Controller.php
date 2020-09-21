<?php
/**
 * MY_Controller
 */
class MY_Controller extends CI_Controller
{
	public $data = array();
	function __construct()
	{
		parent::__construct();
		$this->set_timezone();
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('site_name');
		$this->data['date'] = date('Y/m/d');
	}

	public function set_timezone()
	{
		date_default_timezone_set("Asia/Jakarta");
	}
}