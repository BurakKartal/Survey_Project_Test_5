<html lang="en">
    <head>
        <title> CAR SURVEY </title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Style-Type" content="text/css;">
        <link rel="stylesheet" href="css/survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
        <link rel="stylesheet" href="css/car_survey_p.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
        <script src="survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
    </head>


    <body>
        <?php
        require_once('/securelogin.php');
        ?>
        <div id="page">
            <img id="e55" name="e55" src="images/survey008009.jpg" title="" alt="survey008009.jpg" align="right" border="0"></a>
            <h1 id="e54" class="cc45">
                CAR SURVEY
            </h1>
            <span id="e53" class="cc46"></span>
            <span id="e52"></span>
            <div id="e51" class="cc47">
                Categories
            </div>
            <div id="e50" class="cc48">
                Car Survey
            </div>
            <div id="e49" class="cc48">
                Music Survey
            </div>
            <div id="e48" class="cc48">
                Sport Survey
            </div>
            <div id="e47" class="cc48">
                <a class="" href="contact_us.php">
                    Contact Us</a>
            </div>
            <span id="e46" class="cc49"></span>
            <form id="f45" action="car_result.php" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e45" class="cc50">
                    <legend id="e44" class="cc51">
                        Personal Details
                    </legend><br>
                    <label id="e43" class="cc52" for="e42">
                        Name
                    </label>
                    <input id="e42" class="cc53" type="text" name="Name" title="Name" size="22"><br>
                    <label id="e41" class="cc52" for="e40">
                        E-mail
                    </label>
                    <input id="e40" class="cc53" type="text" name="Email" title="E-mail" size="22"><br>
                    <label id="e39" class="cc52" for="e38">
                        Country
                    </label>
                    <select id="e38" class="cc54" size="1" name="Country" title="Country">
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
                    <label id="e37" class="cc52" for="e36">
                        Gender
                    </label>
                    <select id="e36" class="cc54" size="1" name="Sex" title="Gender">
                        <option> Female</option>
                        <option> Male</option>
                    </select><br>
                    <label id="e35" class="cc52" for="e34">
                        Age Group
                    </label>
                    <select id="e34" class="cc54" size="1" name="Age_Group" title="Age Group">
                        <option> under 18</option>
                        <option> 18 to 25</option>
                        <option> 26 to 29</option>
                        <option> 30 to 39</option>
                        <option> 40 to 49</option>
                        <option> 50 to 59</option>
                        <option> 60 and over</option>
                    </select><br>
                    <label id="e33" class="cc51">
                        Vehicle Details
                    </label><br>
                    <label id="e32" class="cc52" for="e31">
                        Type of Car
                    </label>
                    <select id="e31" class="cc54" size="1" name="Car_Type" title="Type of Car">
                        <option> Sedan</option>
                        <option> Wagon</option>
                        <option> Sports</option>
                        <option> Van</option>
                        <option> Other</option>
                    </select><br>
                    <label id="e30" class="cc52" for="e29">
                        Seats
                    </label>
                    <select id="e29" class="cc54" size="1" name="Seats" title="Seats">
                        <option> 2</option>
                        <option> 4</option>
                        <option> 5</option>
                        <option> 7</option>
                        <option> Other</option>
                    </select><br>
                    <label id="e28" class="cc52" for="e27">
                        Doors
                    </label>
                    <select id="e27" class="cc54" size="1" name="Doors" title="Doors">
                        <option> 2</option>
                        <option> 3</option>
                        <option> 4</option>
                        <option> 5</option>
                        <option> Other</option>
                    </select><br>
                    <label id="e26" class="cc52" for="e25">
                        Cylinders
                    </label>
                    <select id="e25" class="cc54" size="1" name="Cylinders" title="Cylinders">
                        <option> 4</option>
                        <option> 6</option>
                        <option> 8</option>
                        <option> &gt;8</option>
                        <option> Other</option>
                    </select><br>
                    <label id="e24" class="cc52" for="e23">
                        Fuel
                    </label>
                    <select id="e23" class="cc54" size="1" name="Fuel" title="Fuel">
                        <option> Gas</option>
                        <option> LPG</option>
                        <option> Diesel</option>
                        <option> Electric</option>
                        <option> Other</option>
                    </select><br>
                    <label id="e22" class="cc52" for="e21">
                        Age of Car
                    </label>
                    <select id="e21" class="cc54" size="1" name="Age_Of_Car" title="Age of Car">
                        <option> 1-3 years</option>
                        <option> 3-6 years</option>
                        <option> 6-10 years</option>
                        <option> &gt;10 years</option>
                    </select><br>
                    <label id="e20" class="cc52" for="e19">
                        Colour
                    </label>
                    <select id="e19" class="cc54" size="1" name="Color" title="Colour">
                        <option> Black</option>
                        <option> White</option>
                        <option> Red</option>
                        <option> Blue</option>
                        <option> Yellow</option>
                        <option> Green</option>
                        <option> Silver</option>
                        <option> Other</option>
                    </select><br>
                    <label id="e18" class="cc52" for="e17">
                        Transmission
                    </label>
                    <select id="e17" class="cc54" size="1" name="Transmission" title="Transmission">
                        <option> Manual</option>
                        <option> Automatic</option>
                    </select><br>
                    <label id="e16" class="cc52" for="e15">
                        Engine Position
                    </label>
                    <select id="e15" class="cc54" size="1" name="Engine_Position" title="Engine Position">
                        <option> Front</option>
                        <option> Middle</option>
                        <option> Rear</option>
                    </select><br>
                    <input id="e14" class="cc54" type="submit" title="Send Details" value="Send Details">
                    <input id="e13" class="cc54" type="reset" title="Clear Details" value="Clear Details">
                </fieldset>
            </form>
            <form id="f12" action="mailto:your@address.here?subject=Request Form" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e12" class="cc50">
                    <legend id="e11" class="cc55">
                        Car Survey
                    </legend><br>
                    <label id="e10" class="cc55">
                        Music Survey
                    </label><br>
                    <label id="e9" class="cc55">
                        Sport Survey
                    </label><br>
                    <label id="e8" class="cc55">
                        <a href="contact_us.php">
                            Contact Us</a>
                    </label>
                    <label id="e7" class="cc55">
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
            <div id="e1" class="cc56">
                <a href="logout.php">
                    Log Out!</a>
            </div>
        </div>
    </body>
</html>
