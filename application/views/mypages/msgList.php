
<a href="<?php echo  site_url('mypages/createpost');?>" > <?php echo $this->lang->line('Add a new message')?></a>
<table>
<tr>
<th><?php echo lang('ID')?></th>
<th><?php echo lang('Time')?></th>
<th><?php echo lang('Name')?></th>
<th><?php echo lang('Message')?></th>
</tr>

<?php
if(empty($messages)) {
	echo "<tr><td colspan=4>No Messages</td><tr>";
} else {
	foreach($messages as $msg) {
		?>
			<tr>
			<th><?php echo $msg->id ?></th>
			<th><?php echo $msg->createtime ?></th>
			<th><?php echo $msg->name ?></th>
			<th><?php echo $msg->message ?></th>
			</tr>
		<?php
	}
}