<?php
defined('BASEPATH') OR exit('No direct script access allowed');
defined('APPPATH') OR exit('No direct script access allowed');
require_once APPPATH."/controllers/CI_Controller_Modified.php";

class Jumlahpeminat extends CI_Controller_Modified {
	public function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->helper('url');
	}
	public function Graph()
	{
		$_POST['fakultas'] = 'FAKULTAS KEDOKTERAN';
		$tahun = null;
		if($this->input->post('tahun') !== null){
			$tahun = intval($this->input->post('tahun'));
			if($tahun > 9999 || $tahun < 1000){
				$tahun = null;
			}
		}
		$fakultas = null;
		if($this->input->post('fakultas') !== null){
			$fakultas = $this->input->post('fakultas');
			//echo $this->inputJaservFilter->nameFacultyFiltering($fakultas)[1]; 
			if(!$this->inputJaservFilter->nameFacultyFiltering($fakultas)[0]){
				$fakultas = null;
			}
		}
		$jenjang = null;
		if($this->input->post('jenjang') !== null){
			$jenjang = $this->input->post('jenjang');
			if(!$this->inputJaservFilter->jenjangFiltering($jenjang)[0]){
				$jenjang = null;
			}
		}
		$this->loadLib('Graphlayout');
		$graphLayout = new Graphlayout($this->gateControlModel);
		$ObjectDBModel = $graphLayout->getGraph(0,array("tahun"=>$tahun,"fakultas"=>$fakultas,"jenjang"=>$jenjang));
		while($ObjectDBModel->getNextCurSor()){
			echo $ObjectDBModel->getFakultas()." ".$ObjectDBModel->getWisudaTahun()."<br>";
		}
	}
}
