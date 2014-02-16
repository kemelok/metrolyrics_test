 <?php
 $this->load->view('head', array('extrajs' => array('messages_validation.js')));

 $this->load->view('mypages/msgList', array('messages' => $messages)); 

 $this->load->view('footer');