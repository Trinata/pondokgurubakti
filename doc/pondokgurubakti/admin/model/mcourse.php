<?php
class mcourse extends Database {
	
	function asd()
	{

	}
	
	//insert course with ajax
	function insert_data($namagrup,$syaratkelulusan,$n_status)
	{
		$query = "INSERT INTO grup_kursus (namagrup,syaratkelulusan,n_status)
				  VALUES ('$namagrup','$syaratkelulusan','$n_status')";
		// echo $query;
		$result = $this->query($query);
		// return $result;
	}
	
	//select course with ajax
	function edit_data($idGrup_kursus){
		$query = "SELECT namagrup,syaratkelulusan FROM grup_kursus WHERE idGrup_kursus = '$idGrup_kursus' ";
		// $query = "SELECT namagrup FROM grup_kursus WHERE idGrup_kursus = '$idGrup_kursus' ";
		// pr($query);
		$result = $this->fetch($query,1);
		
		return $result;
	
	}
	
	//update course with ajax with id
	function update_data($id,$namagrup,$syaratkelulusan){
		$query = "UPDATE grup_kursus
						SET 
							namagrup = '{$namagrup}',
							syaratkelulusan = '{$syaratkelulusan}'
						WHERE
							idGrup_kursus = '{$id}'";
		$result = $this->query($query);					
	}
	
	//update course with ajax with id
	function update_status($id,$n_status){
		$query = "UPDATE grup_kursus
						SET 
							n_status = '{$n_status}'
						WHERE
							idGrup_kursus = '{$id}'";
		$result = $this->query($query);					
	}
	
	//delete course with ajax with id
	function delete_data($id,$n_status){
		$query = "UPDATE grup_kursus
						SET 
							n_status = '{$n_status}'
						WHERE
							idGrup_kursus in ({$id})";
		// echo $query;					
		$result = $this->query($query);					
	}
	
	//delete course with ajax with id
	function delete_data_course_list($id,$n_status){
		$query = "UPDATE kursus
						SET 
							n_status = '{$n_status}'
						WHERE
								idKursus in ({$id})";
		// echo $query;					
		$result = $this->query($query);					
	}
	
	
	//select group course
	function select_data(){
		$query = "SELECT idGrup_kursus,namagrup,syaratkelulusan,n_status,create_time FROM grup_kursus WHERE n_status != '2'";
		// pr($query);
		$result = $this->fetch($query,1);
		
		return $result;
	
	}
	
	//select course
	function select_data_course(){
		$query = "SELECT idGrup_kursus,namagrup FROM grup_kursus WHERE n_status != '2'";
		// pr($query);
		$result = $this->fetch($query,1);
		// pr($result);
		return $result;
	}
	
	function course_insert($x){
		if($x['action'] == 'insert'){
			$n_status = '1';
			$query = "INSERT INTO kursus (namakursus,keterangan,jeniskursus,start_date,end_date,quota,idGrup_kursus,n_status)
				  VALUES ('$x[namakursus]','$x[keterangan]','$x[jeniskursus]','$x[start_date]','$x[end_date]',
				  '$x[quota]','$x[idGrup_kursus]',$n_status)";
			// echo $query;
			// exit;
			$result = $this->query($query);	
		}else{
			//update here
			$query = "UPDATE kursus
						SET 
							namakursus = '{$x[namakursus]}',
							keterangan = '{$x[keterangan]}',
							jeniskursus = '{$x[jeniskursus]}',
							start_date = '{$x[start_date]}',
							end_date = '{$x[end_date]}',
							quota = '{$x[quota]}',
							idGrup_kursus = '{$x[idGrup_kursus]}'
						WHERE
							idKursus = '{$x[id]}'";
			// echo $query;				
			// exit;				
			$result = $this->query($query);					
			
		}
	}
	
	function select_data_list_course(){
		$query = "SELECT idKursus,namakursus,keterangan,jeniskursus,start_date,end_date,quota,idGrup_kursus,n_status FROM kursus WHERE n_status != '2'";
		// pr($query);
		$result = $this->fetch($query,1);
		// pr($result);
		return $result;
	}
	
	function select_data_list_course_condition($id){
		$query = "SELECT idKursus,namakursus,keterangan,jeniskursus,start_date,end_date,quota,idGrup_kursus,n_status FROM kursus 
				  WHERE n_status != '2' and idKursus='$id'";
		// pr($query);
		$result = $this->fetch($query,1);
		
		return $result;
	}
	
	//update course with ajax with id
	function update_status_course($id,$n_status){
		$query = "UPDATE kursus
						SET 
							n_status = '{$n_status}'
						WHERE
							idKursus = '{$id}'";
		// echo $query;
		
		$result = $this->query($query);					
	}
	
	function select_data_list_group(){
		$query = "SELECT idGrup_kursus,namagrup FROM grup_kursus WHERE n_status != '2'";
		// pr($query);
		$result = $this->fetch($query,1);
		
		return $result;
	}
	
	function upload_insert($x){
		if($x['action'] == 'insert'){
			$n_status = '1';
			$query = "INSERT INTO file (namafile,jenisfile,statusfile,idMateri,idKursus,idGrup_kursus,files,n_status)
				  VALUES ('$x[namafile]','$x[jenisfile]','$x[statusfile]','$x[idMateri]','$x[idKursus]',
				  '$x[idGrup_kursus]','$x[post_image]',$n_status)";
			$result = $this->query($query);	
		}else{
			//update here
			$query = "UPDATE file
						SET 
							namafile = '{$x[namafile]}',
							jenisfile = '{$x[jenisfile]}',
							statusfile = '{$x[statusfile]}',
							idMateri = '{$x[idMateri]}',
							idKursus = '{$x[idKursus]}',
							idGrup_kursus = '{$x[idGrup_kursus]}',
							files = '{$x[post_image]}'
						WHERE
								idFile = '{$x[id]}'";
			// exit;				
			$result = $this->query($query);					
			
		}
	}
	
	function select_data_list_upload(){
		$query = "SELECT * FROM file WHERE n_status != '2'";
		// pr($query);
		$result = $this->fetch($query,1);
		
		return $result;
	}
	
	function select_data_list_upload_condt($id_upload){
		$query = "SELECT * FROM file WHERE n_status != '2' and idFile = '{$id_upload}'";
		// pr($query);
		$result = $this->fetch($query,1);
		
		return $result;
	}
	
	
	//update uploa with ajax with idd
	function update_status_upload($id,$n_status){
		$query = "UPDATE file
						SET 
							n_status = '{$n_status}'
						WHERE
							idFile = '{$id}'";
		// exit;
		$result = $this->query($query);					
	}
	
	function delete_data_course_upload($id,$n_status){
		$query = "UPDATE file
						SET 
							n_status = '{$n_status}'
						WHERE
								idFile in ({$id})";
			
		$result = $this->query($query);					
	}
	
	
}
?>