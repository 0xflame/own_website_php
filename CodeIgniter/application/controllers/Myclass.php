<?php

class Myclass extends CI_Controller {

    function index($page = 'home') {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            show_404();
        $data['title'] = ucfirst($page); // Capitalize the first letter
        session_start();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);      
    }

}

?>