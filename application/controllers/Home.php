<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
     parent::__construct();
     $this->load->model('Setting_model');   
    }

    public function index()
    {
        $data['setting']    = $this->Setting_model->GetSetting();
        $this->load->view('home', $data);
    }
}