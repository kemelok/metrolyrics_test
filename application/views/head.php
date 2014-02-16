
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<?php
	if(is_array($extrajs)) {
		foreach($extrajs as $js) {
			echo "<script src='" . static_url() . "/js/" . $js . "'></script>";

		}
	}
	?>
</head>
<body>