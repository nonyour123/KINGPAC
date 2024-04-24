<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

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
	
	public function event()
	{
		$this->render_view('main/view_event');
	}
	
	public function event1()
	{
		$this->render_view('main/view_event1');
	}

	public function event2()
	{
		$this->render_view('main/view_event2');
	}

	public function event3()
	{
		$this->render_view('main/view_event3');
	}

	public function event4()
	{
		$this->render_view('main/view_event4');
	}

	public function event5()
	{
		$this->render_view('main/view_event5');
	}

	public function event6()
	{
		$this->render_view('main/view_event6');
	}
}
