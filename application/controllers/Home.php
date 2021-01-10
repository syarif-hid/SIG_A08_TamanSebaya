<?php
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('taman_model');
    }

    public function index()
    {
        $data = array(
                    'title' => 'Sistem Informasi Geografis Taman se-Surabaya',
                    'taman' => $this->taman_model->get_all_data(),
                    'isi' => 'home_view'
            );
        $this->load->view('template/wrapper', $data, FALSE);
    
    }

    public function taman()
    {
        $data = array(
            'title' => 'Point Taman',
            'taman' => $this->taman_model->get_all_data(),
            'isi' => 'taman_view'
    );
$this->load->view('template/wrapper', $data, FALSE);
    }

    public function rute()
    {
        $data = array(
                    'title' => 'Rute Taman',
                    'taman' => $this->taman_model->get_all_data(),
                    'isi' => 'rute_view'
            );
        $this->load->view('template/wrapper', $data, FALSE);
    
    }

    public function polygon()
    {
        $data = array(
                    'title' => 'Polygon Taman',
                    'taman' => $this->taman_model->get_all_data(),
                    'isi' => 'polygon_view'
            );
        $this->load->view('template/wrapper', $data, FALSE);
    
    }

    public function about()
    {
        $data = array(
                    'title' => 'About',
                    'isi' => 'about_view'
            );
        $this->load->view('template/wrapper', $data, FALSE);
  
    }

}