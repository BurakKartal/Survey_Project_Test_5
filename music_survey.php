<?php
require_once('/securelogin.php');
?>
<html lang="en">
    <head>
        <title> MUSIC SURVEY </title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Style-Type" content="text/css;">
        <link rel="stylesheet" href="css/survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
        <link rel="stylesheet" href="css/music_survey_p.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
        <script src="js/survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"></link>
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
                            <li><a href="#contact"><i class="icon-star icon-white"></i>FAQ?</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div id="page">

            <h1 id="e70" class="cc57">
                <span class="label label-important"> <center>MUSIC SURVEY</center></span>
            </h1>
            <span id="e69" class="cc58"></span>
            <span id="e68"></span>
            <div id="e67" class="cc59">
                <span class="label label-warning"> <center>Categories</center></span> 
            </div>
            <div id="e66" class="cc60">
                <span class="label label-warning"> <center>Car Survey</center></span> 
            </div>
            <div id="e65" class="cc60">
                <span class="label label-warning"> <center>Music Survey</center></span> 
            </div>
            <div id="e64" class="cc60">
                <span class="label label-warning"> <center>Sport Survey</center></span> 
            </div>
            <div id="e63" class="cc60">

                <span class="label label-warning"> <center>Contact Us</center></span> </a>
            </div>
            <span id="e62" class="cc61"></span>
            <form id="f61" action="default.asp" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e61" class="cc62">
                    <legend id="e60" class="cc63">
                        <span class="label label-important"> <center>Personal Details</center></span> 
                    </legend><br>
                    <label id="e59" class="cc64" for="e58">
                        <span class="label label-success"> <center>Name</center></span> 
                    </label>
                    <input id="e58" class="cc65" type="text" name="Name" title="Name" size="23"><br>
                    <label id="e57" class="cc64" for="e56">
                        <span class="label label-success"> <center>E-mail</center></span> 
                    </label>
                    <input id="e56" class="cc65" type="text" name="Email" title="E-mail" size="23"><br>
                    <label id="e55" class="cc64" for="e54">
                        <span class="label label-success"> <center>Country</center></span> 
                    </label>
                    <select id="e54" class="cc66" size="1" name="Country" title="Country">
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
                    <label id="e53" class="cc64" for="e52">
                        <span class="label label-success"> <center>Gender</center></span> 
                    </label>
                    <select id="e52" class="cc66" size="1" name="Sex" title="Gender">
                        <option> Female</option>
                        <option> Male</option>
                    </select><br>
                    <label id="e51" class="cc64" for="e50">
                        <span class="label label-success"> <center>Age Group</center></span> 
                    </label>
                    <select id="e50" class="cc66" size="1" name="Age_Group" title="Age Group">
                        <option> under 18</option>
                        <option> 18 to 25</option>
                        <option> 26 to 29</option>
                        <option> 30 to 39</option>
                        <option> 40 to 49</option>
                        <option> 50 to 59</option>
                        <option> 60 and over</option>
                    </select><br>
                    <label id="e49" class="cc63">
                        <span class="label label-important"> <center>Favourite Music Genres</center></span> 
                    </label><br>
                    <input id="e48" class="cc66" type="checkbox" name="Favorie_Music_Alternative" title="Alternative">
                    <label id="e47" class="cc66" for="e48">
                        <span class="label label-success"> <center>Alternative</center></span> 
                    </label>
                    <input id="e46" class="cc66" type="checkbox" name="Favorie_Music_Blues" title="Blues">
                    <label id="e45" class="cc66" for="e46">
                        <span class="label label-success"> <center>Blues</center></span> 
                    </label><br>
                    <input id="e44" class="cc66" type="checkbox" name="Favorie_Music_Books_and_Spoken" title="Books & Spoken">
                    <label id="e43" class="cc66" for="e44">
                        <span class="label label-success"> <center> Books & Spoken</center></span>
                    </label>
                    <input id="e42" class="cc66" type="checkbox" name="Favorie_Music_Childrens_Music" title="Children's Music">
                    <label id="e41" class="cc66" for="e42">
                        <span class="label label-success"> <center> Children's Music</center></span>
                    </label><br>
                    <input id="e40" class="cc66" type="checkbox" name="Favorie_Music_Classical" title="Classical">
                    <label id="e39" class="cc66" for="e40">
                        <span class="label label-success"> <center>Classical</center></span> 
                    </label>
                    <input id="e38" class="cc66" type="checkbox" name="Favorie_Music_Comedy" title="Comedy">
                    <label id="e37" class="cc66" for="e38">
                        <span class="label label-success"> <center> Comedy</center></span>
                    </label><br>
                    <input id="e36" class="cc66" type="checkbox" name="Favorie_Music_Country" title="Country">
                    <label id="e35" class="cc66" for="e36">
                        <span class="label label-success"> <center>Country</center></span> 
                    </label>
                    <input id="e34" class="cc66" type="checkbox" name="Favorie_Music_Easy_Listening" title="Easy Listening">
                    <label id="e33" class="cc66" for="e34">
                        <span class="label label-success"> <center>Easy Listening</center></span> 
                    </label><br>
                    <input id="e32" class="cc66" type="checkbox" name="Favorie_Music_Electronic" title="Electronic">
                    <label id="e31" class="cc66" for="e32">
                        <span class="label label-success"> <center>Electronic</center></span> 
                    </label>
                    <input id="e30" class="cc66" type="checkbox" name="Favorie_Music_Hip_Hop_Rap" title="Hip Hop / Rap">
                    <label id="e29" class="cc66" for="e30">
                        <span class="label label-success"> <center>Hip Hop / Rap</center></span> 
                    </label><br>
                    <input id="e28" class="cc66" type="checkbox" name="Favorie_Music_Jazz" title="Jazz">
                    <label id="e27" class="cc66" for="e28">
                        <span class="label label-success"> <center>Jazz</center></span> 
                    </label>
                    <input id="e26" class="cc66" type="checkbox" name="Favorie_Music_Latin" title="Latin">
                    <label id="e25" class="cc66" for="e26">
                        <span class="label label-success"> <center>Latin</center></span> 
                    </label><br>
                    <input id="e24" class="cc66" type="checkbox" name="Favorie_Music_Metal" title="Metal">
                    <label id="e23" class="cc66" for="e24">
                        <span class="label label-success"> <center>Metal</center></span> 
                    </label>
                    <input id="e22" class="cc66" type="checkbox" name="Favorie_Music_Pop_and_Rock" title="Pop & Rock">
                    <label id="e21" class="cc66" for="e22">
                        <span class="label label-success"> <center> Pop & Rock</center></span>
                    </label><br>
                    <input id="e20" class="cc66" type="checkbox" name="Favorie_Music_Urban_RnB" title="Urban / R&B">
                    <label id="e19" class="cc66" for="e20">
                        <span class="label label-success"> <center>Urban / R&B</center></span> 
                    </label>
                    <input id="e18" class="cc66" type="checkbox" name="Favorie_Music_World_Folk" title="World / Folk">
                    <label id="e17" class="cc66" for="e18">
                        <span class="label label-success"> <center>World / Folk</center></span> 
                    </label><br>
                    <input id="e16" class="cc66" type="checkbox" name="Contact_Me_About_Music" title="Contact me from time to time about music in my selected genres." checked="checked">
                    <label id="e15" class="cc66">
                        <span class="label label-success"> <center>Contact me from time to time about music in my selected genres.</center></span> 
                    </label><br>  
                    <input id="e14" class="btn btn-primary btn-small" type="submit" title="Send Details" value="Send Details">
                    <input id="e13" class="btn btn-primary btn-small" type="reset" title="Clear Details" value="Clear Details">
                </fieldset>
            </form>
            <form id="f12" action="mailto:your@address.here?subject=Request Form" method="post" onsubmit="return weCheckForm(this)">
                <fieldset id="e12" class="cc62">
                    <legend id="e11" class="cc67">
                        <span class="label label-inverse"> <center>Car Survey</center></span> 
                    </legend><br>
                    <label id="e10" class="cc67">
                        <span class="label label-inverse"> <center>Music Survey</center></span> 
                    </label><br>
                    <label id="e9" class="cc67">
                        <span class="label label-inverse"> <center>Sport Survey</center></span> 
                    </label><br>
                    <label id="e8" class="cc67">
                        <a href="contact_us.php">
                            <span class="label label-inverse"> <center>Contact Us</center></span> <a href="contact_us.php">
                            </a>
                    </label>
                    <label id="e7" class="cc67">
                        <a href="home.php">
                            <span class="label label-inverse"> <center>Categories</center></span> </a>
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
