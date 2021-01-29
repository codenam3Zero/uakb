<?php


class User {
	
	private $id;
	private $nama;
	private $qty;
	
	public function __construct(){
		$this->id = "1";
		$this->username = "4lvan";
		$this->password = "123";
	}
	
	public function getData(){
		return "Data yang diminta dari model user : $this->username, $this->id, $this->password ";
    }
    
    public function getDataOne(){
        $data = [
            'id'    =>$this->id,
            'username'  =>$this->username,
            'password'   =>$this->password
        ];
        return $data;
    }
}

?>