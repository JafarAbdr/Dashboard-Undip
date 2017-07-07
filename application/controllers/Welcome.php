<?php
defined('BASEPATH') OR exit('No direct script access allowed');
defined('APPPATH') OR exit('No direct script access allowed');
require_once APPPATH."/controllers/CI_Controller_Modified.php";

class Welcome extends CI_Controller_Modified {
	public function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('Baselayoutdashboard',array('base_url' => base_url()));
	}
}
