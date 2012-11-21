<html lang="en">
<head>
	<title> LOG OUT </title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Style-Type" content="text/css;">
	<link rel="stylesheet" href="survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
	<link rel="stylesheet" href="survey_006_p.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
	<script src="survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
	<meta http-equiv='refresh' content='0; url=index.php'>
</head>


<body>

<div id="page">
	<a href="index.html">
		<img id="e6" name="e6" src="images/survey006004.jpg" title="" alt="survey006004.jpg" align="right" border="0"></a>
	<div id="e5" class="cc30">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log Out !
	</div>
	<span id="e4" class="cc31"></span>
	<span id="e3"></span>
<form id="f2" action="default.asp" method="post" onsubmit="return weCheckForm(this)">
<fieldset id="e2" class="cc32">
	<a href="index.html">
		<img id="e1" name="e1" src="images/survey006001.jpg" title="" alt="survey006001.jpg" align="right" border="0"></a>
</fieldset>
</form>
</div>
     <?php
            session_start();
            ob_implicit_flush(true);
            ob_flush();
            sleep(5);
            header('Location: index.php');
            ?>
</body>
</html>
