<?php
/**
 * Page_m
 */
class Page_m extends MY_Model
{
	protected $_table_name = 'pages';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'order';
	public $rules = array();
	protected $_timestamps = FALSE;

}