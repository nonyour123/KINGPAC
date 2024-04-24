<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financial extends CI_Controller {

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
	
	public function Financial()
	{
		$this->render_view('main/view_financeandaccounting');
	}

    public function Financial1()
	{
		$this->render_view('main/view_management information system');
	}

	public function Financial3()
	{
		$this->render_view('main/view_business strategy');
	}

	public function Financial4()
	{
		$this->render_view('main/view_import and corporate');
	}

	public function Financial5()
	{
		$this->render_view('main/view_export');
	}

    public function Financial6()
	{
		$this->render_view('main/view_purchase');
	}

	public function Financial7()
	{
		$this->render_view('main/view_financial');
	}

	public function Financial8()
	{
		$this->render_view('main/view_cost accounting');
	}

	public function Financial19()
	{
		$this->render_view('main/view_chieffinancial');
	}

	public function Financial20()
	{
		$this->render_view('main/view_directorfinance');
	}
}
