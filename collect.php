<?php

	if ( !empty( $_POST['data'] ) ) {

		echo 'The following string was sent from form #1: ' . $_POST['data'];

	} elseif ( !empty( $_GET['data'] ) ) {

		echo 'The following string was sent from form #2: ' . $_GET['data'];

	}
	else {
		echo 'Missing data in input. Please fill ! <br>';
		echo '<a href="http://localhost:8000/form.php"><< back to form</a>';
	}

