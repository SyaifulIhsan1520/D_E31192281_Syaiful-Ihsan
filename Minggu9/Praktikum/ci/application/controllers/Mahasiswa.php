<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahsiswa extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('Mahasiswa_model');
}
public function index(){
$data["nama" => "Kim Jefry","prodi"=>"MIF"];
$data["nama" => "Ahmad Kurniawan","prodi"=>"TKK"];
$data["nama" => "Budi Sudarsono","prodi"=>"TIF"];
$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
$this->load->view(' view_mahasiswa ',$data);
}
public function profil(){
echo "ini adalah method profil pada controller Mahasiswa";
}
}