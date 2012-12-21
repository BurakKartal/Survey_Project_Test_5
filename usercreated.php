<html lang="en">
    <head>
        <title> User Created </title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Style-Type" content="text/css;">
        <link rel="stylesheet" href="css/survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
        <link rel="stylesheet" href="css/logout_p.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
        <script src="js/survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
        <meta http-equiv='refresh' content='0; url=index.php'>
    </head>


    <body>

        <div id="page">
            <a href="index.html">

                <div id="e5" class="cc30">
                    User Created!
                </div>
                <span id="e4" class="cc31"></span>
                <span id="e3"></span>

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
