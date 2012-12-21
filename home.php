<?php
require_once('/securelogin.php');
?>
<html lang="en">
    <head>
        <title> CATEGORIES </title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Style-Type" content="text/css;">
        <link rel="stylesheet" href="css/survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
        <link rel="stylesheet" href="css/home_p.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
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
                    </a>
                    <a class="brand" href="#">Interviewer</a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            <a href="logout.php" class="navbar-link">Logout</a>
                        </p>
                        <ul class="nav">
                            <li class="active"><a href="home.php"><i class="icon-home icon-white"></i>Home</a></li>
                            <li><a href="#about"><i class="icon-book icon-white"></i>About</a></li>
                            <li><a href="#faq"><i class="icon-star icon-white"></i>FAQ?</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>


        <div id="page">


            <h1 id="e41" class="cc33">
                <span class="label label-important"> <center>SURVEYS</center></span>     
            </h1>

            <span id="e40" class="cc34"></span>
            <span id="e39"></span>
            <div id="e38" class="cc35">

                <span class="label label-warning"> <center>Categories</center></span>
            </div>
            <div id="e37" class="cc36">
                <span class="label label-warning"> <center>Car Survey</center></span>
            </div>
            <div id="e36" class="cc36">
                <span class="label label-warning"> <center>Music Survey</center></span>
            </div>
            <div id="e35" class="cc36">
                <span class="label label-warning"> <center>Sport Survey</center></span>
            </div>
            <div id="e34" class="cc36">

                <span class="label label-warning"> <center>Contact Us</center></span></a>
            </div>
            <span id="e33" class="cc37"></span>
            <form id="f32" action="default.asp" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e32" class="cc38">
                    <legend id="e31" class="cc39">
                        <span class="label label-important"> <center>Contact Details</center></span>
                    </legend><br>
                    <label id="e30" class="cc40" for="e29">
                        <span class="label label-success"> <center>Company Name</center></span>
                    </label>
                    <input id="e29" class="cc41" type="text" name="Company" title="Company Name" size="23"><br>
                    <label id="e28" class="cc40" for="e27">
                        <span class="label label-success"> <center> Your Position</center></span>
                    </label>
                    <input id="e27" class="cc41" type="text" name="Position" title="Your Position" size="23"><br>
                    <label id="e26" class="cc40" for="e25">
                        <span class="label label-success"> <center>City</center></span>
                    </label>
                    <input id="e25" class="cc41" type="text" name="City" title="City" size="23"><br>
                    <label id="e24" class="cc40" for="e23">
                        <span class="label label-success"> <center>State</center></span>
                    </label>
                    <input id="e23" class="cc41" type="text" name="State" title="State" size="23"><br>
                    <label id="e22" class="cc40" for="e21">
                        <span class="label label-success"> <center>Phone</center></span>
                    </label>
                    <input id="e21" class="cc41" type="text" name="Phone" title="Phone" size="23"><br>
                    <label id="e20" class="cc40" for="e19">
                        <span class="label label-success"> <center>Website</center></span>
                    </label>
                    <input id="e19" class="cc41" type="text" name="Web_Site" title="Website" size="23"><br>
                    <label id="e18" class="cc40" for="e17">
                        <span class="label label-success"> <center>Country</center></span>
                    </label>
                    <select id="e17" class="cc42" size="1" name="Country" title="Country">
                        <option> Afghanistan</option>
                        <option> Albania</option>
                        <option> Algeria</option>
                        <option> American Samoa</option>
                        <option> Andorra</option>
                        <option> Angola</option>
                        <option> Anguilla</option>
                        <option> Antarctica</option>
                        <option> Antigua and Barbuda</option>
                        <option> Argentina</option>
                        <option> Armenia</option>
                        <option> Aruba</option>
                        <option> Australia</option>
                        <option> Austria</option>
                        <option> Azerbaijan</option>
                        <option> Bahamas</option>
                        <option> Bahrain</option>
                        <option> Bangladesh</option>
                        <option> Barbados</option>
                        <option> Belarus</option>
                        <option> Belgium</option>
                        <option> Belize</option>
                        <option> Benin</option>
                        <option> Bermuda</option>
                        <option> Bhutan</option>
                        <option> Bolivia</option>
                        <option> Bosnia</option>
                        <option> Botswana</option>
                        <option> Bouvet Island</option>
                        <option> Brazil</option>
                        <option> Brunei Darussalam</option>
                        <option> Bulgaria</option>
                        <option> Burkina Faso</option>
                        <option> Burundi</option>
                        <option> Cambodia</option>
                        <option> Cameroon</option>
                        <option> Canada</option>
                        <option> Caicos Islands</option>
                        <option> Cape Verde</option>
                        <option> Cayman Islands</option>
                        <option> Central African Rep.</option>
                        <option> Chad</option>
                        <option> Chile</option>
                        <option> China</option>
                        <option> Christmas Island</option>
                        <option> Cocos Islands</option>
                        <option> Colombia</option>
                        <option> Comoros</option>
                        <option> Congo</option>
                        <option> Cook Islands</option>
                        <option> Costa Rica</option>
                        <option> Cote D'Ivoire</option>
                        <option> Croatia</option>
                        <option> Cuba</option>
                        <option> Cyprus</option>
                        <option> Czech Republic</option>
                        <option> Czechoslovakia</option>
                        <option> Denmark</option>
                        <option> Djibouti</option>
                        <option> Dominica</option>
                        <option> Dominican Republic</option>
                        <option> East Timor</option>
                        <option> Ecuador</option>
                        <option> Egypt</option>
                        <option> El Salvador</option>
                        <option> Equatorial Guinea</option>
                        <option> Eritrea</option>
                        <option> Estonia</option>
                        <option> Ethiopia</option>
                        <option> Falkland Islands</option>
                        <option> Faroe Islands</option>
                        <option> Fiji</option>
                        <option> Finland</option>
                        <option> France</option>
                        <option> French Guiana</option>
                        <option> French Polynesia</option>
                        <option> French Sth Ter.</option>
                        <option> Gabon</option>
                        <option> Gambia</option>
                        <option> Georgia</option>
                        <option> Germany</option>
                        <option> Ghana</option>
                        <option> Gibraltar</option>
                        <option> Great Britain (UK)</option>
                        <option> Greece</option>
                        <option> Greenland</option>
                        <option> Grenada</option>
                        <option> Guadeloupe</option>
                        <option> Guam</option>
                        <option> Guatemala</option>
                        <option> Guinea</option>
                        <option> Guinea-Bissau</option>
                        <option> Guyana</option>
                        <option> Haiti</option>
                        <option> Honduras</option>
                        <option> Hong Kong</option>
                        <option> Hungary</option>
                        <option> Iceland</option>
                        <option> India</option>
                        <option> Indonesia</option>
                        <option> Iran</option>
                        <option> Iraq</option>
                        <option> Ireland</option>
                        <option> Israel</option>
                        <option> Italy</option>
                        <option> Jamaica</option>
                        <option> Japan</option>
                        <option> Jordan</option>
                        <option> Kazakhstan</option>
                        <option> Kenya</option>
                        <option> Kiribati</option>
                        <option> Korea (North)</option>
                        <option> Korea (South)</option>
                        <option> Kuwait</option>
                        <option> Kyrgyzstan</option>
                        <option> Laos</option>
                        <option> Latvia</option>
                        <option> Lebanon</option>
                        <option> Lesotho</option>
                        <option> Liberia</option>
                        <option> Libya</option>
                        <option> Liechtenstein</option>
                        <option> Lithuania</option>
                        <option> Luxembourg</option>
                        <option> Macau</option>
                        <option> Macedonia</option>
                        <option> Madagascar</option>
                        <option> Malawi</option>
                        <option> Malaysia</option>
                        <option> Maldives</option>
                        <option> Mali</option>
                        <option> Malta</option>
                        <option> Marshall Islands</option>
                        <option> Martinique</option>
                        <option> Mauritania</option>
                        <option> Mauritius</option>
                        <option> Mayotte</option>
                        <option> Mexico</option>
                        <option> Micronesia</option>
                        <option> Moldova</option>
                        <option> Monaco</option>
                        <option> Mongolia</option>
                        <option> Montserrat</option>
                        <option> Morocco</option>
                        <option> Mozambique</option>
                        <option> Myanmar</option>
                        <option> Namibia</option>
                        <option> Nauru</option>
                        <option> Nepal</option>
                        <option> Netherlands</option>
                        <option> Netherlands Antilles</option>
                        <option> New Caledonia</option>
                        <option> New Zealand</option>
                        <option> Nicaragua</option>
                        <option> Niger</option>
                        <option> Nigeria</option>
                        <option> Niue</option>
                        <option> Norfolk Island</option>
                        <option> Norway</option>
                        <option> Oman</option>
                        <option> Pakistan</option>
                        <option> Palau</option>
                        <option> Panama</option>
                        <option> Papua New Guinea</option>
                        <option> Paraguay</option>
                        <option> Peru</option>
                        <option> Philippines</option>
                        <option> Pitcairn</option>
                        <option> Poland</option>
                        <option> Portugal</option>
                        <option> Puerto Rico</option>
                        <option> Qatar</option>
                        <option> Reunion</option>
                        <option> Romania</option>
                        <option> Russian Federation</option>
                        <option> Rwanda</option>
                        <option> Saint Kitts - Nevis</option>
                        <option> Saint Lucia</option>
                        <option> Samoa</option>
                        <option> San Marino</option>
                        <option> Sao Tome - Principe</option>
                        <option> Saudi Arabia</option>
                        <option> Senegal</option>
                        <option> Seychelles</option>
                        <option> Sierra Leone</option>
                        <option> Singapore</option>
                        <option> Slovak Republic</option>
                        <option> Slovenia</option>
                        <option> Solomon Islands</option>
                        <option> Somalia</option>
                        <option> South Africa</option>
                        <option> Spain</option>
                        <option> Sri Lanka</option>
                        <option> St. Helena</option>
                        <option> St. Pierre</option>
                        <option> Sudan</option>
                        <option> Suriname</option>
                        <option> Svalbard</option>
                        <option> Swaziland</option>
                        <option> Sweden</option>
                        <option> Switzerland</option>
                        <option> Syria</option>
                        <option> Taiwan</option>
                        <option> Tajikistan</option>
                        <option> Tanzania</option>
                        <option> Thailand</option>
                        <option> Togo</option>
                        <option> Tokelau</option>
                        <option> Tonga</option>
                        <option> Tobago</option>
                        <option> Trinidad</option>
                        <option> Tunisia</option>
                        <option selected="selected"> Turkey</option>
                        <option> Turkmenistan</option>
                        <option> Turks</option>
                        <option> Tugalu</option>
                        <option> Uganda</option>
                        <option> Ukraine</option>
                        <option> United Arab Emirates</option>
                        <option> United Kingdom</option>
                        <option> United States</option>
                        <option> Uruguay</option>
                        <option> USSR (former)</option>
                        <option> Uzbekistan</option>
                        <option> Vanuatu</option>
                        <option> Vatican City State</option>
                        <option> Venezuela</option>
                        <option> Vietnam</option>
                        <option> Virgin Islands (G.B.)</option>
                        <option> Virgin Islands (U.S.)</option>
                        <option> Wallis and Futuna Is.</option>
                        <option> Western Sahara</option>
                        <option> Yemen</option>
                        <option> Yugoslavia</option>
                        <option> Zaire</option>
                        <option> Zambia</option>
                        <option> Zimbabwe</option>
                    </select><br>
                    <label id="e16" class="cc39">
                        <span class="label label-important"> <center>Comments</center></span>
                    </label><br>
                    <textarea id="e15" class="cc41" name="Comments" title="Comments" rows="2" cols="29">
