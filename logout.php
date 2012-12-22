<html lang="en">
<head>
	<title> LOG OUT </title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Style-Type" content="text/css;">
	<link rel="stylesheet" href="css/survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
	<link rel="stylesheet" href="css/logout_p.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
	<script src="js/survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
	<meta http-equiv='refresh' content='0; url=index.php'>
          <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>


<body style="background-image:url(images/dunya.jpg);">

<div id="page">
	<a href="index.php">
           
	<div id="e5" class="cc30">
		&nbsp;&nbsp;&nbsp;&nbsp;Logout !
        </div>
            
	<span id="e4" class="cc31"></span>
	<span id="e3"></span>
<form id="f2" action="default.asp" method="post" onsubmit="return weCheckForm(this)">
<fieldset id="e2" class="cc32">
	<a href="index.php">
             <div class="progress progress-striped active">
  <div class="bar" style="width: 100%;"></div>
</div>

</fieldset>
</form>
</div>
     <?php
            session_start();
            ob_implicit_flush(true);
            ob_flush();
            sleep(2);
            session_destroy();
            header('Location: index.php');
            ?>
</body>
</html>
