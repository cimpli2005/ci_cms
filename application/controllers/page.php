<?php
/**
 * Page
 */
class Page extends Frontend_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('page_m');
	}
	
	public function index()
	{		
		// Fetch the data page
		$this->data['page'] = $this->page_m->get_by(array('slug' => (string) $this->uri->segment(1)), TRUE);
		//echo '<pre>' . $this->db->last_query() . '</pre>';
		//dump($this->data['page']);
		count((array)$this->data['page']) || show_404(current_url());
		$this->load->view('_main_layout', $this->data);
	}
}