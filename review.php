<? php

function sponsor_form_review() {
	$output = 
	'<p>This is page 2!<br/>
	<form action="' . esc_url_raw( $_SERVER['REQUEST_URI'] ) . '" method="post">
	<input type="submit" name="back" id="back" value="Back" />
	<input type="submit" name="next" id="next" value="Next" />
	</form>';
	//if(isset($_POST["back"])) { 
	//	sponsor_form();
	//} else 
	if(isset($_POST["next"])) { 
		echo "kzlxjvpoaijrewj";
	//	sponsor_form_payment();
	} else {
		echo $output;
	}
}
function testing() {
	echo "blah";
	lkfjdsal;;ldaj;lkf;ldafjds
	alksjdfkljaslfj;sadjfds
	
}

sponsor_form_review();
// lk;dsaf;ljdsa;lfldsa
?>