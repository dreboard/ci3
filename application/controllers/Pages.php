<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	/**
	 * Load features page
	 *
	 * @return void
	 */
	public function features()
   {
	   $this->ci_smarty->assign("elapsed_time", "30");
	   $this->ci_smarty->view('welcome');
   }
}