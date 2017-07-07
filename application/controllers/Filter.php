<?php
defined('BASEPATH') OR exit('No direct script access allowed');
defined('APPPATH') OR exit('No direct script access allowed');
require_once APPPATH."/controllers/CI_Controller_Modified.php";

class Filter extends CI_Controller_Modified {
	public function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->helper('url');
	}
	public function Syncronize($kode="")
	{
		$this->loadLib('Filterlayout');
		$filterLayout = new Filterlayout($this->gateControlModel);
		$data = null;
		switch ($kode) {
			case "Wisuda":
				$data['tahun'] = $filterLayout->getArrayTahun(0);
				$data['fakultas'] = $filterLayout->getArrayFakultas(0);
				$data['jenjang'] = $filterLayout->getArrayjenjang(0);
				$data['angkatan'] = $filterLayout->getArrayAngkatan(0);
				$data['prodi'] = $filterLayout->getArrayProdi(0);
				break;
			default:
				// redirect();
				break;
		}
		echo json_encode($data);
	}
}
