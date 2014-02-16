 <?php

$this->load->view('head', array('extrajs' => array('messages_validation.js')));

echo lang('Saved Message'); 

$this->load->view('mypages/msgList', array('messages' => $messages)); 

$this->load->view('footer');