
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
         $this->load->model('PostModel', 'post');  
        $this->load->model('StudProfileModel', 'register'); 
    }     

    public function studlogin()
    {     
        $data['result'] = $this->register->lists();      
        $this->load->view('user/layout/header');     
        $this->load->view('user/studlogin',$data);
        $this->load->view('user/layout/footer');
    }   
   
    public function checkLogin2()
      {
        $this->load->helper('cookie');
        $email = $this->input->post('username');
        $password = $this->input->post('pass');

        $email = str_replace("'", "''", $email);
        $password = str_replace("'", "''", $password);

        $query = "SELECT * FROM dbregister WHERE (email = '" . $email . "' OR mobileno = '" . $email . "') AND password = '" . $password . "'";
        $data = $this->db->query($query);
        if ($data->num_rows() > 0) {
            $result = $data->result();
            foreach ($result as $row) {
                $this->setCookie('usertype', 'user');
                $this->setCookie('id', $row->id);            }            
                redirect(base_url('user/studhome'));
        }
        else
        {
            $this->session->set_flashdata('Failure','Sorry...wrong password user name and password');
            redirect(base_url('user/studlogin'));
        }
    } 

   
      
    public function jobs()
    {
        $data['result'] = $this->post->lists();
        $this->load->view('user/layout/header');
        $this->load->view('user/studhome');
        $this->load->view('user/jobs',$data);
        $this->load->view('user/layout/footer');
    }

    //Users...........
      public function studhome()
    {       
        $this->load->view('user/layout/header');             
        $this->load->view('user/studhome');
        $this->load->view('user/layout/footer');
    }

    //user profile display...
    
    public function myprofile()
    {     
        $data['result'] = $this->register->lists();
        $this->load->view('user/layout/header');
        $this->load->view('user/studhome');
        $this->load->view('user/myprofile', $data);
        $this->load->view('user/layout/footer');
    } 

    public function register($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->register->getbyid($id);
        $this->load->view('user/layout/header');        
        $this->load->view('user/register',$data);
        $this->load->view('user/layout/footer');
    }  
      
    public function saveregister()
    {
        $result = $this->register->save();
        redirect(base_url('user/studlogin'));        
    }     
    
    //Cookies
    public function setCookie($name, $value)
    {
        $cookie = array(
            'name' => $name,
            'value' => $value,
            'expire' => '31556926',
        );
        $this->input->set_cookie($cookie);
    }
    public function getCookie($name)
    {
        return $this->input->cookie($name, true);
    }
    public function clearCookie($name)
    {
        $cookie = array(
            'name' => $name,
            'value' => '',
            'expire' => '-3600',
        );
        $this->input->set_cookie($cookie);
    }

}