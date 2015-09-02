<?php
// defined ('TATARUANG') or exit ( 'Forbidden Access' );

class booking extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		parent::__construct();

		global $app_domain;
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$sessionAdmin = new Session;
		$this->admin = $sessionAdmin->get_session();
		// $this->validatePage();
		$this->view->assign('app_domain',$app_domain);
	}
	public function loadmodule()
	{
		
		$this->mbooking = $this->loadModel('mbooking');
	}
	
	//module course group
	public function index(){
		// echo "masukk ajaa";
		// $select = $this->mbooking->update_data();
		// pr($select);
		$this->view->assign('data',$select);
		return $this->loadView('booking/bookinggroup');

	}
	
	public function bookinglist(){
		// echo "masukk ajaa";
		$select = $this->mbooking->select_data();
		// pr($select);
		$this->view->assign('data',$select);
		return $this->loadView('booking/bookinggroup');

	} 
	
	public function updatestatus(){
		global $CONFIG;
			$status = $_GET['status'];
			$id_booking = $_GET['id_booking'];
		
			$data=$this->mbooking->update_data($id_booking, $status);
				if($data == 1){
					echo "<script>alert('Data berhasil disimpan');window.location.href='".$CONFIG['admin']['base_url']."booking/bookinglist'</script>";
				}
	}	
}

?>
