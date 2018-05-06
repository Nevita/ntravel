<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();

		$this->load->model('mymodel');
	}

	public function index(){
		$data = $this->mymodel->GetData();
		$this->load->view('tabel',array('data'=>$data));
	}

	public function add_data(){
		$this->load->view('form_add');
	}

	public function do_insert(){
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];
		$level = $_POST['level'];
		$data_insert = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
		);
		$res = $this->mymodel->insertData('user',$data_insert);
		if($res>=1){
			redirect('user/index');
		}else{
			echo "<h2>Insert Data Gagal</h2>";
		}
	}
}