<?php
class mbooking extends Database {


	//update course with ajax with id
	function update_data($id_booking, $status){
		$query = "UPDATE booking SET status = '".$status."' WHERE id_booking = '".$id_booking."'";
		// pr($query); exit;
		$exec = $this->query($query,0);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return 1; else pr('query gagal');				
	}
	
	
	//select group course
	function select_data(){
		$query = "SELECT * FROM booking WHERE status in (0,1)";
		// pr($query);
		$result = $this->fetch($query,1);
		
		return $result;
	}
}
?>