<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operation extends CI_Controller {

    private $another_css;
	private $another_js;
    private $data;
	public function __construct()
	{

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
        $this->data['footer'] = $this->parser->parse('bar/footer', $this->footer, TRUE);
		$this->data['slide_bar'] = $this->parser->parse('bar/slidebar', $this->footer, TRUE);
        $this->data['page_content'] = $this->parser->parse($path, $this->data, TRUE);
        $this->data['another_css'] = $this->another_css;
        $this->data['another_js'] = $this->another_js;
        $this->parser->parse('bar/pagecontent', $this->data);
    }
	
	public function Operation()
	{
		$this->render_view('main/view_Production');
	}

    public function Operation1()
	{
		$this->render_view('main/view_maintenance');
	}

    public function Operation2()
	{
		$this->render_view('main/view_qa');
	}

	public function Operation3()
	{
		$this->render_view('main/view_qc');
	}

	public function Operation4()
	{
		$this->render_view('main/view_quailty management');
	}

	public function Operation5()
	{
		$this->render_view('main/view_Health, safety & environment');
	}

	public function Operation6()
	{
		$this->render_view('main/view_zonea');
	}

	public function Operation7()
	{
		$this->render_view('main/view_zoneb');
	}

	public function Operation8()
	{
		$this->render_view('main/view_zonec');
	}

	public function Operation9()
	{
		$this->render_view('main/view_zonex');
	}

	public function Operation10()
	{
		$this->render_view('main/view_zonekb');
	}

	public function Operation11()
	{
		$this->render_view('main/view_production management');
	}

	public function Operation12()
	{
		$this->render_view('main/view_warehouse');
	}

	public function Operation13()
	{
		$this->render_view('main/view_chief operating officer');
	}
}
