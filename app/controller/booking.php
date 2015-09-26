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
		$data=$this->contentHelper->getalbum();
		
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
		
		$getProvinsi=$this->contentHelper->getProvinsi();
		$this->view->assign('prov',$getProvinsi);
		
		if (isset($_POST['submit'])){
			
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$no_telp = $_POST['no_telp'];
			$email = $_POST['email'];
			$kota = $_POST['kota'];
			$provinsi = $_POST['provinsi'];
			$jumlah_kamar = $_POST['jumlah_kamar'];
			$extra_bed = $_POST['extra_bed'];
			$tamu_dewasa = $_POST['tamu_dewasa'];
			$tamu_anak = $_POST['tamu_anak'];
			
			$data=$this->contentHelper->inputbooking($_POST);
			// pr($data);		
			if($data['status'] == 1){
				
				foreach ($data as $key => $value) {
					
					if ($key == 'tanggal_masuk') $data['tanggalMasuk'] = changeDate($value);
					if ($key == 'tanggal_keluar') $data['tanggalKeluar'] = changeDate($value);
					
				}
				$date1 = new DateTime($data['tanggal_masuk']);
				$date2 = new DateTime($data['tanggal_keluar']);

				$diff = $date2->diff($date1)->format("%a");
				$data['total'] = number_format($diff * 300000);
				$this->view->assign('data',$data);
				$msg = $this->loadView('emailTemplate');
				$send = sendGlobalMail($data['email'], false, $msg);
				// pr($data);
				// pr($msg);
				// exit;
				// echo "<script>alert('Data berhasil disimpan, silahkan periksa email anda');window.location.href='".$basedomain."booking'</script>";
			}
			
		}
		$tanggal_masuk = $_SESSION['data_booking']['tanggal_masuk'];
		$tanggal_keluar = $_SESSION['data_booking']['tanggal_keluar'];
		$tipe_kamar = $_SESSION['data_booking']['tipe_kamar'];
		
		$date1 = new DateTime($tanggal_masuk);
		$date2 = new DateTime($tanggal_keluar);

		$diff = $date2->diff($date1)->format("%a");
		$jumlahbook = 300000 * $diff;
		$this->view->assign('jumlahhari',$diff);
		$this->view->assign('jumlahbook',number_format($jumlahbook));
		$this->view->assign('data',$_SESSION['data_booking']);
		return $this->loadView('booking/detail_booking');
	}
	
	function ajax()
	{

		$tanggal_masuk = _p('tanggal_masuk');
		$tanggal_keluar = _p('tanggal_keluar');

		$currentDate = date('Y-m-d');
		if ($tanggal_masuk >= $currentDate){
			
			if ($tanggal_keluar >= $tanggal_masuk){
				$date1 = new DateTime($tanggal_masuk);
				$date2 = new DateTime($tanggal_keluar);

				$diff = $date2->diff($date1)->format("%a");
				if ($diff > 0) print json_encode(array('status'=>true, 'res'=>$diff));
				else print json_encode(array('status'=>false));
			}else{
				print json_encode(array('status'=>false));
			}
		}else{
			print json_encode(array('status'=>false));
		}
		
		exit;
	}


}

?>
