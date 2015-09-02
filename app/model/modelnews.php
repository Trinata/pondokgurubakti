<?php
class modelnews extends Database{

	//fungsi unt
	function getnews()
	{
		//query memanggil data

		$query = "SELECT * FROM news WHERE status in (1) ORDER BY tanggal_upload DESC";
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
}
?>