<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mypages extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('messagesmodel', 'messages');
        //$this->output->enable_profiler(TRUE);
    }

    public function index()
	{		
		// i like storing the base data in $this->data as it allows you to put information from extending an auth core method etc..
		$this->data['messages'] = $this->messages->getList();
		$this->load->view('mypages/index', $this->data);
	}   

	public function createpost()
	{		
		$this->load->view('mypages/createpost');
	}

	public function postmessage()
	{
		
		try {
			$message = $this->messages->createNew($_POST['name'], $_POST['message']);
			$message->validate();
			$message->save();
			$this->data['messages'] = $this->messages->getList();
			$this->load->view('mypages/savepost',$this->data);
		} catch (Exception $e) {
			$this->data['error'] = $e->getMessage();
    		$this->load->view('error', $this->data);
		}		
	}
}
