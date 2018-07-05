<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<p>Hello</p> 
	<?= $this->session->userdata('FullName') ?>


	<?php if ($this->session->has_userdata('FullName')): ?>
		<a href="https://www.google.com.vn">Download here</a>
		<a href="http://localhost/ITSharing/Login/logoutAccount">Logout</a>
	<?php else: ?>
		You can download document when you login <a href="http://localhost/ITSharing/Login">Login now</a>
	<?php endif ?>
	
</body>
</html>