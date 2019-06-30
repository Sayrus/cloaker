<?php
$url = isset($_GET['url']) ? urldecode($_GET['url']) : 'https://example.com';
?>
<html>
	<head>
	<meta id="redirect" http-equiv="refresh" content="0;URL='<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>'" />
	</head>
</html>
