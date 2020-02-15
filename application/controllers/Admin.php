<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author kon
 */
class Admin extends CI_Controller{
    //put your code here
    
    
    public function list_users(){
        $data['title'] = "All Users";
        $this->load->library('pagination'); // class
        
        $query = $this->db->get('users', 3, $this->uri->segment(3));
        
        $data['users'] = $query->result();
        
        $query2 = $this->db->get('users');
         $config['base_url'] = base_url() . 'admin/list_users/';
        
        $config['total_rows'] = $query2->num_rows();
        $config['per_page'] = 3;
        
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
       
        $config['first_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';
        
        $config['next_tag_open'] = '<li>';
        $config['prev_tag_open'] = '<li>';
        
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        
        $config['first_tag_close'] = '</li>';
        $config['last_tag_close'] = '</li>';
        
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class=\"active\"><span><b>';
        $config['cur_tag_close'] = '</b></span></li>';
        
        $this->pagination->initialize($config);
        
          
        //$this->load->view('templates/header', $data);
        
        $this->load->view('admin/users_list', $data);
          
       /// $this->load->view('templates/footer', $data);
    }
    /*public function list_users(){
        $data ['title'] = 'All users';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/list_users', $data);
        $this->load->view('templates/footer', $data);
        
    }*/
}