Enter Comments here...
                    </textarea><br>
                    <input id="e14" class="btn btn-primary btn-small" type="submit" title="Send Details" value="Send Details">
                    <input id="e13" class="btn btn-primary btn-small" type="reset" title="Clear Details" value="Clear Details">
                </fieldset>
            </form>
            <form id="f12" action="mailto:your@address.here?subject=Request Form" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e12" class="cc38">
                    <legend id="e11" class="cc43">
                        <a href="car_survey.php">
                            <span class="label label-inverse"> <center>Car Survey</center></span></a>
                    </legend><br>
                    <label id="e10" class="cc43">
                        <a href="music_survey.php">
                            <span class="label label-inverse"> <center>Music Survey</center></span></a>
                    </label><br>
                    <label id="e9" class="cc43">
                        <a href="sport_survey.php">
                            <span class="label label-inverse"> <center>Sport Survey</center></span></a>
                    </label><br>
                    <label id="e8" class="cc43">
                        <a href="contact_us.php">
                            <span class="label label-inverse"> <center>Contact Us</center></span></a>
                    </label>
                    <label id="e7" class="cc43">
                        <a href="#">
                            <span class="label label-inverse"> <center>Home</center></span></a>
                    </label>
                    <span id="e6"></span>
                    <span id="e5"></span>
                    <span id="e4"></span>
                    <span id="e3"></span>
                    <span id="e2"></span>
                </fieldset>
            </form>
            <!-- <div id="e1" class="cc44">
                    <a href="logout.php">
                    <input id="e1"  class="btn btn-primary btn-medium" data-loading-text="Please Wait..."type="submit" title="Log Out" value="Log Out"><br></a>
            </div> Alternative logout button-->
        </div>
    </body>
</html>
