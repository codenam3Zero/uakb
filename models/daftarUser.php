<?php


class daftarUser extends Model{
	private $daftar = [];

	public function getDataAll(){
        $stmt = "select * from user";
        $query = $this->db->query($stmt);
        $data = [];

        while ($result = $this->db->fetch_array($query)){
            $data[]= $result;
        }
        return $data;
	}

    public function getDataByUsername($username){
        $stmt = "select * from user where id = '".$username."'";
        $query = $this->db->query($stmt);
        $data = $this->db->fetch_array($query);
        return $data;
	}

	// public function tambahBarang($param){
	// 	$stmt = "insert into daftarbarang (nama,qty) values (:nama, :qty)";
	// 	$query = $this->db->query($stmt,$param);
	// 	if($this->db->last_id()>0){
	// 		return true;
	// 	}
	// 	else {
	// 		return false;
	// 	}
	// }
}
?>
