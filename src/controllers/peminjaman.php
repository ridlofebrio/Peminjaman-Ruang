<?php

class peminjaman extends Controller
{

    public function index()
    {
        $this->view('template/header');
        $this->view('template/navbar');
        $this->view('peminjaman/index');
        $this->view('template/footer');
    }

    public function send()
    {
        $this->view('template/header');
        $this->view('peminjaman/thanks');
        $this->view('template/footer');
    }
    public function peminjaman(){
        $this->view('template/header');
        $this->view('template/navbar');
        $this->view('peminjaman/peminjaman');
        $this->view('template/footer');
    }
    public function status(){
        $this->view('template/header');
        $this->view('template/navbar');
        $this->view('peminjaman/status');
        $this->view('template/footer');
        
    }
    public function ruang(){
        $this->view('template/header');
        $this->view('template/navbar');
        $this->view('peminjaman/ruang');
        $this->view('template/footer');
        
    }
}


?>