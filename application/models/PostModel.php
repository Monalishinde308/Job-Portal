<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PostModel extends CI_Model
{
    public function lists()
    {
        $this->db->order_by('id', 'ACE');
        $query = $this->db->get('posts');
        return $query->result();
    }

    public function save()
    {
        $id = 0;
       

        if ($this->input->post('id') == 0) {
            $field = array(
                'name' => $this->input->post('name'),                
                'qualification' => $this->input->post('qualification'),
                'location' => $this->input->post('location'),
                'description' => $this->input->post('description'),
                'link' => $this->input->post('link'),
                'department' => $this->input->post('department'),
            );
            $this->db->insert('posts', $field);
            $id = $this->db->insert_id();
        } else {
            $id = $this->input->post('id');
            $field = array(
                'name' => $this->input->post('name'),
                'qualification' => $this->input->post('qualification'),
                'location' => $this->input->post('location'),
                'description' => $this->input->post('description'),
                'link' => $this->input->post('link'),
                'department' => $this->input->post('department'),

            );
            $this->db->where('id', $id);
            $this->db->update('posts', $field);
        }

      

        return $id;
    }

    public function getbyid($id)
    {
        
        $this->db->where('id', $id);
        $query = $this->db->get('posts');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }   
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('posts');
    }

   
}


