<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function index()
	{
       $crud = new Grocery_CRUD;
         $crud -> set_table("produto");
        $crud -> set_field_upload("foto");
        $form = $crud->render();
        
        $this->load->view('crud', $form);
        
	}
    public function noticia()
	{
        $crud = new Grocery_CRUD;
        $crud -> set_tableb("noticia");
        $crud -> file_upload("foto");
        $form = $crud->render();
        
        $this->load->view('crud', $form);
	}
    
}
