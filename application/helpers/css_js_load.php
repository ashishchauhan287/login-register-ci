<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Css_js_load extends CI_Controller {

function __construct() {
parent::__construct();

// Load url helper
$this->load->helper('url');
}

public function index() {

// View "css_js_view" Page.
$this->load->view('css_js_view');
}
}
?>