<?php

class Migration extends Admin_Controller
{

        function __construct()
        {
        	parent::__construct();
        }

        public function index()
        {
                $this->load->library('migration');

                if ($this->migration->current() === FALSE)
                {
                        show_error($this->migration->error_string());
                } else {
                	echo "Migration worked!";
                }
        }

}