<?php
	if(session_id() != ''){
    	session_destroy();
	}
	header("Location: homepage.html");
	exit(0);

?>