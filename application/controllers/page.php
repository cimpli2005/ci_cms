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
		// Fetch the page template
		$this->data['page'] = $this->page_m->get_by(array('slug' => (string) $this->uri->segment(1)), TRUE);
		//echo '<pre>' . $this->db->last_query() . '</pre>';
		//dump($this->data['page']);
		count((array)$this->data['page']) || show_404(current_url());

		// Fetch the page data
		$method = '_' . $this->data['page']->template;
		if (method_exists($this, $method)) {
			$this->$method();
		} else {
			log_message('error', 'Could not load template ' . $method . ' in file' . __FILE__ . ' at line ' . __LINE__);
			show_error('Could not load template ' . $method);
		}
		

		// Load the view
		$this->data['subview'] = $this->data['page']->template;
		$this->load->view('_main_layout', $this->data);
	}

	private function _page()
	{
		dump('Welcome from page template');
	}

	private function _homepage()
	{
		$this->load->model('article_m');
		$this->db->where('pubdate <=', date('Y-m-d'));
		$this->db->limit(6);
		$this->data['articles'] = $this->article_m->get();
	}

	private function _news_archive()
	{
		$this->load->model('article_m');
		// Count all articles
		$this->db->where('pubdate <=', date('Y-m-d'));
		$count = $this->db->count_all_results('articles');		

		// Setup pagination
		$perpage = 4;
		if ($count > $perpage) {
			$this->load->library('pagination');

			$config['base_url'] = base_url($this->uri->segment(1) . '/');
			$config['total_rows'] = $count;
			$config['per_page'] = $perpage;
			$config['uri_segment'] = 2;			
			$this->pagination->initialize($config);			
			$this->data['pagination'] = $this->pagination->create_links();
			$offset = $this->uri->segment(2);
		} else {
			$this->data['pagination'] = '';
			$offset = 0;
		}
		dump($this->data['pagination']);

		// Fetch article
		$this->db->where('pubdate <=', date('Y-m-d'));
		$this->db->limit($perpage, $offset);
		$this->data['articles'] = $this->article_m->get();
		dump(count($this->data['articles']));
		echo '<pre>' . $this->db->last_query() . '</pre>';
	}
}