<?php

class kontak extends Controller {
	
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

	}
	
	function index()
	{
    	return $this->loadView('kontak/kontak');
		
		$data=$this->contentHelper->inputkontak();
    }
    
    public function inputkontak()
	{
		global $CONFIG, $basedomain;
		
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$status = $_POST['status'];
				
		$data=$this->contentHelper->inputkontak($nama, $email, $subject, $message, $status);
		
		echo "<script>alert('Terima kasih untuk pesan Anda');window.location.href='".$basedomain."kontak/kontak'</script>";
			// }
		
	
	}
		

}

?>
