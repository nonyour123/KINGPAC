<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubMenu extends CI_Controller {


	private $another_css;
    private $another_js;
    private $data;
	public function __construct() {

		parent::__construct();

		$this->load->helper('url');
		$this->load->library('parser');
		$this->load->library('session');

        
		$this->data["base_url"] = base_url();

		$result['base_url'] = base_url();
        $result['site_url'] = site_url();

        $this->data = $result;
        $this->header = $result;
        $this->slide_bar = $result;
        $this->footer = $result;


        if (!$this->session->userdata('userId')) {
            redirect(base_url() . 'Login/login');

        }

	}

    protected function render_view($path)
    {
        $this->data['header'] = $this->parser->parse('bar/header', $this->header, TRUE);
        $this->data['slide_bar'] = $this->parser->parse('bar/slidebar', $this->slide_bar, TRUE);
        $this->data['footer'] = $this->parser->parse('bar/footer', $this->footer, TRUE);
        $this->data['page_content'] = $this->parser->parse($path, $this->data, TRUE);
        $this->data['another_css'] = $this->another_css;
        $this->data['another_js'] = $this->another_js;
        $this->parser->parse('bar/pagecontent', $this->data);
    }
	
	public function subMenu()
	{
		
		$this->another_js = "<script src='" . base_url() . "assets/js/mngSubmenu.js'></script>";
        $this->render_view('main/view_subMenu');
        
	}

	
    public function callApi()
    {
        $url = $_GET["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $data = json_decode($output, true);
        // $data = $output;
        // print_r($output);
        if (empty($data)) {
            echo "NO DATA";
        }
        echo json_encode($data);
    }

    public function callApiShowData()
    {
        $result = $this->curPostRequest('Manage_submenu/show_submenu', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
        echo json_encode($result);

    }
    public function callApiUpdateStatus()
    {
        $result = $this->curPostRequest('Manage_submenu/update_flg', array('data' => serialize($_POST) ,'session' =>serialize( $this->session->userdata('userName'))));
        echo json_encode($result);

    }
    public function callApiPermis()
    {
        $result = $this->curPostRequest('Login/show_menu', array('data' => serialize($this->session->userdata('perMissionGroup'))));
        echo json_encode($result);
    }
    public function callApiDetail()
    {
        $result = $this->curPostRequest('Manage_submenu/show_submenu', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
        echo json_encode($result);

    }
    public function callApiAddSubMenu()
    {
        $result = $this->curPostRequest('Manage_submenu/insert_sub_menu', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
        echo json_encode($result);

    }
    public function callApiShowEdit()
    {
        $result = $this->curPostRequest('Manage_submenu/upd_show_sub_menu', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
        echo json_encode($result);

    }
    public function callApiSaveEdit()
    {
        $result = $this->curPostRequest('Manage_submenu/edit_sub_menu', array('data' => serialize($_POST),'session' => serialize($this->session->userdata('userName'))));
        echo json_encode($result);

    }
    
    
    function curPostRequest($enpoint, $param_data, $is_array = true, $associative = false){
        /* Endpoint */
        $url = 'http://127.0.0.1/api/' . $enpoint;
    
        /* eCurl */
        $curl = curl_init($url);
    
        /* Data */
        $data = (array) $param_data;
    
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    
        /* Set JSON data to POST */
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    
        /* Define content type */
        // curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
        /* Return json */
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
        /* make request */
        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            echo 'cURL error: ' . curl_error($curl);
            exit;
        }
    
        /* close curl */
        curl_close($curl);
    
        return $is_array ? json_decode($result, $associative) : $result;
    }

}