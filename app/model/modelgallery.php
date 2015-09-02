<?php
class modelgallery extends Database {
	
	var $prefix = "api";
	
	function getalbum()
	{
		//query memanggil data
		$query = "SELECT * FROM gallery WHERE status in (1) and other_id = 0 and tipe_album = 0";
		//memanggil semua data. Jika hanya memanggil 1 data ->fetch($query,0,0)
		$result = $this->fetch($query,1);
		return $result;
	}
	
	function get_images($albumid=null,$type=1)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content_repo WHERE n_status = '1' AND otherid = '{$albumid}' ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);
		
		return $result;
	}

    function get_article($categoryid=null,$type=1)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE n_status = '1' AND categoryid = '{$categoryid}' OR n_status = '0' AND categoryid = '{$categoryid}' ORDER BY created_date DESC";
		
		$result = $this->fetch($query,1);
		// pr($result);
		$i=0;
		foreach($result as $value){
			$query_count = "SELECT count(*) FROM {$this->prefix}_news_content_repo WHERE n_status = '1' AND otherid = '{$value['id']}' ORDER BY created_date DESC";
			
			$result_count = $this->fetch($query_count,0);
			// pr($result_count);
			$result[$i]['count']=$result_count['count(*)'];
			$i++;
		}
		// pr($result);
		return $result;
	}

	 function get_article_id($articleid=null,$type=1)
	{
		$query = "SELECT * FROM {$this->prefix}_news_content WHERE (n_status = '1' OR n_status = '0') AND id = '{$articleid}' ORDER BY created_date DESC";
		
		$result = $this->fetch($query,0);
		
		return $result;
	}
	
	


}
?>