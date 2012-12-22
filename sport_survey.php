<?php
require_once('/securelogin.php');
?>
<html lang="en">
    <head>
        <title> SPORT SURVEY </title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Style-Type" content="text/css;">
        <link rel="stylesheet" href="css/survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
        <link rel="stylesheet" href="css/sport_survey_p.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
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
                            <li class="active"><a href="sport_survey.php"><i class="icon-globe icon-white"></i>Sport Survey</a></li>
                            <li><a href="contact_us.php"><i class="icon-book icon-white"></i>Contact Us</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div id="page1"></div>
        <div id="page">
            <h1 id="e46" class="cc69">
                <span class="label label-important"> SPORT SURVEY </span>
            </h1>
            <form id="f37" action="sport_result.php" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e37" class="cc74">
                    <label id="e36" class="cc75" for="e35">
                        <span class="label label-success"> What is your sex? </span>
                    </label>
                    <select id="e35" class="cc75" size="1" name="Sex" title="Gender">
                        <option> Female</option>
                        <option> Male</option>
                    </select><br>
                    <label id="e34" class="cc75" for="e33">
                        <span class="label label-success"> What is your age? </span>
                    </label>
                    <select id="e33" class="cc75" size="1" name="Age_Group" title="Age Group">
                        <option> under 18</option>
                        <option> 18 to 25</option>
                        <option> 26 to 29</option>
                        <option> 30 to 39</option>
                        <option> 40 to 49</option>
                        <option> 50 to 59</option>
                        <option> 60 and over</option>
                    </select><br>
                    <label id="e32" class="cc75" for="e31">
                        <span class="label label-success"> What country do you live in?</span>
                    </label>
                    <select id="e31" class="cc75" size="1" name="Country" title="Country">
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
                        <option> Turkey</option>
                        <option> Turkmenistan</option>
                        <option> Turks</option>
                        <option> Tugalu</option>
                        <option> Uganda</option>
                        <option> Ukraine</option>
                        <option> United Arab Emirates</option>
                        <option> United Kingdom</option>
                        <option selected="selected">United States</option>
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
                    <label id="e30" class="cc75" for="e29">
                        <span class="label label-success"> Are you a member of a sport club? </span>
                    </label>
                    <select id="e29" class="cc75" size="1" name="Sports_Club_Member" title="Are you a member of a sport club?">
                        <option> Yes</option>
                        <option> No</option>
                    </select><br>
                    <label id="e28" class="cc75" for="e27">
                        <span class="label label-success"> Who is your favorite athlete? </span>
                    </label>
                    <input id="e27" class="cc76" type="text" name="Favorite_Athlete" title="Who is your favorite athlete?" size="23"><br>
                    <label id="e26" class="cc75" for="e25">
                        <span class="label label-success"> What is your favorite sport to compete in? </span>
                    </label>
                    <select id="e25" class="cc75" size="1" name="Favorite_Sport_To_Compete_In" title="What is your favorite sport to compete in?">
                        <option> Archery</option>
                        <option> Athletics</option>
                        <option> Baseball</option>
                        <option> Basketball</option>
                        <option> Bowling</option>
                        <option> Boxing</option>
                        <option> Canoeing</option>
                        <option> Cricket</option>
                        <option> Cycling</option>
                        <option> Diving</option>
                        <option> Football</option>
                        <option> Golf</option>
                        <option> Gymnastics</option>
                        <option> Hockey</option>
                        <option> Motor Racing</option>
                        <option> Rugby</option>
                        <option> Shooting</option>
                        <option> Skating</option>
                        <option> Soccer</option>
                        <option> Squash</option>
                        <option> Swimming</option>
                        <option> Tennis</option>
                        <option> Track</option>
                        <option> Volleyball</option>
                        <option> Other</option>
                    </select><br>
                    <label id="e24" class="cc75" for="e23">
                        <span class="label label-success"> How often do you compete in sports? </span>
                    </label>
                    <select id="e23" class="cc75" size="1" name="How_Often_Do_You_Compete" title="How often do you compete in sports?">
                        <option> Daily</option>
                        <option> Weekly</option>
                        <option> From time to time</option>
                        <option> Never</option>
                    </select><br>
                    <label id="e22" class="cc75" for="e21">
                        <span class="label label-success"> What is your favorite sport to watch? </span>
                    </label>
                    <select id="e21" class="cc75" size="1" name="Favorite_Sport_To_Watch" title="What is your favorite sport to watch?">
                        <option> Archery</option>
                        <option> Athletics</option>
                        <option> Baseball</option>
                        <option> Basketball</option>
                        <option> Bowling</option>
                        <option> Boxing</option>
                        <option> Canoeing</option>
                        <option> Cricket</option>
                        <option> Cycling</option>
                        <option> Diving</option>
                        <option> Football</option>
                        <option> Golf</option>
                        <option> Gymnastics</option>
                        <option> Hockey</option>
                        <option> Motor Racing</option>
                        <option> Rugby</option>
                        <option> Shooting</option>
                        <option> Skating</option>
                        <option> Soccer</option>
                        <option> Squash</option>
                        <option> Swimming</option>
                        <option> Tennis</option>
                        <option> Track</option>
                        <option> Volleyball</option>
                        <option> Other</option>
                    </select><br>
                    <label id="e20" class="cc75" for="e19">
                        <span class="label label-success"> How often do you watch sports on TV? </span>
                    </label>
                    <select id="e19" class="cc75" size="1" name="How_Often_Do_You_Watch_On_TV" title="How often do you watch sports on TV?">
                        <option> Daily</option>
                        <option> Weekly</option>
                        <option> From time to time</option>
                        <option> Never</option>
                    </select><br>
                    <label id="e18" class="cc75" for="e17">
                        <span class="label label-success"> How often do you attend organized sport events?</span>
                    </label>
                    <select id="e17" class="cc75" size="1" name="How_Often_Do_You_Attend_Events" title="How often do you attend organized sport events?">
                        <option> Daily</option>
                        <option> Weekly</option>
                        <option> From time to time</option>
                        <option> Never</option>
                    </select><br>
                    <label id="e16" class="cc75" for="e15">
                        <span class="label label-success"> How often do you read sports pages in a paper? </span>
                    </label>
                    <select id="e15" class="cc75" size="1" name="How_Often_Do_You_Read_Sports_Papers" title="How often do you read sports pages in a paper?">
                        <option> Daily</option>
                        <option> Weekly</option>
                        <option> From time to time</option>
                        <option> Never</option>
                    </select><br>

                    <input id="e14" class="btn btn-primary btn-small" type="submit" title="Send Details" value="Send Details">
                    <input id="e13" class="btn btn-primary btn-small" type="reset" title="Clear Details" value="Clear Details">
                </fieldset>
            </form>
            
        </div>
    </body>
</html>
