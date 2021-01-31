<?php
class account extends Model{

    public function auth($param){
        $stmt = "select * from user";
        $query = $this->db->query($stmt);
        while ($result = $this->db->fetch_array($query)){
            if($param['username'] == $result['username'] && $param['password'] == $result['password']){
                return true;
            }
        }
        return false;
    }

    public function cekid($param){
        $stmt = "select * from user where username = '$param[username]'";
        $query = $this->db->query($stmt);
        $result = $this->db->fetch_array($query);
            if((int)$result['id'] < 2){
                return true;
            } else {
                return false;
            }

    }

	// public function register($param){
    //     if($param['cpassword'] != $param['password']){
    //         return false;
    //     } else {
    //         $stmt = "insert into account (nama, password) values (:username, :password)";
    //         $query = $this->db->query($stmt,$param);
    //         if($query){
    //             return true;
    //         } else {
    //             return false;
    //         }
    //     }
    // }
}
?>
