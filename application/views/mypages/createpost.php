 <?php
 $this->load->view('head', array('extrajs' => array('messages_validation.js')));

echo form_open('mypages/postmessage', $attributes = array('id' => 'myform', 'name' => 'myform'));


?>

					<ul>						
						<li>
							<label for="name"><?php echo lang('Name')?>:</label>
							<input name="name" id="name" type="text" >
							<div name="nameErr" id="nameErr" style="display:none;">
								<?php echo lang('nameFieldError')?>
							</div>
						</li>
						<li>
							<label for="message"><?php echo lang('Message')?>:</label>
							<textarea name="message" id="message" ></textarea>
							<div name="messageErr" id="messageErr" style="display:none;">
								<?php echo lang('msgFieldError')?>
							</div>
						</li>
						<li>							
							<input type="submit" value="<?php echo $this->lang->line('Submit')?>">
						</li>
					</ul>
				
				<?php
echo form_close();


$this->load->view('footer');
