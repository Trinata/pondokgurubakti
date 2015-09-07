<?php
class contentHelper extends Database {
	
	var $prefix = "";
	var $salt = "";
	function __construct()
	{
		// $this->db = new Database;
		$this->salt = "ovancop1234";
		$this->token = str_shuffle('cmsaj23y4ywdni237yeisa');
		$this->date = date('Y-m-d H:i:s');

	}

	function getalbum()
	{
		//query memanggil data
		$query = "SELECT * FROM gallery WHERE status in (1) and tipe_album = 1 LIMIT 1";
		//memanggil semua data. Jika hanya memanggil 1 data ->fetch($query,0,0)
		$result = $this->fetch($query,1);
		if ($result){
			$query1 = "SELECT * FROM gallery WHERE other_id = {$result[0][id_gmb]} and status in (1)";		
			// pr($result);
			$result1 = $this->fetch($query1,1);
			return $result1;
		}
		return false;
	}
	
	function inputbooking($data=array())
	{
		$tanggal_masuk = $_SESSION['data_booking']['tanggal_masuk'];
		$tanggal_keluar = $_SESSION['data_booking']['tanggal_keluar'];
		$tipe_kamar = $_SESSION['data_booking']['tipe_kamar'];
		$nama = $data['nama'];
		$no_telp = $data['telp'];
		$email = $data['email'];
		$date = date("Y-m-d H:i:s");
		
		$code_booking = substr(str_shuffle('23456789QWERTYUPLKJHGFDSAZXCVBNM'),0,6);
		// pr($code_booking);
		// exit;
		$query = "INSERT INTO booking(tanggal_masuk, tanggal_keluar, tipe_kamar,date_book, nama, no_telp, email, code_booking)
					VALUES('".$tanggal_masuk."','".$tanggal_keluar."','".$tipe_kamar."', '{$date}', '{$nama}', '{$no_telp}', '{$email}', '{$code_booking}')";
		$exec = $this->query($query);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return 1; else pr('query gagal');
	}
	
	function detailbooking($id_booking, $nama, $alamat, $no_telp, $email, $extra_bed)
	{
		//query insert data
		$query = "UPDATE gallery SET nama='".$nama."', alamat='".$alamat."', no_telp='".$no_telp."', email='".$email."', extra_bed='".$extra_bed."' WHERE id_booking = '".$id_booking."' LIMIT 1";
		//eksekusi query
		// pr($query);exit;
		$exec = $this->query($query,0);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return 1; else pr('query gagal');
	}
	
    function getArticle($id=false, $data=array(), $debug=false)
    {

        $filter = "";
        
        if ($id) $filter .= " AND id = {$id}";
        // pr($data);
        if ($data['topcontent']) $filter .= " AND topcontent = 1";
        // else $filter .= " AND topcontent = 0";

        if ($data['slider']) $filter .= " AND slider_image = 1";
        // else $filter .= " AND slider_image = 0";

        $orderby = "";
        if ($data['random']) $orderby .= " ORDER BY RAND()";
        else $orderby .= " ORDER BY posted_date DESC";

        $type = "";
        if ($data['type']) $type .= " AND articleType IN ({$data['type']})";
        else $type .= " AND articleType IN (1,2,3)";

        $n_status = "";
        if ($data['sold']) $n_status .= " n_status IN ({$data['sold']})";
        else $n_status .= " n_status IN (1)";

        $sql = array(
                'table'=>"{$this->prefix}_news_content ",
                'field'=>"*",
                'condition' => "{$n_status} {$type} {$filter} {$orderby}",
                'limit' => '100',
                );

        $res = $this->lazyQuery($sql,$debug);
        if ($res) return $res;
        return false;
    }
}
?>