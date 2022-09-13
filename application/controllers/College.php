<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College extends CI_Controller {

    public function __construct()
    {
        parent::__construct();       
        $this->load->model('BlogsModel', 'blog');
    }    
    
    public function about()
    {
        $this->load->view('college/layout/header');
        $this->load->view('college/about');
        $this->load->view('college/layout/footer');
    }

    public function blog()
    {
        $data['result'] = $this->blog->lists();
        $this->load->view('college/layout/header');
        $this->load->view('college/blog',$data);
        $this->load->view('college/layout/footer');
    }  

    public function contact()
    {
        $this->load->view('college/layout/header');
        $this->load->view('college/contact');
        $this->load->view('college/layout/footer');
    }

    public function index()
    {
        $this->load->view('college/layout/header');
        $this->load->view('college/index');
        $this->load->view('college/layout/footer');
    }

    public function job_listings()
    {
        $this->load->view('college/layout/header');
        $this->load->view('college/job_listings');
        $this->load->view('college/layout/footer');
    }

   
    public function services()
    {
        $this->load->view('college/layout/header');
        $this->load->view('college/services');
        $this->load->view('college/layout/footer');
    }
}