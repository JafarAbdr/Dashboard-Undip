<?php
defined('BASEPATH') OR exit('No direct script access allowed');
defined('APPPATH') OR exit('No direct script access allowed');
require_once APPPATH."/controllers/CI_Controller_Modified.php";

class Profilelulusan extends CI_Controller_Modified {
	public function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->helper('url');
	}
	public function index()
	{
		$tahun = null;
		if($this->input->post('tahun') !== null){
			$tahun = intval($this->input->post('tahun'));
			if()
		}
		echo "";
	}
	public function getTable
}
