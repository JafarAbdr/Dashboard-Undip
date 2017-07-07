<?php
defined('BASEPATH') OR exit('No direct script access allowed');
defined('APPPATH') OR exit('No direct script access allowed');
require_once APPPATH."libraries/LibrarySupport.php";
class Filterlayout extends LibrarySupport{
  protected $gateControlModel;
  public function __CONSTRUCT(GateControlModel $gateControlModel=null){
    parent::__CONSTRUCT();
    $this->gateControlModel = $gateControlModel;
  }
  //tahun
  public function getTahun($kode = 0){
    $tempObjectDBModel;
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->gateControlModel->loadObjectDB('Wisuda');
        $tempObjectDBModel->setWhere(1);
        $tempObjectDBModel->setCaseData(1);
        break;

      default:
        # code...
        break;
    }
    return $this->gateControlModel->executeObjectDB($tempObjectDBModel)->takeData();
  }
  public function getArrayTahun($kode = 0){
    $tempObjectDBModel;
    $tempArray = array();
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->getTahun($kode);
        $i = 0;
        while($tempObjectDBModel->getNextCurSor()){
          $tempArray[$i] = $tempObjectDBModel->getWisudTahun();
          $i++;
        }
        break;

      default:
        # code...
        break;
    }
    return $tempArray;
  }
  //fakultas
  public function getFakultas($kode = 0){
    $tempObjectDBModel;
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->gateControlModel->loadObjectDB('Wisuda');
        $tempObjectDBModel->setWhere(2);
        $tempObjectDBModel->setCaseData(2);
        break;

      default:
        # code...
        break;
    }
    return $this->gateControlModel->executeObjectDB($tempObjectDBModel)->takeData();
  }
  public function getArrayFakultas($kode = 0){
    $tempObjectDBModel;
    $tempArray = array();
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->getFakultas($kode);
        $i = 0;
        while($tempObjectDBModel->getNextCurSor()){
          $tempArray[$i] = $tempObjectDBModel->getFakultas();
          $i++;
        }
        break;

      default:
        # code...
        break;
    }
    return $tempArray;
  }
  //jenjang
  public function getJenjang($kode = 0){
    $tempObjectDBModel;
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->gateControlModel->loadObjectDB('Wisuda');
        $tempObjectDBModel->setWhere(3);
        $tempObjectDBModel->setCaseData(3);
        break;

      default:
        # code...
        break;
    }
    return $this->gateControlModel->executeObjectDB($tempObjectDBModel)->takeData();
  }
  public function getArrayJenjang($kode = 0){
    $tempObjectDBModel;
    $tempArray = array();
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->getJenjang($kode);
        $i = 0;
        while($tempObjectDBModel->getNextCurSor()){
          $tempArray[$i] = $tempObjectDBModel->getJenjang();
          $i++;
        }
        break;

      default:
        # code...
        break;
    }
    return $tempArray;
  }
  //angkatan
  public function getAngkatan($kode = 0){
    $tempObjectDBModel;
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->gateControlModel->loadObjectDB('Wisuda');
        $tempObjectDBModel->setWhere(4);
        $tempObjectDBModel->setCaseData(4);
        break;

      default:
        # code...
        break;
    }
    return $this->gateControlModel->executeObjectDB($tempObjectDBModel)->takeData();
  }
  public function getArrayAngkatan($kode = 0){
    $tempObjectDBModel;
    $tempArray = array();
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->getAngkatan($kode);
        $i = 0;
        while($tempObjectDBModel->getNextCurSor()){
          $tempArray[$i] = $tempObjectDBModel->getMasuk();
          $i++;
        }
        break;

      default:
        # code...
        break;
    }
    return $tempArray;
  }
  //prodi
  public function getProdi($kode = 0){
    $tempObjectDBModel;
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->gateControlModel->loadObjectDB('Wisuda');
        $tempObjectDBModel->setWhere(5);
        $tempObjectDBModel->setCaseData(5);
        break;

      default:
        # code...
        break;
    }
    return $this->gateControlModel->executeObjectDB($tempObjectDBModel)->takeData();
  }
  public function getArrayProdi($kode = 0){
    $tempObjectDBModel;
    $tempArray = array();
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->getProdi($kode);
        $i = 0;
        while($tempObjectDBModel->getNextCurSor()){
          $tempArray[$i] = $tempObjectDBModel->getProdi();
          $i++;
        }
        break;

      default:
        # code...
        break;
    }
    return $tempArray;
  }
}
