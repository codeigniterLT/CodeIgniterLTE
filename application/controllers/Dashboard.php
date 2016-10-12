<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
    }

	/**
	*
	* DashBoard controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/dashboard
	*	- or -
	* 		http://example.com/index.php/dashboard/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/dashboard/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	* @see
	*/

	public function index()	{

        // Some configuration data for Dashboard
        $data['page'] = array(
        					'title' => 'Dashboard | CodeIgniter + AdminLTE',
        					'user' => 'CodeIgniter LTE',
        					);

        // Let's add some custom JS, CSS files which are required by page
        add_css(array(
        		'assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css'
        		));
        add_js(array(
        		'assets/AdminLTE/plugins/fastclick/fastclick.js',
        		'assets/AdminLTE/plugins/sparkline/jquery.sparkline.min.js',
        		'assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        		'assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        		'assets/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js',
        		'assets/AdminLTE/plugins/chartjs/Chart.min.js',
        		'assets/AdminLTE/dist/js/pages/dashboard2.js',
        		'assets/AdminLTE/dist/js/demo.js'
        		));

        // Render
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer', $data);
	}
}
