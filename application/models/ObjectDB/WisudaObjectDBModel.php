<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class WisudaObjectDBModel extends ObjectDBModel {
	public function __construct(){
		parent::__construct();
		$this->tempTableName = 'wisuda1216';
		$this->tempDataArrayIndexPrimary = array(
			''
		);
		$this->tempDataArrayCase = array(
			"*",
			"distinct(wsdth)",
			"distinct(nmfak)",
			"distinct(straa)",
			"distinct(year(tgmsk)) as tgmsk",
			"distinct(nmpst)",
			"nmfak, count(*) as wsdth"
		);
		$this->tempDataArrayWhere = array(
			"",
			"1 order by wsdth asc",
			"1 order by nmfak asc",
			"1 order by straa asc",
			"1 order by tgmsk asc",
			"1 order by nmpst asc",
			"1 group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%fakultas%>='<|fakultas|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%fakultas%>='<|fakultas|>' and <%masuk%> like '<|masuk|>%' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%fakultas%>='<|fakultas|>' and <%masuk%> like '<|masuk|>%' and <%prodi%>='<|prodi|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%fakultas%>='<|fakultas|>' and <%masuk%> like '<|masuk|>%' and <%prodi%>='<|prodi|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%fakultas%>='<|fakultas|>' group by nmfak",
			"<%fakultas%>='<|fakultas|>' and <%masuk%> like '<|masuk|>%' group by nmfak",
			"<%fakultas%>='<|fakultas|>' and <%masuk%> like '<|masuk|>%' and <%prodi%>='<|prodi|>' group by nmfak",
			"<%fakultas%>='<|fakultas|>' and <%masuk%> like '<|masuk|>%' and <%prodi%>='<|prodi|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%masuk%> like '<|masuk|>%' and 1 group by nmfak",
			"<%masuk%> like '<|masuk|>%' and <%prodi%>='<|prodi|>' group by nmfak",
			"<%masuk%> like '<|masuk|>%' and <%prodi%>='<|prodi|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%prodi%>='<|prodi|>' group by nmfak",
			"<%prodi%>='<|prodi|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%jenjang%>='<|jenjang|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%fakultas%>='<|fakultas|>' and <%masuk%> like '<|masuk|>%' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%fakultas%>='<|fakultas|>' and <%prodi%>='<|prodi|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%fakultas%>='<|fakultas|>' and <%prodi%>='<|prodi|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%fakultas%>='<|fakultas|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%masuk%> like '<|masuk|>%' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%masuk%> like '<|masuk|>%' and <%prodi%>='<|prodi|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%masuk%> like '<|masuk|>%' and <%prodi%>='<|prodi|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%masuk%> like '<|masuk|>%' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%prodi%>='<|prodi|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%prodi%>='<|prodi|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%wisudatahun%>='<|wisudatahun|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%fakultas%>='<|fakultas|>' and <%masuk%> like '<|masuk|>%' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%fakultas%>='<|fakultas|>' and <%prodi%>='<|prodi|>' group by nmfak",
			"<%fakultas%>='<|fakultas|>' and <%prodi%>='<|prodi|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%fakultas%>='<|fakultas|>' and <%jenjang%>='<|jenjang|>' group by nmfak",
			"<%masuk%> like '<|masuk|>%' and <%jenjang%>='<|jenjang|>' group by nmfak",
		);
		$this->tempCodeOfWhere = array(
			"wsdth" => array( 'kode' => "<%wisudatahun%>", 'value' => "<|wisudatahun|>"),
			"wsdke" => array( 'kode' => "<%wisudake%>", 'value' => "<|wisudake|>"),
			"nimmhs" => array( 'kode' => "<%nim%>", 'value' => "<|nim|>"),
			"nmmhs" => array( 'kode' => "<%nama%>", 'value' => "<|nama|>"),
			"tamhs" => array( 'kode' => "<%kodetamhs%>", 'value' => "<|kodetamhs|>"),
			"kdjek" => array( 'kode' => "<%kodekdjek%>", 'value' => "<|kodekdjek|>"),
			"nlipk" => array( 'kode' => "<%ipk%>", 'value' => "<|ipk|>"),
			"tglls" => array( 'kode' => "<%lulus%>", 'value' => "<|lulus|>"),
			"tgmsk" => array( 'kode' => "<%masuk%>", 'value' => "<|masuk|>"),
			"thstd" => array( 'kode' => "<%kodethstd%>", 'value' => "<|kodethstd|>"),
			"blstd" => array( 'kode' => "<%kodeblstd%>", 'value' => "<|kodeblstd|>"),
			"straa" => array( 'kode' => "<%jenjang%>", 'value' => "<|jenjang|>"),
			"nmpst" => array( 'kode' => "<%prodi%>", 'value' => "<|prodi|>"),
			"nmfak" => array( 'kode' => "<%fakultas%>", 'value' => "<|fakultas|>")
		);
	}
	public function getWisudaTahun(){ return $this->getData('wsdth'); }
	public function getWisudaKe(){ return $this->getData('wsdke'); }
	public function getNim(){ return $this->getData('nimmhs'); }
	public function getNama(){ return $this->getData('nmmhs'); }
	public function getKodeTamhs(){ return $this->getData('tamhs'); }
	public function getkodeKdjek(){ return $this->getData('kdjek'); }
	public function getIPK(){ return $this->getData('nlipk'); }
	public function getLulus(){ return $this->getData('tglls'); }
	public function getMasuk(){ return $this->getData('tgmsk'); }
	public function getKodeThstd(){ return $this->getData('thstd'); }
	public function getKodeBlstd(){ return $this->getData('blstd'); }
	public function getJenjang(){ return $this->getData('straa'); }
	public function getProdi(){ return $this->getData('nmpst'); }
	public function getFakultas(){ return $this->getData('nmfak'); }

	public function setWisudaTahun($tempData,$tempAsWhere = false){ return $this->setData('wsdth',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setWisudaKe($tempData,$tempAsWhere = false){ return $this->setData('wsdke',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setNim($tempData,$tempAsWhere = false){ return $this->setData('nimmhs',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setNama($tempData,$tempAsWhere = false){ return $this->setData('nmmhs',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setKodeTamhs($tempData,$tempAsWhere = false){ return $this->setData('tamhs',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setKodeKdjek($tempData,$tempAsWhere = false){ return $this->setData('kdjek',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setLulus($tempData,$tempAsWhere = false){ return $this->setData('nlipk',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setMasuk($tempData,$tempAsWhere = false){ return $this->setData('tgmsk',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setKodeThstd($tempData,$tempAsWhere = false){ return $this->setData('thstd',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setKodeBlstd($tempData,$tempAsWhere = false){ return $this->setData('blstd',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setJenjang($tempData,$tempAsWhere = false){ return $this->setData('straa',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setProdi($tempData,$tempAsWhere = false){ return $this->setData('nmpst',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
	public function setFakultas($tempData,$tempAsWhere = false){ return $this->setData('nmfak',$tempData,$tempAsWhere,function($x,$tempResult){ return $tempResult; }); }
}
