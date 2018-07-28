<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->template->load('template', 'home');
    }

    function home() {
        $this->template->load('template', 'home');
    }

    function produk() {
        $this->template->load('template', 'produk');
    }

}
