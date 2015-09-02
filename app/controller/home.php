<?php

class home extends Controller {
	
	var $models = FALSE;
	var $view;

	
	function __construct()
	{
		global $basedomain;
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$this->view->assign('basedomain',$basedomain);
    }
	
	function loadmodule()
	{
        $this->contentHelper = $this->loadModel('contentHelper');
        $this->userHelper = $this->loadModel('userHelper');
		$this->models=$this->loadModel('modelgallery');
	}
	
	function index()
	{
		//memanggil fungsi getalbum pada model
		$data=$this->models->getalbum();
		
		// pr($data);
		
		if ($data){	
			$this->view->assign('data',$data);
		}
		
		return $this->loadView($folder.'/home');
		
    }

    function logout()
    {
    	global $basedomain;
    	$doLogout = $this->userHelper->logoutUser();
    	if ($doLogout){
    		redirect($basedomain.'logout.php');exit;
    	}else{
    		redirect($basedomain);
    		logFile('can not logout user');exit;
    	}
    }

}

?>
