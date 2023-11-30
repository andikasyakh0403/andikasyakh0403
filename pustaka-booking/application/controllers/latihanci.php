<?php 

class latihanci extends CI_Controller{
    public function index(){
        echo "hello world";
    }
  
    public function penjumlah($n1, $n2)
    {
        $this->load->model('model_latihan1');
        $hasil=$this->model_latihan1->jumlah($n1, $n2);
        echo "hasil dari". $n1 ."+". $n2."=".$hasil;
    }
    public function penjumlahan($n1, $n2)
    {
    $this->load->model('model_latihan1');
    $data['nilai1'] = $n1;
    $data['nilai2'] = $n2;
    $data['hasil'] = $this->model_latihan1->jumlah($n1, $n2);
    $this->load->view('views-latihan', $data);
    }
    
}
