<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mainctrl extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name> 
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();
    }
	public function index() 
	{
		echo "";
		//$this->load->view('pages/home');
    }

    public function frontend($page = 'home') {

        if (!file_exists(APPPATH . 'views/pages/admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
            exit;
        }
        
        $data['page'] = $page;
        //$data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('common/header', $data);
        $this->load->view('pages/admin/' . $page, $data);
        $this->load->view('common/footer', $data);
	}
	
	public function loginfront($page = 'login') {

        if (!file_exists(APPPATH . 'views/pages/login/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
            exit;
        }
        
        $data['page'] = $page;
        //$data['title'] = ucfirst($page); // Capitalize the first letter
        
        $this->load->view('pages/login/' . $page, $data);
    }
}


?>