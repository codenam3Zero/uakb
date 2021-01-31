<?php


class Home extends Controller{

	private $dt;
	private $du;
	private $ac;

	public function __construct(){
		// $this->dt = $this->loadmodel("user");
		$this->du = $this->loadmodel("daftarUser");
		$this->ac = $this->loadmodel("account");
	}

	public function index(){
		echo "anda memanggil action index \n ";
	}

	public function home($data1, $data2){
		echo "anda memanggil action home dengan data1 = $data1 dan data2 = $data2 \n ";
	}

	public function login(){
		if(!empty($_POST)){
			if ($this->ac->auth($_POST)){
				if($this->ac->cekid($_POST)){
					header('Location: '.BASE_URL.'index.php?r=home/page1/'.$_POST['username']);
				} else {
					header('Location: '.BASE_URL.'index.php?r=home/page2'.$_POST['username']);
				}
				exit;
			} else {
				$message = "Username atau Password Salah!";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		$this->loadview('login');
	}

	public function page1(){
		$data = $this->du->getDataByUsername($_GET['username']);
		$this->loadview('page1', $data);
	}

	public function page2(){
		$data = $this->du->getDataByUsername($_GET['username']);
		$this->loadview('page2', $data);
	}

	// public function lihatuser($username){
	// 	$data = $this->df->getDataByUsername($username);

	// 	$this->loadview('login',$data);
	// }

	// public function listbarang(){
	// 	$data = $this->df->getDataAll();

	// 	$this->loadview('templates/header',['tittle'=>'List Barang']);
	// 	$this->loadview('home/listbarang',$data);
	// 	$this->loadview('templates/footer');
	// }

	// public function insertbarang(){
	// 	if(!empty($_POST)){

	// 		if ($this->df->tambahBarang($_POST)){
	// 			header('Location: '.BASE_URL.'index.php?r=home/listbarang');
	// 			exit;
	// 		}
	// 	}
	// 	$this->loadview('templates/header',['title'=>'Insert Barang']);
	// 	$this->loadview('home/form');
	// 	$this->loadview('templates/footer');
	// }
}

?>
