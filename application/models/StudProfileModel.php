<?php

defined('BASEPATH') or exit('No direct script access allowed');

class StudProfileModel extends CI_Model
{
    public function lists()
    {
        $this->db->order_by('id', 'ACE');
        $query = $this->db->get('dbregister');
        return $query->result();
    }   
   
    public function save()
    {
        $id = 0;
       

        if ($this->input->post('id') == 0) {
            $field = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'address' => $this->input->post('address'),
                'mobileno' => $this->input->post('mobileno'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'designation' => $this->input->post('designation'),
                'qualification' => $this->input->post('qualification'),   
                'department' => $this->input->post('department'), 
                'gender' => $this->input->post('gender'),
            );
            $this->db->insert('dbregister', $field);
            $id = $this->db->insert_id();
        } else {
            $id = $this->input->post('id');
            $field = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'address' => $this->input->post('address'),
                'mobileno' => $this->input->post('mobileno'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'designation' => $this->input->post('designation'),
                'qualification' => $this->input->post('qualification'),   
                // 'photo' => $this->input->post('photo'),                            
                'department' => $this->input->post('department'),
                'gender' => $this->input->post('gender'),   

            );
            $this->db->where('id', $id);
            $this->db->update('dbregister', $field);
        }

        if (isset($_FILES['photo']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $target_dir = '././studregisterpics/'.$id.'.png';
            if (file_exists($target_dir)) {
                unlink($target_dir);
            }

            move_uploaded_file($_FILES['photo']['tmp_name'], $target_dir);
        }

        return $id;
    }

    public function getbyid($id)
    {
        
        $this->db->where('id', $id);
        $query = $this->db->get('dbregister');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    } 

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dbregister');
    }
}


