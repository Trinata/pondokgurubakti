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
			// $query1 = "SELECT * FROM gallery WHERE other_id = {$result[0][id_gmb]} and status in (1)";	
			$query1 = "SELECT * FROM gallery WHERE tipe_album = 1 and status in (1) and other_id > 0";				
			// pr($query1);
			$result1 = $this->fetch($query1,1);
			return $result1;
		}
		return false;
	}
	
	function inputbooking($datas=array())
	{
		$tanggal_masuk = $datas['tanggal_masuk'];
		$tanggal_keluar = $datas['tanggal_keluar'];
		$tipe_kamar = 1;
		$nama = $datas['nama'];
		$alamat = $datas['alamat'];
		$no_telp = $datas['no_telp'];
		$email = $datas['email'];
		$kota = $datas['kota'];
		$provinsi = $datas['provinsi'];
		$jumlah_kamar = $datas['jumlah_kamar'];
		$extra_bed = $datas['extra_bed'];
		$tamu_dewasa = $datas['tamu_dewasa'];
		$tamu_anak = $datas['tamu_anak'];
		$date = date("Y-m-d H:i:s");
		
		$code_booking = substr(str_shuffle('23456789QWERTYUPLKJHGFDSAZXCVBNM'),0,6);
		// pr($datas);
		// exit;
		$query = "INSERT IGNORE INTO booking(tanggal_masuk, tanggal_keluar, tipe_kamar, date_book, nama, alamat, no_telp, email, code_booking, kota, provinsi, jumlah_kamar, extra_bed, tamu_dewasa, tamu_anak)
					VALUES('{$tanggal_masuk}', '{$tanggal_keluar}', '{$tipe_kamar}', '{$date}', '{$nama}', '{$alamat}', '{$no_telp}', '{$email}', '{$code_booking}', '{$kota}', '{$provinsi}', '{$jumlah_kamar}', '{$extra_bed}', '{$tamu_dewasa}', '{$tamu_anak}')";
		$exec = $this->query($query);	
		// pr($query);
		// exit;
		
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec){
			$datas['status'] = 1;
			$datas['code_booking'] = $code_booking;
			return $datas;
		} return false;
	}
	
	function detailbooking($datas)
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

    function getProvinsi($debug=false)
    {
    	$sql = array(
                'table'=>"tbl_wilayah",
                'field'=>"*",
                'condition' => "parent = 0",
                );

        $res = $this->lazyQuery($sql,$debug);
        if ($res) return $res;
        return false;
    }
	
	function inputkontak($nama, $email, $subject, $message, $status)
	{
		$date = date("Y-m-d H:i:s");
		$query = "INSERT INTO userkontak (nama, email, subject, message, status, date)
					VALUES('".$nama."','".$email."','".$subject."','".$message."','".$status."','".$date."')";
		//eksekusi query
		logFile($query);
		$exec = $this->query($query,0);	
		//kondisi apabila eksekusi berhasil mengembalikan notif 1, jika gagal mencetak query gagal 
		if($exec) return 1; else pr('query gagal');
	}
}
?>