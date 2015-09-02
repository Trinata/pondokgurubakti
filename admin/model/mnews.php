<?php
class mnews extends Database{

	//fungsi untuk eksekusi penyimpanan data news ke database
	function inputnews($judul,$ulasan,$gambar,$detail,$author,$tanggal_upload,$status)
	{
		$date = date("Y-m-d H:i:s");
		//query insert data
		$query = "INSERT INTO news (judul,ulasan,gambar,author,detail,status,tanggal_upload,post_date)
					VALUES('".$judul."','".$ulasan."','".$gambar."','".$author."','".$detail."','".$status."','".$tanggal_upload."', '{$date}')";
		// pr($query); exit;
		//eksekusi query
		$exec = $this->query($query);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return TRUE; else return FALSE;
	}

	//fungsi unt
	function getnews()
	{
		//query memanggil data

		$query = "SELECT * FROM news WHERE status in (0,1) ORDER BY tanggal_upload DESC";
		// pr($query);
		//$query = "SELECT * FROM news WHERE status in ('0','1') ";
		//pr($query);
		//memanggil semua data. Jika hanya memanggil 1 data ->fetch($query,0,0)
		$result = $this->fetch($query,1);
		return $result;
	}
	
	function selectnews($id_news)
	{
		//pr($id);
		$query = "SELECT * FROM news WHERE id_news ='".$id_news."'";

		$result = $this->fetch($query,0,0);
		return $result;

	}

	function deletenews($id_news)
	{
		//query insert data
		$query = "UPDATE news SET status='2' WHERE id_news = '".$id_news."'";
		//eksekusi query
		$exec = $this->query($query,0);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return 1; else pr('query gagal');
	}

	function updatenews($id_news,$judul,$gambar,$ulasan,$author,$detail,$tanggal_upload,$status)
	{
		//query insert data
		$query = "UPDATE news SET judul='".$judul."', gambar='".$gambar."', ulasan='".$ulasan."', detail='".$detail."', tanggal_upload ='".$tanggal_upload."',status='".$status."' WHERE id_news = '".$id_news."'";
		//eksekusi query
		$exec = $this->query($query,0);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return 1; else pr('query gagal');
	}
}
?>