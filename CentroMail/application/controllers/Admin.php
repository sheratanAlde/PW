<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Jordi Güeto Matavera
 */
error_reporting(E_ALL ^ E_DEPRECATED);


class Admin extends CI_Controller {

    public function _construct(){
        parent::_construct();
    }

    public function index() {
        $this->load->view("admin/admin_view");
    }
   
    public function RegistroProductora(){
        $this->load->view("admin/registro/productora_view");
    }
    
    public function verifyRegisterProductora(){
       if($this->input->post('submit_reg')){
           $this->form_validation->set_rules('Nombre', 'Nombre', 'required|callback_verify_productora_name|max_length[64]');
           
           $this->form_validation->set_message('required', 'El campo %s es obligatorio');
           $this->form_validation->set_message('max_length', 'El campo {field} debe tener como mucho {param} caracteres');
           $this->form_validation->set_message('verify_productora_name', 'La productora ya existe');
           
           if($this->form_validation->run() == FALSE){
               $this->register();
           }
           else{
               $this->Super_model->add_productora();
               $datos = array('mensaje' => 'La productora se ha registrado correctamente');
               $this->load->view('usuario_view', $datos);
           }
        }
    }
    
    function verify_productora_name($sName){
        $var = $this->Super_model->verify_user($sName);
        if($var == true){
            return false;
        }else{
            return true;
        }
        
    }
    
}