<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	/**
	 *
	 */
	public function index2()
	{
		$this->ci_smarty->assign("title", "Testing Smarty");
		$this->ci_smarty->assign("description", $this->lang->line('site_smarty_description'));
		$this->ci_smarty->assign("description", $this->lang->line('site_sample_data'));
		$this->ci_smarty->view('index');

	}
	public function index()
	{
		$this->ci_smarty->assign("elapsed_time", "30");
		$this->ci_smarty->view('welcome');
	}
}
