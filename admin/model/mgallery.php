<?php
class mgallery extends Database{
	
//Fungsi untuk menampilkan data album dari database
	function getalbum()
	{
		//query memanggil data
		$query = "SELECT * FROM gallery WHERE status in (0,1)";
		//memanggil semua data. Jika hanya memanggil 1 data ->fetch($query,0,0)
		$result = $this->fetch($query,1);
		return $result;
	}

//Fungsi untuk menginput data album ke database
	function inputalbum($judul, $deskripsi, $filename)
	{
		$query = "INSERT INTO gallery(judul, deskripsi, filename)
					VALUES('".$judul."','".$deskripsi."','".$filename."')";
		//eksekusi query
		// pr($query);exit;
		$exec = $this->query($query);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return 1; else pr('query gagal');
	}

//Fungsi untuk menampilkan data galeri dari database
	function getgallery($id_gmb)
	{
		//query memanggil data
		$query = "SELECT * FROM gallery WHERE other_id='".$id_gmb."' and status in (0,1)";
		// pr($query);
		//memanggil semua data. Jika hanya memanggil 1 data ->fetch($query,0,0)
		$result = $this->fetch($query,1);
		return $result;
	}

//Fungsi untuk menginput data album ke database
	function inputgallery($judul,$deskripsi,$filename,$id_gmb,$jns_file)
	{

		$query = "INSERT INTO gallery(other_id,judul,jns_file,filename,deskripsi)
					VALUES('".$id_gmb."','".$judul."','".$jns_file."','".$filename."','".$deskripsi."')";
		//eksekusi query
		// pr($query);exit;
		logFile($query);
		$exec = $this->query($query,0);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return 1; else pr('query gagal');
	}
	
	function updategallery($id_gmb,$judul,$jns_file,$deskripsi,$filename,$status)
	{
		//query insert data
		$query = "UPDATE gallery SET judul='".$judul."', jns_file='".$jns_file."', deskripsi='".$deskripsi."', filename='".$filename."',status='".$status."' WHERE other_id = '".$id_gmb."'";
		//eksekusi query
		$exec = $this->query($query,0);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return 1; else pr('query gagal');
	}
	
	function selectgallery($id_gmb)
	{
		//pr($id);
		$query = "SELECT * FROM gallery WHERE id_gmb ='".$id_gmb."'";
		$result = $this->fetch($query,0,0);
		return $result;

	}
	
	function deletegallery($id_gmb)
	{
		//query insert data
		$query = "UPDATE gallery SET status='2' WHERE id_gmb = '".$id_gmb."'";
		//eksekusi query
		$exec = $this->query($query,0);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return 1; else pr('query gagal');
	}
}
?>