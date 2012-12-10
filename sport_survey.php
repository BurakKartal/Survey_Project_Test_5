<html lang="en">
    <head>
        <title> SPORT SURVEY </title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Style-Type" content="text/css;">
        <link rel="stylesheet" href="css/survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
        <link rel="stylesheet" href="css/sport_survey_p.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
        <script src="survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
    </head>


    <body>
        <?php
            require_once('/securelogin.php');
        ?>
        <div id="page">
            <img id="e47" name="e47" src="images/survey010009.gif" title="" alt="survey010009.gif" align="right" border="0"></a>
            <h1 id="e46" class="cc69">
                SPORT SURVEY
            </h1>
            <span id="e45" class="cc70"></span>
            <span id="e44"></span>
            <div id="e43" class="cc71">
                Categories
            </div>
            <div id="e42" class="cc72">
                Car Survey
            </div>
            <div id="e41" class="cc72">
                Music Survey
            </div>
            <div id="e40" class="cc72">
                Sport Survey
            </div>
            <div id="e39" class="cc72">
                <a class="" href="contact_us.php">
                    Contact Us</a>
            </div>
            <span id="e38" class="cc73"></span>
            <form id="f37" action="default.asp" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e37" class="cc74">
                    <label id="e36" class="cc75" for="e35">
                        What is your sex?
                    </label>
                    <select id="e35" class="cc75" size="1" name="Sex" title="Gender">
                        <option> Female</option>
                        <option> Male</option>
                    </select><br>
                    <label id="e34" class="cc75" for="e33">
                        What is your age?
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
                        What country do you live in?
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
                        Are you a member of a sport club?
                    </label>
                    <select id="e29" class="cc75" size="1" name="Sports_Club_Member" title="Are you a member of a sport club?">
                        <option> Yes</option>
                        <option> No</option>
                    </select><br>
                    <label id="e28" class="cc75" for="e27">
                        Who is your favorite athlete?
                    </label>
                    <input id="e27" class="cc76" type="text" name="Favorite_Athlete" title="Who is your favorite athlete?" size="23"><br>
                    <label id="e26" class="cc75" for="e25">
                        What is your favorite sport to compete in?
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
                        How often do you compete in sports?
                    </label>
                    <select id="e23" class="cc75" size="1" name="How_Often_Do_You_Compete" title="How often do you compete in sports?">
                        <option> Daily</option>
                        <option> Weekly</option>
                        <option> From time to time</option>
                        <option> Never</option>
                    </select><br>
                    <label id="e22" class="cc75" for="e21">
                        What is your favorite sport to watch?
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
                        How often do you watch sports on TV?
                    </label>
                    <select id="e19" class="cc75" size="1" name="How_Often_Do_You_Watch_On_TV" title="How often do you watch sports on TV?">
                        <option> Daily</option>
                        <option> Weekly</option>
                        <option> From time to time</option>
                        <option> Never</option>
                    </select><br>
                    <label id="e18" class="cc75" for="e17">
                        How often do you attend organized sport events?
                    </label>
                    <select id="e17" class="cc75" size="1" name="How_Often_Do_You_Attend_Events" title="How often do you attend organized sport events?">
                        <option> Daily</option>
                        <option> Weekly</option>
                        <option> From time to time</option>
                        <option> Never</option>
                    </select><br>
                    <label id="e16" class="cc75" for="e15">
                        How often do you read sports pages in a paper?
                    </label>
                    <select id="e15" class="cc75" size="1" name="How_Often_Do_You_Read_Sports_Papers" title="How often do you read sports pages in a paper?">
                        <option> Daily</option>
                        <option> Weekly</option>
                        <option> From time to time</option>
                        <option> Never</option>
                    </select><br>
                    <input id="e14" class="cc75" type="submit" title="Send Details" value="Send Details">
                    <input id="e13" class="cc75" type="reset" title="Clear Details" value="Clear Details">
                </fieldset>
            </form>
            <form id="f12" action="mailto:your@address.here?subject=Request Form" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e12" class="cc74">
                    <legend id="e11" class="cc77">
                        Car Survey
                    </legend><br>
                    <label id="e10" class="cc77">
                        Music Survey
                    </label><br>
                    <label id="e9" class="cc77">
                        Sport Survey
                    </label><br>
                    <label id="e8" class="cc77">
                        <a href="contact_us.php">
                            Contact Us</a>
                    </label>
                    <label id="e7" class="cc77">
                        <a href="home.php">
                            Categories</a>
                    </label>
                    <span id="e6"></span>
                    <span id="e5"></span>
                    <span id="e4"></span>
                    <span id="e3"></span>
                    <span id="e2"></span>
                </fieldset>
            </form>
            <div id="e1" class="cc78">
                <a href="logout.php">
                    Log Out!</a>
            </div>
        </div>
    </body>
</html>
