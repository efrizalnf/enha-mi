<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Error extends CI_Controller{
    function __construct() {
        parent::__construct();
         $this->load->helper('url');
    }

    // Overide the 404 error
    public function show_404($page = '', $log_error = TRUE)
    {
        // Since $this is not available, use $this->CI instead
        $this->CI =& get_instance();
 $this->load->view('maintenance');
        // Your awesome code here!
        // ...
    }
}