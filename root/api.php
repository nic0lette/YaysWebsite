<?php
// Only allow secure requests
function tlsRequired() {
	// Allow the request method to be overriden
	if (!isset($_SERVER["HTTPS"])) {
		header("HTTP/1.1 426 Upgrade Required");
		header("Upgrade: TLS/1.0, HTTP/1.1");
		ob_end_clean();
		header("Connection: close");
		ignore_user_abort(); // optional
		ob_start();
		$size = ob_get_length();
		header("Content-Length: $size");
		ob_end_flush(); // Strange behaviour, will not work
		flush(); // Unless both are called !
		return false;
	}
}
?>
