<?php
require_once('/securelogin.php');
?>
<html lang="en">
    <head>
        <title> CONTACT US </title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Style-Type" content="text/css;">
        <link rel="stylesheet" href="css/survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
        <link rel="stylesheet" href="css/contact_us_p.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
        <script src="js/survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>


    <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="home.php">
                        <?php
                        echo $_SESSION['username'];
                        ?>
                    </a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            <a href="logout.php" class="navbar-link">Logout</a>
                        </p>
                        <ul class="nav">
                            <li><a href="home.php"><i class="icon-home icon-white"></i>Home</a></li>
                            <li><a href="car_survey.php"><i class="icon-road icon-white"></i>Car Survey</a></li>
                            <li><a href="music_survey.php"><i class="icon-music icon-white"></i>Music Survey</a></li>
                            <li><a href="sport_survey.php"><i class="icon-globe icon-white"></i>Sport Survey</a></li>
                            <li class="active"><a href="contact_us.php"><i class="icon-book icon-white"></i>Contact Us</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div id="page1">
            
        </div>
        <div id="page">

            <!--Contect us pic -->	
            <h1 id="e24" class="cc79">
                <span class="label label-important"> <center>SURVEYS</center></span>
            </h1>
            <h4 id="e16" class="cc83">
                <span class="label label-important"> <center>Contact Us</center></span>
            </h4>
            <h6 id="e15" class="cc84"></h6>
            <div id="e14">
                <script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAilrwpAoXarYzayvFNGw62BRBTs-YASOmfrPPisYZ_9m9BqNxjRR61mqGkhiV4u7yKl93oVX6Wn5lkA ">
                </script>
                <script type="text/javascript">
                    document.writeln('<div style="width:355px;height:350px;"></div>');
                    var dv = document.getElementsByTagName('div');
                    var el = (dv.length) ? dv[dv.length-1] : null;
                    if (el && GBrowserIsCompatible()) 
                    {
                        var mp = new GMap2( el );
                        var pt = new GLatLng(41.025588,28.9588432);
                        if (mp && pt)
                        {
                            mp.setCenter(pt,13);
                            var xy = new GMarker(pt);
                            var ht = '';
                            ht += '<div style="font-family:arial;font-size:10pt;color:#006ea9;">Kadir Has University</div>';
                            ht += '<div style="font-family:arial;font-size:8pt;color:black;">91 Kadir Has Street</div>';
                            ht += '<div style="font-family:arial;font-size:8pt;color:black;">Istanbul</div>';
                            ht += '<div style="font-family:arial;font-size:8pt;color:black;"><em>Turkey</em></div>';
                            xy.bindInfoWindowHtml(ht);
                            mp.addOverlay(xy);
                        }
                    }
                </script>
            </div>
            
            <form id="f13" action="mailto:your@address.here?subject=Request Form" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e13" class="cc85">
                    <label id="e12" class="cc86">
                        <span class="label label-inverse"> <center>Name</center></span>
                    </label><br>
                    <input id="e11" class="cc87" type="text" name="Name" title="Name" size="36"><br>
                    <label id="e10" class="cc86">
                        <span class="label label-inverse"> <center>E-mail</center></span>
                    </label><br>
                    <input id="e9" class="cc87" type="text" name="Email" title="E-mail" size="36"><br>
                    <label id="e8" class="cc86">
                        <span class="label label-inverse"> <center>Address</center></span>
                    </label><br>
                    <input id="e7" class="cc87" type="text" name="Address" title="E-mail" size="36"><br>
                    <label id="e6" class="cc86">
                        <span class="label label-inverse"> <center>Comments</center></span>
                    </label><br>
                    <textarea id="e5" class="cc87" name="Comments" title="Comments" rows="2" cols="28">
Enter Comments here...
                    </textarea><br>

                    <input id="e4"class="btn btn-primary btn-small" type="submit" title="Send Details" value="Send Details">
                </fieldset>
            </form>
            <div id="e3" class="cc89">
                <a href="http://www.khas.edu.tr/">
                    <span class="label label-important"> <center>Kadir Has University</center></span></a>
            </div>
            <span id="e2" class="cc90"></span>

        </div>
    </body>
</html>
