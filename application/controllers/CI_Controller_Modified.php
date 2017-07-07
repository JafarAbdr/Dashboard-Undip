<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CI_Controller_Modified extends CI_Controller{
	protected $gateControlModel;
	protected $dateJaservFilter;
	protected $inputJaservFilter;
	public function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->loadMod('GateControlModel');
		$this->loadLib('Datejaservfilter');
		$this->loadLib('Inputjaservfilter');
		$this->gateControlModel = new GateControlModel();
		$this->dateJaservFilter = new Datejaservfilter();
		$this->inputJaservFilter = new Inputjaservfilter();
	}
	protected function isNullPost($tempName,$messageError = null, $forceExit = true){
		if(!is_bool($forceExit)) $forceExit = true;
		if($this->input->post($tempName) === NULL){
			if($messageError == null){
				exit('0'.$tempName." bernilai null");
			}else{
				exit('0'.$messageError);
			}
		}
		return $this->input->post($tempName);
	}
	protected function loadMod($nama,$return = false){
		$this->load->model($nama);
		$nama = strtolower($nama);
		$tempObject = null;
		if(isset($this->$nama))
			$tempObject = $this->$nama;
		$this->$nama = null;
		if($return)
			return $tempObject;
	}
	protected function loadLib($nama,$return = false){
		$this->load->library($nama);
		$nama = strtolower($nama);
		$tempObject = null;
		if(isset($this->$nama))
			$tempObject = $this->$nama;
		$this->$nama = null;
		if($return)
			return $tempObject;
	}
}
