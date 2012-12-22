<html lang="en">
    <head>
        <title> WELCOME </title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Style-Type" content="text/css;">
        <link rel="stylesheet" href="css/survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
        <link rel="stylesheet" href="css/index_p.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
        <script src="js/survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
        <script src="js/index_a.js" type="text/javascript"></script>		<!--// Motion Script //-->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>


    <body onload="if(IE||V5) OnWeLoad()">
        <div id="page">
            <div class="heading1">
                <br>
                <h1>INTERVIEWER</h1>
                <p>Here, we ask the questions?<p>
            </div>
            <div class="Uyarı">
            <div class="alert alert-block alert-error fade in">
                <h4 class="alert-heading">Oh snap! You got an error!</h4>
                <p>Wrong User Name or Password</p>
            </div>
            </div>
            <span id="e27"></span>
            <span id="e26" class="cc01"></span>
            <div id="e25">

            </div>
            <div id="e24">

            </div>

            <form id="f19" action="mailto:your@address.here?subject=Request Form" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e19" class="cc02">
                    <legend id="e18" class="cc05">
                        <a href="registration.php">
                            <span class="label label-success"> Registration</span></a>
                    </legend>
                </fieldset>
            </form>
            <form id="f17" action="mailto:your@address.here?subject=Request Form" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e17" class="cc02">
                    <legend id="e16" class="cc05">
                        <a href="forgot_password.php">
                            <span class="label label-success"> Forgot Password</span></a>
                    </legend><br>
                </fieldset>
            </form>
            <form id="f15" action="mailto:your@address.here?subject=Request Form" method="post" onsubmit="return weCheckForm(this)">
                <fieldset  class="cc02">
                    <legend class="cc05">
                        <!--Please Enter Button -->
                        <!--  <legend id="e14" class="cc05">
                            <a href="home.htm">
                                 <span class="label label-success"> Please Enter</span></a></br></br> -->

                        <!-- Social Media Icon -->
                        <div style="padding-bottom: 10px;">
                            <a href="https://facebook.com/">                  
                                <img src="images/fcon.png"></a> 
                            <a href="https://twitter.com/">   
                                <img src="images/tcon.png"></a>
                            <a href="https://github.com/">   
                                <img src="images/Github.png"></a>
                            <a href="https://www.tumblr.com/">   
                                <img src="images/Tumblr.png"></a>

                        </div>

                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50c1354b3d501792"></script>
                        <!-- AddThis Button END -->
                    </legend>
                </fieldset>
            </form>
            <form id="f13" method="POST" action="loginproc.php">
                <fieldset id="e13" class="cc02">
                    <label id="e12" class="cc06" for="e11" >
                        <span class="label label-info"> Name:</span>


                    </label>
                    <input id="e11" class="input-append" placeholder="Name" type="text" name="username" title="Name" size="23"><br>
                    <label id="e10" class="cc06" for="e8">
                        <span class="label label-info">Password:</span>

                    </label>
                    <input id="e9"  class="btn btn-primary btn-small" data-loading-text="Sending..."type="submit" title="Send Details" value="Send Details"><br>
                    <input id="e8" class="input-append" placeholder="Password" type="password" name="password" size="23">
                </fieldset>

            </form>
        </div>
        <?php
        session_start();
        ob_implicit_flush(true);
        ob_flush();
        sleep(5);
        ?>
    </body>
</html>
