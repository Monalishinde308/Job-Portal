<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->model('BlogsModel', 'blog');           
        $this->load->model('MailModel', 'mail');
        $this->load->model('PostModel', 'post');  
        $this->load->model('StudProfileModel', 'register'); 

    }
    public function index()
    {       
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/layout/footer');
    }  
 
    //Jobs Poting

    public function posts()
    {
        $data['result'] = $this->post->lists();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/posts',$data);
        $this->load->view('admin/layout/footer');
    }

    public function post($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->post->getbyid($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/post',$data);
        $this->load->view('admin/layout/footer');
    }

    public function savepost()
    {
        $result = $this->post->save();

        redirect(base_url('admin/posts'));
    }
    public function deletepost($id)
    {
        $result = $this->post->delete($id);
        redirect(base_url('admin/posts'));
    }
 
    ////Blog............
      
    public function blogs()
    {
        $data['result'] = $this->blog->lists();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/blogs',$data);
        $this->load->view('admin/layout/footer');
    }
    public function blog($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->blog->getbyid($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/blog',$data);
        $this->load->view('admin/layout/footer');
    }
    public function saveblog()
    {
        $result = $this->blog->save();

        redirect(base_url('admin/blogs'));
    }
    public function deleteblog($id)
    {
        $result = $this->blog->delete($id);
        redirect(base_url('admin/blogs'));
    }

   
    //Register info display...........    

    public function studregister()
    {
        $data['result'] = $this->register->lists();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/studregister',$data);
        $this->load->view('admin/layout/footer');
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
        redirect(base_url('admin/studregister'));        
    }    
  
    public function deleteregister($id)
    {
        $result = $this->register->delete($id);
        redirect(base_url('admin/studregister'));
    }    
       
    //Admin Login...........

    public function login()
    {
        $this->load->view('admin/layout/header');       
        $this->load->view('admin/login');
        $this->load->view('admin/layout/footer');
    }    
    public function checkLogin()
    {
        $username=$this->input->post('username');
        $pass=$this->input->post('pass');
        if($username=="kpc" && $pass=="123")
        {
            $this->load->helper('cookie');
            $this->setCookie('usertype', 'admin');
            redirect(base_url('admin/index'));
        }
        else
        {
            $this->session->set_flashdata('Failure','Sorry...wrong password user name and password');
            redirect(base_url('admin/login'));
        }

    }    
    
    public function savecontact()
    {
        $name = $this->input->post('name');
        $subject1 = $this->input->post('subject');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $message = $this->input->post('message');

        $subject = "karmayogi.com ";
        $body = $name . " <br/>Thanks for connecting with us we will contact you soon.";
        $this->mail->sendMail($email, $subject, $body);

        $to = "macvin7@gmail.com";
        $subject = $subject1;
        $body = "Received contact message from karmayogi.com <br/>Name:" . $name . " <br/>Email:" . $email . "<br/>Subject:". $subject . "<br/>phone:" . $phone ." <br/>Message:  " . $message . ". <br/>Please do get connected with them.";

       // echo $body;
        //exit;
        $this->mail->sendMail($to, $subject, $body);
        $this->session->set_flashdata('success_msg', 'Thanks for connecting with us we will contact you soon.');


        redirect(base_url('college/contact'));
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
