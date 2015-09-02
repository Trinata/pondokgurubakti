<?php

class booking extends Controller {
	
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
	
	function index(){
		//memanggil fungsi getalbum pada model
		$data=$this->contentHelper ->getalbum();
		
		// pr($data);
		
		if ($data){	
			$this->view->assign('data',$data);
		}
		
		return $this->loadView('booking/page_booking');
    }

	
	public function inputbooking(){
		global $CONFIG, $basedomain;
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$tanggal_keluar = $_POST['tanggal_keluar'];
		$tipe_kamar = $_POST['tipe_kamar'];
		
		// $upload = uploadFile('cover_gambar',false,'image');
		// pr($upload);exit;
		// $filename=$upload['full_name'];
		
		$_SESSION['data_booking'] = $_POST;
		// $data=$this->contentHelper->inputbooking($tanggal_masuk, $tanggal_keluar, $tipe_kamar);		
			// if($data == 1){
				echo "<script>alert('Silahkan lakukan validasi data anda');window.location.href='".$basedomain."booking/detailbooking'</script>";
			// }
		
	}
	
	public function detailbooking(){
		global $CONFIG, $basedomain;
		
		if (isset($_POST['submit'])){
			
			pr($_SESSION);
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$no_telp = $_POST['no_telp'];
			$email = $_POST['email'];
			$extra_bed = $_POST['extra_bed'];
			
			// $upload = uploadFile('cover_gambar',false,'image');
			// pr($upload);exit;
			// $filename=$upload['full_name'];
			
			// pr($_POST);
			// exit;
			$data=$this->contentHelper->inputbooking($_POST);		
			if($data == 1){
				echo "<script>alert('Data berhasil di simpan');window.location.href='".$basedomain."booking'</script>";
			}
		}
		
		return $this->loadView('booking/detail_booking');
	}
	
	
}

?>
