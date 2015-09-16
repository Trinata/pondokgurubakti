<?php

class berita extends Controller {
	
	var $models = FALSE;
	var $view;

	
	function __construct()
	{
		global $basedomain;
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$this->view->assign('basedomain',$basedomain);
    }
	
	public function loadmodule()
	{
		$this->models=$this->loadModel('modelnews');
	}
	

	public function index(){

		global $CONFIG;
		$data=$this->models->getnews();
		if ($data){
			foreach ($data as $key => $value) {
				if ($value['tanggal_upload']) $data[$key]['tanggal'] = changeDate($value['tanggal_upload']);
			}
			$this->view->assign('data',$data);
			
		// pr($data);
			
		return $this->loadView('berita/page_berita');
		}

	}
	public function detail(){

		global $CONFIG;
		// pr($_GET);
		$data=$this->models->selectnews($_GET['id_news']);
		// pr($data);
		if ($data){
				
			$this->view->assign('data',$data);
			

		return $this->loadView('berita/page_beritaDetail');
		}

	}
}

?>
