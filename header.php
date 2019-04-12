<?php
#ob_start();

$headers = array();
function AddHeaderLine ($text) {
	global $headers;
	array_push($headers, $text);
}

?>
<html>
	<head>
		<title>INVIDEC.NET</title>
		<style>
			body{margin: 0px; padding: 0px; font-family: arial; color: #FFF;background-color: #111;}
			.block{padding: 20px; min-height: 350px; float: left; box-sizing: border-box; padding-bottom: 0px; transform: TranslateY(100px);transition: 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);}
			a {color: inherit; text-decoration: inherit;}
		</style>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="/templates/style.css"> 
		<link rel="stylesheet" type="text/css" href="/templates/test.css">
		<link rel="stylesheet" type="text/css" href="/account/conversations/style.css">
		
		<script src="/assets/jquery/jquery.min.js"></script>
		<script src="/templates/main.js"></script>
		<!-- Load an icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<?php 
			foreach ($headers as $line) {
				echo ($line);
			}
		?>
	</head>
	<body>