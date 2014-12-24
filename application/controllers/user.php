<?php
/**
 * Created by PhpStorm.
 * User: fasty
 * Date: 22/12/14
 * Time: 17:00
 */

class User extends Master{
    public function __construct(){
        parent::__construct();
    }

    public function cartLogin(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('errors', validation_errors());
            redirect('product/cart');
        }
        else
        {
            if($this->ion_auth->login($_POST['username'],$_POST['password'])){
                $this->session->set_flashdata('success', true);
                redirect('product/cart');
            }else{
                $this->session->set_flashdata('errors', validation_errors());
                redirect('product/cart');
            }

        }

    }

    public function cartRegister(){

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        if($this->form_validation->run() == false){
            $this->session->set_flashdata('regErrors', validation_errors());
            redirect('product/cart');

        }else{
            $register = $this->ion_auth->register(
                $_POST['username'],
                $_POST['password'],
                $_POST['email']
            );

            if(isset($register)){
                $this->session->flashdata('regSuccess', true);
                redirect('product/cart');
            }else{
                $this->session->set_flashdata('regErrors', validation_errors());
                redirect('product/cart');
            }
        }
    }

    public function getIn(){

    }

    public function logout(){
        $this->ion_auth->logout();
        $this->session->set_flashdata('loggedOut', true);
        redirect(site_url(''));
    }
}