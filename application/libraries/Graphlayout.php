<?php
defined('BASEPATH') OR exit('No direct script access allowed');
defined('APPPATH') OR exit('No direct script access allowed');
require_once APPPATH."libraries/LibrarySupport.php";
class Graphlayout extends LibrarySupport{
  protected $gateControlModel;
  public function __CONSTRUCT(GateControlModel $gateControlModel=null){
    parent::__CONSTRUCT();
    $this->gateControlModel = $gateControlModel;
  }
  public function getGraph($kode = 0,$arrayS){
    $tempObjectDBModel;
    switch ($kode) {
      case 0:
        $tempObjectDBModel=$this->getConfigurationWisuda($this->gateControlModel->loadObjectDB('Wisuda'),$arrayS);
        break;

      default:
        # code...
        break;
    }
    //var_dump($arrayS);
    //echo "hasilnya = ".$tempObjectDBModel->getCaseData()." = ".$tempObjectDBModel->getWhere();
    //exit;
    return $this->gateControlModel->executeObjectDB($tempObjectDBModel)->takeData();
  }
  protected function getConfigurationWisuda(ObjectDBModel $ObjectDBModel, $arrayS=null){
    $ObjectDBModel->setCaseData(6);
    $ObjectDBModel->setWhere(6);
    if(!is_array($arrayS)){
      return $ObjectDBModel;
    }
    if(array_key_exists('tahun', $arrayS) && !is_null($arrayS['tahun'])){
      $ObjectDBModel->setWisudaTahun($arrayS['tahun'],true);
      $ObjectDBModel->setWhere(7);
      if(array_key_exists('fakultas', $arrayS) && !is_null($arrayS['fakultas'])){
        $ObjectDBModel->setFakultas($arrayS['fakultas'],true);
        $ObjectDBModel->setWhere(8);
        if(array_key_exists('angkatan', $arrayS) && !is_null($arrayS['angkatan'])){
          $ObjectDBModel->setMasuk($arrayS['masuk'],true);
          $ObjectDBModel->setWhere(9);
          if(array_key_exists('prodi', $arrayS) && !is_null($arrayS['prodi'])){
            $ObjectDBModel->setProdi($arrayS['prodi'],true);
            $ObjectDBModel->setWhere(10);
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(11);
            }
          }else{
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(22);
            }
          }
        }else{
          if(array_key_exists('prodi', $arrayS) && !is_null($arrayS['prodi'])){
            $ObjectDBModel->setProdi($arrayS['prodi'],true);
            $ObjectDBModel->setWhere(23);
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(24);
            }
          }else{
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(25);
            }
          }
        }
      }else{
        if(array_key_exists('angkatan', $arrayS) && !is_null($arrayS['angkatan'])){
          $ObjectDBModel->setMasuk($arrayS['masuk'],true);
          $ObjectDBModel->setWhere(26);
          if(array_key_exists('prodi', $arrayS) && !is_null($arrayS['prodi'])){
            $ObjectDBModel->setProdi($arrayS['prodi'],true);
            $ObjectDBModel->setWhere(27);
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(28);
            }
          }else{
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(29);
            }
          }
        }else{
          if(array_key_exists('prodi', $arrayS) && !is_null($arrayS['prodi'])){
            $ObjectDBModel->setProdi($arrayS['prodi'],true);
            $ObjectDBModel->setWhere(30);
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(31);
            }
          }else{
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(32);
            }
          }
        }
      }
    }else{
      if(array_key_exists('fakultas', $arrayS) && !is_null($arrayS['fakultas'])){
        $ObjectDBModel->setFakultas($arrayS['fakultas'],true);
        $ObjectDBModel->setWhere(12);
        if(array_key_exists('angkatan', $arrayS) && !is_null($arrayS['angkatan'])){
          $ObjectDBModel->setMasuk($arrayS['masuk'],true);
          $ObjectDBModel->setWhere(13);
          if(array_key_exists('prodi', $arrayS) && !is_null($arrayS['prodi'])){
            $ObjectDBModel->setProdi($arrayS['prodi'],true);
            $ObjectDBModel->setWhere(14);
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(15);
            }
          }else{
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(33);
            }
          }
        }else{
          if(array_key_exists('prodi', $arrayS) && !is_null($arrayS['prodi'])){
            $ObjectDBModel->setProdi($arrayS['prodi'],true);
            $ObjectDBModel->setWhere(34);
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(35);
            }
          }else{
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(36);
            }
          }
        }
      }else{
        if(array_key_exists('angkatan', $arrayS) && !is_null($arrayS['angkatan'])){
          $ObjectDBModel->setMasuk($arrayS['masuk'],true);
          $ObjectDBModel->setWhere(16);
          if(array_key_exists('prodi', $arrayS) && !is_null($arrayS['prodi'])){
            $ObjectDBModel->setProdi($arrayS['prodi'],true);
            $ObjectDBModel->setWhere(17);
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(18);
            }
          }else{
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(37);
            }
          }
        }else{
          if(array_key_exists('prodi', $arrayS) && !is_null($arrayS['prodi'])){
            $ObjectDBModel->setProdi($arrayS['prodi'],true);
            $ObjectDBModel->setWhere(19);
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(20);
            }
          }else{
            if(array_key_exists('jenjang', $arrayS) && !is_null($arrayS['jenjang'])){
              $ObjectDBModel->setJenjang($arrayS['jenjang'],true);
              $ObjectDBModel->setWhere(21);
            }
          }
        }
      }
    }
    return $ObjectDBModel;
  }
}
