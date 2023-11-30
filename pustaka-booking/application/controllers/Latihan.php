<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 

class Latihan extends CI_Controller{
    public function __construct()
 {
      parent::__construct();
      cek_login();
 }
    public function index(){
        $this->load->view('template/index');
        $this->load->view('template/header');
        $this->load->view('template/footer');
        $this->load->view('template/save');
        
    }
}