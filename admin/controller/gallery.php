<?php
// defined ('MICRODATA') or exit ( 'Forbidden Access' );
class gallery extends Controller{
var $models = FALSE;

public function __construct()
{
	global $app_domain, $basedomain;
	parent::__construct();
	$this->loadmodule();
	$this->view=$this->setSmarty();
	$this->view->assign('app_domain',$app_domain);
	$this->view->assign('basedomain',$basedomain);
}

public function loadmodule()
{
	$this->models=$this->loadModel('mgallery');
	
}

//Menampilkan halaman data album 
public function index(){
	
	global $basedomain, $app_domain;
	// pr($basedomain);
	// pr($app_domain);
	//memanggil fungsi getalbum pada model
	$data=$this->models->getalbum();
	// pr($data);
	if ($data){	
		$this->view->assign('data',$data);
	}
	return $this->loadView('gallery/listalbum');
}

//Menampilkan halaman form tambah album
public function addalbum(){
	global $CONFIG;
	//pr('masuk');
	return $this->loadView('gallery/addalbum');
}

//Fungsi untuk melempar data dari form tambah talbum ke model
public function inputalbum(){
	global $CONFIG;
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$upload = uploadFile('cover_gambar',false,'image');
	// pr($upload);exit;
	$filename=$upload['full_name'];
	
	
	$data=$this->models->inputalbum($judul, $deskripsi, $filename);		
	if($data == 1){
		echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."gallery'</script>";
	}
	
}

//Menampilkan halaman galeri foto sesuai dengan album yang dipilih
public function getgallery(){
	//menangkap parameter id_gmb dari halaman album
	$id_gmb=$_GET['id_album'];
	$data=$this->models->getgallery($id_gmb);
	// if ($data){	
		// $vardata=array("$id_gmb","$data");
		$vardata['id'] = $id_gmb;
		$vardata['data'] = $data;
		pr($vardata);
		$this->view->assign('data',$vardata);
	// }
	return $this->loadView('gallery/listgallery');
}

//Menampilkan halaman form tambah galeri foto
public function addgallery(){
	global $CONFIG;
	//pr('masuk');
	$id_gmb=$_GET['id_album'];
	$this->view->assign('data',$id_gmb);
	return $this->loadView('gallery/addgallery');
}

//Fungsi untuk melempar data dari form tambah galeri foto ke model
public function inputgallery(){
	global $CONFIG;
	$jns_file=$_POST['jns_file'];

	// pr($_POST);exit;
	if ($jns_file == "Foto") {
		$id_gmb=$_POST['id_gmb'];
		$judul = $_POST['judul'];
		$deskripsi = $_POST['deskripsi'];
		$upload = uploadFile('gambar',false,'image');
		// pr($judul);exit;
		$filename=$upload['full_name'];
		$data=$this->models->inputgallery($judul,$deskripsi,$filename,$id_gmb,$jns_file);
		// pr($data);exit;
		if($data == 1){
			//pr('Sukses masuk');
			echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."gallery/getgallery/?id_gmb=".$id_gmb."'</script>";
			exit;
		}	
	}
	elseif ($jns_file == "Video") {
		$id_gmb=$_GET['id_gmb'];
		$judul = $_POST['judul'];
		$deskripsi = $_POST['deskripsi'];
		$upload = uploadFile('gambar',false,'video');
		pr($upload);
		// pr($_FILES);exit;
		$filename=$upload['full_name'];
		$data=$this->models->inputgallery($judul,$deskripsi,$filename,$id_gmb,$jns_file);
		//exit;
		if($data == 1){
			//pr('Sukses masuk');
			echo "<script>alert('Data berhasil di simpan');window.location.href='".$CONFIG['admin']['base_url']."gallery/getgallery/?id_gmb=".$id_gmb."'</script>";
			exit;
		}	
	}
}

public function editgallery(){
		global $CONFIG;
		$id_gmb = $_GET['id_gmb'];
		//kondisi apabila tidak melakukan perubahan
		if ($_POST == null){	
			$data=$this->models->selectgallery($id_gmb);
			pr ($data);
			if ($data){	
				$this->view->assign('data',$data);
			}	
			return $this->loadView('gallery/editgallery');	
		}
		//eksekusi jika melakukan perubahan terhadap data gallery
		else{
			$judul = $_POST['judul'];
			$jns_file = $_POST['jns_file'];
			$deskripsi = $_POST['deskripsi'];
			$upload = uploadFile('gambar',false,'image');
			// pr($judul);exit;
			$filename=$upload['full_name'];
			$status = $_POST['status1'];
			$data=$this->models->updategallery($id_gmb,$judul,$jns_file,$deskripsi,$filename,$status);
			pr($data);
			if($data == 1){
				echo "<script>alert('Data berhasil di perbarui');window.location.href='".$CONFIG['admin']['base_url']."gallery/getgallery/?id_album=".$id_gmb."'</script>";
			}
		}
	}

	public function deletegallery(){
		global $CONFIG;
		//mengambil parameter id_gallery dari view
		$id_gmb = $_GET['id_gmb'];
		//melempar id_gallery ke fungsi deletenews yang ada di model
		$data=$this->models->deletegallery($id_gmb);
		if($data == 1){
			echo "<script>alert('Data berhasil di hapus');window.location.href='".$CONFIG['admin']['base_url']."gallery/getgallery/?id_album=".$id_gmb."'</script>";
		}
		else {pr('gagal');}
	}
}
?>