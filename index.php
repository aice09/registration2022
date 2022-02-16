<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kou Fu Color Printing Corporation | Applicant Registration</title>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--jQuery Validation Plugin-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <!--MomentJs-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
    <!-- Eonasdan Date Timepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <!--Limonte Sweetalert 2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.6/sweetalert2.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.6/sweetalert2.all.min.js"></script>



    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.4/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.4/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyAwI08GcNOZUMdnsxAX9qN-S1pqR_MZssg",
          authDomain: "kfcp-applicant-registration.firebaseapp.com",
          projectId: "kfcp-applicant-registration",
          storageBucket: "kfcp-applicant-registration.appspot.com",
          messagingSenderId: "875337731188",
          appId: "1:875337731188:web:a3f5c0dfba9cb237f39521",
          measurementId: "G-5EQ5HBGFX7"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
      </script>
</head>
<body>
    <div>
        <div class="container">
            <div class="row">  
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <br>
                    <ol class="breadcrumb">
                        <li>
                            <a href="dashboard">Home</a>
                        </li>
                        <li class="active">Applicant Registration Form</li>
                    </ol>
                </div>              
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>KFCPC Applicant Registration Form</h1>
                </div>       
            </div>
            <div class="row">                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <form class="form-applicant-registration" method="POST" id="applicant-registration-form">
                        <!--Basic Info-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>Basic Info</h3>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name" name="applicant_basicinfo_firstname" id="applicant_basicinfo_firstname" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Middle Name</label>
                                        <input type="text" class="form-control" placeholder="Middle Name" name="applicant_basicinfo_middlename" id="applicant_basicinfo_middlename" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" name="applicant_basicinfo_lastname" id="applicant_basicinfo_lastname" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control applicant_basicinfo_email" placeholder="Email" name="applicant_basicinfo_email" id="applicant_basicinfo_email" />
                                        <span id="check-e" class="email-checker"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="text" class="form-control" placeholder="Password" name="applicant_basicinfo_password" id="applicant_basicinfo_password" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Confirm Password</label>
                                        <input type="text" class="form-control" placeholder="Confirm Password" name="confirm_applicant_basicinfo_password" id="confirm_applicant_basicinfo_password" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Religion</label>
                                        <select name="applicant_basicinfo_religion" id="applicant_basicinfo_religion" class="form-control" style="text-transform:capitalize;" >
                                            <option value="">Select Religion</option>
                                            <option value="19">aglipayan</option><option value="23">assemblies of god</option><option value="11">baptist</option><option value="16">bible methodist</option><option value="4">born again</option><option value="7">buddhist</option><option value="1">christian</option><option value="17">church of christ</option><option value="20">church of god</option><option value="22">el shaddai</option><option value="5">evangelical</option><option value="24">hindu</option><option value="6">iglesia ni cristo</option><option value="2">islam</option><option value="8">jehova's witness</option><option value="21">jesus is lord church</option><option value="18">jesus miracle crusade</option><option value="25">judaism</option><option value="12">latter day saint</option><option value="13">other</option><option value="14">pentecost</option><option value="9">protestant</option><option value="3">roman catholic</option><option value="10">seventh day adventist</option><option value="26">sikh</option><option value="15">united methodist</option>		                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Birth Date</label>
                                        <div class='input-group date applicant_basicinfo_birthday'>
                                            <input id="applicant_basicinfo_birthday" name="applicant_basicinfo_birthday" type='text' class="form-control" placeholder="Birth Date" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Birth Place</label>
                                        <input type="text" class="form-control" placeholder="Birth Place" name="applicant_basicinfo_birthplace" id="applicant_basicinfo_birthplace" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Weight</label>
                                        <div class="input-group">
                                            <input id="applicant_basicinfo_weight" name="applicant_basicinfo_weight" type="text" class="form-control applicant_basicinfo_weight" aria-label="" placeholder="Weight">
                                            <span class="input-group-addon">kg</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Height</label>
                                        <div class="input-group">
                                            <input id="applicant_basicinfo_height" name="applicant_basicinfo_height" type="text" class="form-control applicant_basicinfo_height" aria-label="" placeholder="Height">
                                            <span class="input-group-addon">cm</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Blood Type</label>
                                        <select name="applicant_basicinfo_bloodtype" id="applicant_basicinfo_bloodtype" class="form-control">
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Gender</label>
                                        <select name="applicant_basicinfo_gender" id="applicant_basicinfo_gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="lesbian">Lesbian</option>
                                            <option value="gay">Gay</option>
                                            <option value="bisexual">Bisexual</option>
                                            <option value="transgender">Transgender</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Civil Status</label>
                                        <select name="applicant_basicinfo_civilstatus" id="applicant_basicinfo_civilstatus" class="form-control">
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="separated">Separated</option>
                                            <option value="widow">Widow</option>
                                            <option value="divorced">Divorced</option>
                                            <option value="annulled">Annulled</option>
                                            <option value="widower">Widower</option>
                                            <option value="single parent">Single Parent</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Country</label>
                                        <select name="applicant_basicinfo_country" id="applicant_basicinfo_country" class="form-control">
                                            <option value="" selected="selected"></option>
                                            <option value="">Select Country</option>
                                            <option value="1" >Afghanistan</option><option value="2" >Albania</option><option value="3" >Algeria</option><option value="4" >American Samoa</option><option value="5" >Andorra</option><option value="6" >Angola</option><option value="7" >Anguilla</option><option value="8" >Antarctica</option><option value="9" >Antigua and Barbuda</option><option value="10" >Argentina</option><option value="11" >Armenia</option><option value="12" >Aruba</option><option value="13" >Australia</option><option value="14" >Austria</option><option value="15" >Azerbaijan</option><option value="16" >Bahamas</option><option value="17" >Bahrain</option><option value="18" >Bangladesh</option><option value="19" >Barbados</option><option value="20" >Belarus</option><option value="21" >Belgium</option><option value="22" >Belize</option><option value="23" >Benin</option><option value="24" >Bermuda</option><option value="25" >Bhutan</option><option value="26" >Bolivia</option><option value="27" >Bosnia and Herzegovina</option><option value="28" >Botswana</option><option value="29" >Brazil</option><option value="30" >British Indian Ocean Territory</option><option value="31" >British Virgin Islands</option><option value="32" >Brunei</option><option value="33" >Bulgaria</option><option value="34" >Burkina Faso</option><option value="35" >Burundi</option><option value="36" >Cambodia</option><option value="37" >Cameroon</option><option value="38" >Canada</option><option value="39" >Cape Verde</option><option value="40" >Cayman Islands</option><option value="41" >Central African Republic</option><option value="42" >Chad</option><option value="43" >Chile</option><option value="44" >China</option><option value="45" >Christmas Island</option><option value="46" >Cocos Islands</option><option value="47" >Colombia</option><option value="48" >Comoros</option><option value="49" >Cook Islands</option><option value="50" >Costa Rica</option><option value="51" >Croatia</option><option value="52" >Cuba</option><option value="53" >Curacao</option><option value="54" >Cyprus</option><option value="55" >Czech Republic</option><option value="56" >Democratic Republic of the Congo</option><option value="57" >Denmark</option><option value="58" >Djibouti</option><option value="59" >Dominica</option><option value="60" >Dominican Republic</option><option value="61" >East Timor</option><option value="62" >Ecuador</option><option value="63" >Egypt</option><option value="64" >El Salvador</option><option value="65" >Equatorial Guinea</option><option value="66" >Eritrea</option><option value="67" >Estonia</option><option value="68" >Ethiopia</option><option value="69" >Falkland Islands</option><option value="70" >Faroe Islands</option><option value="71" >Fiji</option><option value="72" >Finland</option><option value="73" >France</option><option value="74" >French Polynesia</option><option value="75" >Gabon</option><option value="76" >Gambia</option><option value="77" >Georgia</option><option value="78" >Germany</option><option value="79" >Ghana</option><option value="80" >Gibraltar</option><option value="81" >Greece</option><option value="82" >Greenland</option><option value="83" >Grenada</option><option value="84" >Guam</option><option value="85" >Guatemala</option><option value="86" >Guernsey</option><option value="87" >Guinea</option><option value="88" >Guinea-Bissau</option><option value="89" >Guyana</option><option value="90" >Haiti</option><option value="91" >Honduras</option><option value="92" >Hong Kong</option><option value="93" >Hungary</option><option value="94" >Iceland</option><option value="95" >India</option><option value="96" >Indonesia</option><option value="97" >Iran</option><option value="98" >Iraq</option><option value="99" >Ireland</option><option value="100" >Isle of Man</option><option value="101" >Israel</option><option value="102" >Italy</option><option value="103" >Ivory Coast</option><option value="104" >Jamaica</option><option value="105" >Japan</option><option value="106" >Jersey</option><option value="107" >Jordan</option><option value="108" >Kazakhstan</option><option value="109" >Kenya</option><option value="110" >Kiribati</option><option value="111" >Kosovo</option><option value="112" >Kuwait</option><option value="113" >Kyrgyzstan</option><option value="114" >Laos</option><option value="115" >Latvia</option><option value="116" >Lebanon</option><option value="117" >Lesotho</option><option value="118" >Liberia</option><option value="119" >Libya</option><option value="120" >Liechtenstein</option><option value="121" >Lithuania</option><option value="122" >Luxembourg</option><option value="123" >Macau</option><option value="124" >Macedonia</option><option value="125" >Madagascar</option><option value="126" >Malawi</option><option value="127" >Malaysia</option><option value="128" >Maldives</option><option value="129" >Mali</option><option value="130" >Malta</option><option value="131" >Marshall Islands</option><option value="132" >Mauritania</option><option value="133" >Mauritius</option><option value="134" >Mayotte</option><option value="135" >Mexico</option><option value="136" >Micronesia</option><option value="137" >Moldova</option><option value="138" >Monaco</option><option value="139" >Mongolia</option><option value="140" >Montenegro</option><option value="141" >Montserrat</option><option value="142" >Morocco</option><option value="143" >Mozambique</option><option value="144" >Myanmar</option><option value="145" >Namibia</option><option value="146" >Nauru</option><option value="147" >Nepal</option><option value="148" >Netherlands</option><option value="149" >Netherlands Antilles</option><option value="150" >New Caledonia</option><option value="151" >New Zealand</option><option value="152" >Nicaragua</option><option value="153" >Niger</option><option value="154" >Nigeria</option><option value="155" >Niue</option><option value="156" >North Korea</option><option value="157" >Northern Mariana Islands</option><option value="158" >Norway</option><option value="159" >Oman</option><option value="160" >Pakistan</option><option value="161" >Palau</option><option value="162" >Palestine</option><option value="163" >Panama</option><option value="164" >Papua New Guinea</option><option value="165" >Paraguay</option><option value="166" >Peru</option><option value="167" selected="selected">Philippines</option><option value="168" >Pitcairn</option><option value="169" >Poland</option><option value="170" >Portugal</option><option value="171" >Puerto Rico</option><option value="172" >Qatar</option><option value="173" >Republic of the Congo</option><option value="174" >Reunion</option><option value="175" >Romania</option><option value="176" >Russia</option><option value="177" >Rwanda</option><option value="178" >Saint Barthelemy</option><option value="179" >Saint Helena</option><option value="180" >Saint Kitts and Nevis</option><option value="181" >Saint Lucia</option><option value="182" >Saint Martin</option><option value="183" >Saint Pierre and Miquelon</option><option value="184" >Saint Vincent and the Grenadines</option><option value="185" >Samoa</option><option value="186" >San Marino</option><option value="187" >Sao Tome and Principe</option><option value="188" >Saudi Arabia</option><option value="189" >Senegal</option><option value="190" >Serbia</option><option value="191" >Seychelles</option><option value="192" >Sierra Leone</option><option value="193" >Singapore</option><option value="194" >Sint Maarten</option><option value="195" >Slovakia</option><option value="196" >Slovenia</option><option value="197" >Solomon Islands</option><option value="198" >Somalia</option><option value="199" >South Africa</option><option value="200" >South Korea</option><option value="201" >South Sudan</option><option value="202" >Spain</option><option value="203" >Sri Lanka</option><option value="204" >Sudan</option><option value="205" >Suriname</option><option value="206" >Svalbard and Jan Mayen</option><option value="207" >Swaziland</option><option value="208" >Sweden</option><option value="209" >Switzerland</option><option value="210" >Syria</option><option value="211" >Taiwan</option><option value="212" >Tajikistan</option><option value="213" >Tanzania</option><option value="214" >Thailand</option><option value="215" >Togo</option><option value="216" >Tokelau</option><option value="217" >Tonga</option><option value="218" >Trinidad and Tobago</option><option value="219" >Tunisia</option><option value="220" >Turkey</option><option value="221" >Turkmenistan</option><option value="222" >Turks and Caicos Islands</option><option value="223" >Tuvalu</option><option value="224" >U.S. Virgin Islands</option><option value="225" >Uganda</option><option value="226" >Ukraine</option><option value="227" >United Arab Emirates</option><option value="228" >United Kingdom</option><option value="229" >United States</option><option value="230" >Uruguay</option><option value="231" >Uzbekistan</option><option value="232" >Vanuatu</option><option value="233" >Vatican</option><option value="234" >Venezuela</option><option value="235" >Vietnam</option><option value="236" >Wallis and Futuna</option><option value="237" >Western Sahara</option><option value="238" >Yemen</option><option value="239" >Zambia</option><option value="240" >Zimbabwe</option>		                        </select> 
                                    </div>
                                </div> -->
                                
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Landline Number</label>
                                        <input type="text" class="form-control" placeholder="Landline Number" name="applicant_basicinfo_landlinenumber" id="applicant_basicinfo_landlinenumber" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Mobile Number</label>
                                        <input type="text" class="form-control" placeholder="Mobile Number" name="applicant_basicinfo_mobilenumber" id="applicant_basicinfo_mobilenumber" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Expected Salary</label>
                                        <input type="text" class="form-control" placeholder="Position" name="applicant_basicinfo_expectedsalary" id="applicant_basicinfo_expectedsalary" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Family Background Div-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>Address</h3>
                            <div class="row" >                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h4>Permanent Address</h4>
                                </div>                                
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Rm/Flr/Unit No. Bldg Name</label>                                    
                                        <input type="text" name="" id="input" class="form-control" placeholder="Rm/Flr/Unit No. Bldg Name">
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">House/Lot/Block No.</label>                                    
                                        <input type="text" name="" id="input" class="form-control" placeholder="House/Lot/Block No.">
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Street</label>                                    
                                        <input type="text" name="" id="input" class="form-control" placeholder="Street">
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Subdivision</label>                                    
                                        <input type="text" name="" id="input" class="form-control" placeholder="Subdivision">                                    
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Province</label>
                                        <select name="applicant_basicinfo_province" id="applicant_basicinfo_province" class="form-control applicant_basicinfo_province selectlocation" style="text-transform:capitalize;">
                                            <option value="">Select Province</option>
                                            <option value="1401">abra</option><option value="1602">agusan del norte</option><option value="1603">agusan del sur</option><option value="0604">aklan</option><option value="0505">albay</option><option value="0606">antique</option><option value="1481">apayao</option><option value="0377">aurora</option><option value="1507">basilan</option><option value="0308">bataan</option><option value="0209">batanes</option><option value="0410">batangas</option><option value="1411">benguet</option><option value="0878">biliran</option><option value="0712">bohol</option><option value="1013">bukidnon</option><option value="0314">bulacan</option><option value="0215">cagayan</option><option value="0516">camarines norte</option><option value="0517">camarines sur</option><option value="1018">camiguin</option><option value="0619">capiz</option><option value="0520">catanduanes</option><option value="0421">cavite</option><option value="0722">cebu</option><option value="0997">city of isabela</option><option value="1339">city of manila</option><option value="1182">compostela valley</option><option value="1247">cotabato (north cotabato)</option><option value="1298">cotabato city</option><option value="1123">davao del norte</option><option value="1124">davao del sur</option><option value="1186">davao occidental</option><option value="1125">davao oriental</option><option value="1685">dinagat islands</option><option value="0826">eastern samar</option><option value="0679">guimaras</option><option value="1427">ifugao</option><option value="0128">ilocos norte</option><option value="0129">ilocos sur</option><option value="0630">iloilo</option><option value="0231">isabela</option><option value="1432">kalinga</option><option value="0133">la union</option><option value="0434">laguna</option><option value="1035">lanao del norte</option><option value="1536">lanao del sur</option><option value="0837">leyte</option><option value="1538">maguindanao</option><option value="1740">marinduque</option><option value="0541">masbate</option><option value="1042">misamis occidental</option><option value="1043">misamis oriental</option><option value="1444">mountain province</option><option value="1339">ncr, city of manila, first district</option><option value="1376">ncr, fourth district</option><option value="1374">ncr, second district</option><option value="1375">ncr, third district</option><option value="0645">negros occidental</option><option value="0746">negros oriental</option><option value="0848">northern samar</option><option value="0349">nueva ecija</option><option value="0250">nueva vizcaya</option><option value="1751">occidental mindoro</option><option value="1752">oriental mindoro</option><option value="1753">palawan</option><option value="0354">pampanga</option><option value="0155">pangasinan</option><option value="0456">quezon</option><option value="0257">quirino</option><option value="0458">rizal</option><option value="1759">romblon</option><option value="0860">samar (western samar)</option><option value="1280">sarangani</option><option value="0761">siquijor</option><option value="0562">sorsogon</option><option value="1263">south cotabato</option><option value="0864">southern leyte</option><option value="1265">sultan kudarat</option><option value="1566">sulu</option><option value="1667">surigao del norte</option><option value="1668">surigao del sur</option><option value="0369">tarlac</option><option value="1570">tawi-tawi</option><option value="0371">zambales</option><option value="0972">zamboanga del norte</option><option value="0973">zamboanga del sur</option><option value="0983">zamboanga sibugay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Municipality/City</label>
                                        <select name="applicant_basicinfo_municapality" id="applicant_basicinfo_municapality" class="form-control applicant_basicinfo_municapality selectlocation" style="text-transform:capitalize;">
                                            <option value="">Select Municipality/City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Barangay</label>
                                        <select name="applicant_basicinfo_barangay" id="applicant_basicinfo_barangay" class="form-control applicant_basicinfo_barangay" >
                                            <option value="">Select Barangay</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h4>Present Address</h4>
                                </div>                                
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Rm/Flr/Unit No. Bldg Name</label>                                    
                                        <input type="text" name="" id="input" class="form-control" placeholder="Rm/Flr/Unit No. Bldg Name">
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">House/Lot/Block No.</label>                                    
                                        <input type="text" name="" id="input" class="form-control" placeholder="House/Lot/Block No.">
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Street</label>                                    
                                        <input type="text" name="" id="input" class="form-control" placeholder="Street">
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Subdivision</label>                                    
                                        <input type="text" name="" id="input" class="form-control" placeholder="Subdivision">                                    
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Province</label>
                                        <select name="applicant_basicinfo_province" id="applicant_basicinfo_province" class="form-control applicant_basicinfo_province selectlocation" style="text-transform:capitalize;">
                                            <option value="">Select Province</option>
                                            <option value="1401">abra</option><option value="1602">agusan del norte</option><option value="1603">agusan del sur</option><option value="0604">aklan</option><option value="0505">albay</option><option value="0606">antique</option><option value="1481">apayao</option><option value="0377">aurora</option><option value="1507">basilan</option><option value="0308">bataan</option><option value="0209">batanes</option><option value="0410">batangas</option><option value="1411">benguet</option><option value="0878">biliran</option><option value="0712">bohol</option><option value="1013">bukidnon</option><option value="0314">bulacan</option><option value="0215">cagayan</option><option value="0516">camarines norte</option><option value="0517">camarines sur</option><option value="1018">camiguin</option><option value="0619">capiz</option><option value="0520">catanduanes</option><option value="0421">cavite</option><option value="0722">cebu</option><option value="0997">city of isabela</option><option value="1339">city of manila</option><option value="1182">compostela valley</option><option value="1247">cotabato (north cotabato)</option><option value="1298">cotabato city</option><option value="1123">davao del norte</option><option value="1124">davao del sur</option><option value="1186">davao occidental</option><option value="1125">davao oriental</option><option value="1685">dinagat islands</option><option value="0826">eastern samar</option><option value="0679">guimaras</option><option value="1427">ifugao</option><option value="0128">ilocos norte</option><option value="0129">ilocos sur</option><option value="0630">iloilo</option><option value="0231">isabela</option><option value="1432">kalinga</option><option value="0133">la union</option><option value="0434">laguna</option><option value="1035">lanao del norte</option><option value="1536">lanao del sur</option><option value="0837">leyte</option><option value="1538">maguindanao</option><option value="1740">marinduque</option><option value="0541">masbate</option><option value="1042">misamis occidental</option><option value="1043">misamis oriental</option><option value="1444">mountain province</option><option value="1339">ncr, city of manila, first district</option><option value="1376">ncr, fourth district</option><option value="1374">ncr, second district</option><option value="1375">ncr, third district</option><option value="0645">negros occidental</option><option value="0746">negros oriental</option><option value="0848">northern samar</option><option value="0349">nueva ecija</option><option value="0250">nueva vizcaya</option><option value="1751">occidental mindoro</option><option value="1752">oriental mindoro</option><option value="1753">palawan</option><option value="0354">pampanga</option><option value="0155">pangasinan</option><option value="0456">quezon</option><option value="0257">quirino</option><option value="0458">rizal</option><option value="1759">romblon</option><option value="0860">samar (western samar)</option><option value="1280">sarangani</option><option value="0761">siquijor</option><option value="0562">sorsogon</option><option value="1263">south cotabato</option><option value="0864">southern leyte</option><option value="1265">sultan kudarat</option><option value="1566">sulu</option><option value="1667">surigao del norte</option><option value="1668">surigao del sur</option><option value="0369">tarlac</option><option value="1570">tawi-tawi</option><option value="0371">zambales</option><option value="0972">zamboanga del norte</option><option value="0973">zamboanga del sur</option><option value="0983">zamboanga sibugay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Municipality/City</label>
                                        <select name="applicant_basicinfo_municapality" id="applicant_basicinfo_municapality" class="form-control applicant_basicinfo_municapality selectlocation" style="text-transform:capitalize;">
                                            <option value="">Select Municipality/City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Barangay</label>
                                        <select name="applicant_basicinfo_barangay" id="applicant_basicinfo_barangay" class="form-control applicant_basicinfo_barangay" >
                                            <option value="">Select Barangay</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Family Background Div-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 familybackgrounddiv" style="display: none;">
                            <h3>Family Background</h3>
                            <div class="row spousediv">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for=""><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="right" title="Spouse Name Here! If your male, put your wife maiden name." style="cursor: hand;"></i> First Name </label>
                                        <input type="text" class="form-control" placeholder="First Name" name="spouse_firstname" id="spouse_firstname" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Middle Name</label>
                                        <input type="text" class="form-control" placeholder="Middle Name" name="spouse_middlename" id="spouse_middlename" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" name="spouse_lastname" id="spouse_lastname" />
                                        <span id="check-e"></span>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered" id="family_table">
                                 <tr>
                                     <th width="30%">Child's Name</th>
                                      <th width="10%">Status</th>
                                      <th width="5%"></th>
                                </tr>
                                <tr>
                                      <td contenteditable="false" >
                                          <input type="text" class="form-control applicant_family_childname" placeholder="Full Name (FirstName MiddleName LastName)" name="applicant_family_childname[]" id="applicant_family_childname" />
                                      </td>
                                      <td contenteditable="false">
                                          <select name="applicant_family_status[]" id="applicant_family_status" class="form-control applicant_family_status">
                                            <option value="alive">Alive</option>
                                              <option value="deceased">Deceased</option>
                                           </select>
                                      </td>
                                      <td></td>
                                </tr>
                            </table>
                            <div align="right">
                             <button type="button" name="family_add" id="family_add" class="btn btn-default">Add Row</button>
                            </div>
                        </div>
        
                        <!--Government ID Div-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>Government ID</h3>
                            <table class="table table-bordered" id="government_table">
                                 <tr>
                                     <th width="30%">Valid ID</th>
                                      <th width="20%">ID Number</th>
                                </tr>
                                <tr>
                                    <td>Social Security System (SSS) Number</td>
                                      <td contenteditable="false">
                                          <input type="text" class="form-control applicant_government_sss" placeholder="ID Number" name="applicant_government_sss" id="applicant_government_sss" />
                                      </td>
                                 </tr>
                                 <tr>
                                    <td>Tax Identification Number (TIN)</td>
                                      <td contenteditable="false">
                                          <input type="text" class="form-control applicant_government_tin" placeholder="ID Number" name="applicant_government_tin" id="applicant_government_tin" />
                                      </td>
                                 </tr>
                                 <tr>
                                    <td>Philhealth Number</td>
                                      <td contenteditable="false">
                                          <input type="text" class="form-control applicant_government_philhealth" placeholder="ID Number" name="applicant_government_philhealth" id="applicant_government_philhealth" />
                                      </td>
                                 </tr>
                                 <tr>
                                    <td>Pag-IBIG Fund Number</td>
                                      <td contenteditable="false">
                                          <input type="text" class="form-control applicant_government_pagibig" placeholder="ID Number" name="applicant_government_pagibig" id="applicant_government_pagibig" />
                                      </td>
                                 </tr>
                            </table>
                        </div>
        
                        <!--Education Div-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>Education</h3>
                            <table class="table table-bordered" id="education_table">
                                <tr>
                                    <th width="25%">Degree</th>
                                    <th width="25%">School</th>
                                    <th width="30%">Course</th>
                                    <th width="15%">Last Attended</th>
                                    <th width="5%"></th>
                                </tr>
                                <tr>
                                    <td contenteditable="false">
                                        <select name="applicant_education_degree[]" id="applicant_education_degree" class="form-control we_expand applicant_education_degree">
                                              <option value="High school level">High school level</option>
                                              <option value="High school graduate">High school graduate</option>
                                            <option value="Vocational school graduate">Vocational school graduate</option>
                                            <option value="College level">College level</option>
                                            <option value="College graduate">College graduate</option>
                                            <option value="Some graduate school">Some graduate school</option>
                                            <option value="Completed graduate school">Completed graduate school</option>
                                           </select>
                                    </td>
                                    <td contenteditable="false">
                                        <textarea name="applicant_education_school[]" id="applicant_education_school" class="form-control applicant_education_school" rows="1" placeholder="Name of School"></textarea>
                                    </td> 
                                    <td contenteditable="false">
                                        <textarea name="applicant_education_course[]" id="applicant_education_course" class="form-control applicant_education_course" rows="1" placeholder="Course"></textarea>
                                    </td> 
                                    <td contenteditable="false">
                                        <div class="form-group">
                                            <div class='input-group date datetimepicker3'>
                                                <input id="applicant_education_dateoccured" name="applicant_education_dateoccured[]" type='text' class="form-control we_expand date applicant_education_dateoccured" placeholder="Date Occured" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                            <div align="right">
                                <button type="button" name="education_add" id="education_add" class="btn btn-default">Add Row</button>
                            </div>
                        </div>
        
                        <!--Work Experience Div-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>Work Experience</h3>
                            <table class="table table-bordered" id="work_table">
                                <tr>
                                    <th width="10%">Job Title</th>
                                    <th width="20%">Company</th>
                                    <th width="10%">Emp.Type</th>
                                    <th width="10%">Start Date</th>
                                    <th width="10%">End Date</th>
                                    <th width="20%">Job Desc.</th>
                                    <th width="10%">Salary</th>
                                    <th width="10%"></th>
                                </tr>
                                <tr>
                                    <td contenteditable="false">
                                        <input type="text" name="applicant_exp_title[]" id="applicant_exp_title" class="form-control we_expand applicant_exp_title" placeholder="Job Title">
                                    </td> 
                                    <td contenteditable="false">
                                        <textarea name="applicant_exp_company[]" id="applicant_exp_company" class="form-control we_expand applicant_exp_company" rows="1" placeholder="Company"></textarea>
                                    </td> 
                                    <td contenteditable="false">
                                        <select name="applicant_exp_emptype[]" id="applicant_exp_emptype" class="form-control we_expand applicant_exp_emptype">
                                              <option value="Full Time">Full Time</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Freelance">Freelance</option>
                                            <option value="Contractual">Contractual</option>
                                            <option value="OJT / Intern">OJT / Intern</option>
                                           </select>
                                    </td>
                                    <td contenteditable="false">
                                        <div class="form-group">
                                            <div class='input-group date exp_startdate'>
                                                <input id="applicant_exp_startdate" name="applicant_exp_startdate[]" type='text' class="form-control startdate applicant_exp_startdate" placeholder="Start Date" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </td>  
                                    <td contenteditable="false">
                                        <div class="form-group">
                                            <div class='input-group date exp_enddate'>
                                                <input id="applicant_exp_enddate" name="applicant_exp_enddate[]" type='text' class="form-control enddate applicant_exp_enddate" placeholder="End Date" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </td> 
                                    <td contenteditable="false">
                                        <textarea name="applicant_exp_jobdesc[]" id="applicant_exp_jobdesc" class="form-control applicant_exp_jobdesc" rows="1" placeholder="Job Description"></textarea>
                                    </td> 
                                    <td contenteditable="false">
                                        <input type="text" name="applicant_exp_salary[]" id="applicant_exp_salary" class="form-control we_expand applicant_exp_salary" placeholder="Salary">
                                    </td> 
                                    <td></td>
                                </tr>
                            </table>
                            <div align="right">
                                <button type="button" name="work_add" id="work_add" class="btn btn-default">Add Row</button>
                            </div>
                        </div>
        
                        <!--Skills Div-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>Skills</h3>
                            <table class="table table-bordered" id="skill_table">
                                 <tr>
                                     <th width="30%">Skill</th>
                                      <th width="10%">Level</th>
                                      <th width="5%"></th>
                                </tr>
                                <tr>
                                  <td contenteditable="false">
                                      <input type="text" class="form-control applicant_skill_name" placeholder="Skill" name="applicant_skill_name[]" id="applicant_skill_name" />
                                  </td>
                                  <td contenteditable="false">
                                      <select name="applicant_skill_level[]" id="applicant_skill_level" class="form-control applicant_skill_level">
                                          <option value="Beginner">Beginner</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Advanced">Advanced</option>
                                        <option value="Expert">Expert</option>
                                        <option value="Master">Master</option>
                                       </select>
                                  </td>
                                  <td></td>
                             </tr>
                            </table>
                            <div align="right">
                             <button type="button" name="skill_add" id="skill_add" class="btn btn-default">Add Row</button>
                            </div>
                        </div>
                        
                        <!--Certificates, Trainings & Associations Div-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>Certificates, Trainings & Associations</h3>
                            <table class="table table-bordered" id="training_table">
                                <tr>
                                    <th width="30%">Training</th>
                                    <th width="10%">Date Occured</th>
                                    <th width="5%"></th>
                                </tr>
                                <tr>
                                    <td contenteditable="false">
                                        <textarea name="applicant_training_name[]" id="applicant_training_name" class="form-control applicant_training_name" rows="1" placeholder="Certificates, Trainings & Associations"></textarea>
                                    </td> 
                                    <td contenteditable="false">
                                        <div class="form-group">
                                            <div class='input-group date datetimepicker3'>
                                                <input id="applicant_training_occured" name="applicant_training_occured[]" type='text' class="form-control applicant_training_occured" placeholder="Date Occured" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                            <div align="right">
                                <button type="button" name="training_add" id="training_add" class="btn btn-default">Add Row</button>
                            </div>
                        </div>
                        
                        <!--References Div-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>References</h3>
                            <table class="table table-bordered" id="reference_table">
                                <tr>
                                    <th width="20%">Name</th>
                                    <th width="30%">Company</th>
                                    <th width="10%">Position</th>
                                    <th width="10%">Contact #</th>
                                    <th width="20%">Email</th>
                                    <th width="10%"></th>
                                </tr>
                                <tr>
                                    <td contenteditable="false">
                                        <input type="text" name="applicant_reference_name[]" id="applicant_reference_name" class="applicant_reference_name form-control we_expand" placeholder="Full Name">
                                    </td> 
                                    <td contenteditable="false">
                                        <textarea name="applicant_reference_company[]" id="applicant_reference_company" class="applicant_reference_company form-control" rows="1" placeholder="Company"></textarea>
                                    </td> 
                                    <td contenteditable="false">
                                        <input type="text" name="applicant_reference_position[]" id="applicant_reference_position" class="applicant_reference_position form-control we_expand" placeholder="Position">
                                    </td>
                                    <td contenteditable="false">
                                        <input type="text" name="applicant_reference_contact[]" id="applicant_reference_contact" class="applicant_reference_contact form-control we_expand" placeholder="Contact #">
                                    </td>  
                                    <td contenteditable="false">
                                        <input type="email" name="applicant_reference_Email[]" id="applicant_reference_Email" class="applicant_reference_Email form-control we_expand" placeholder="Email">
                                    </td> 
                                    <td></td>
                                </tr>
                            </table>
                            <div align="right" class="reference_addbtn_container">
                                <button type="button" name="reference_add" id="reference_add" class="btn btn-default">Add Row</button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                        
                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" name="applicant_registration_button" id="applicant_registration_button"> Create My Resume <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </form>
                </div> 
            </div>  
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		//Basic Info 

			//Birthday
			
			$('.applicant_basicinfo_birthday').datetimepicker({
	                    format: 'MM/DD/YYYY',
	                    viewMode: "months"
	        });
			//Civil status condition
	        $('#applicant_basicinfo_civilstatus').change(function(){

	        	if($(this).val() != ''){
	        		var query = $(this).val();
	        		//alert(query);
	        		if ((query=='single')||(query=='single parent')) {
	        			$('.familybackgrounddiv').hide(); //or just load the page
	        		} else {
	        			$('.familybackgrounddiv').show();
	        		}
	        	}
	        });
		
		$('.applicant_basicinfo_email').keyup(function(){
			if($(this).val() != ''){
				var action = $(this).attr("id");
			   	var query = $(this).val();
			   	$.ajax({
				    url:"pages_exe/applicants/applicant_register_exe.php",
				    method:"POST",
				    data:{
				    	verify_email:action, 
				    	query:query
				    },
				    success:function(data){
                    	var module1 = JSON.parse(data);    
                   		if (module1==1) {
                   			//console.log('ok');
                   			$('.email-checker').empty();
                   			$('#applicant_registration_button').attr("disabled", false);
                   		} else {
							//console.log('hindi');
							$('.email-checker').html('<b>Email already registered</b>');
							$('#applicant_registration_button').attr("disabled", true);
                   		}
				     //if already taken delete else stay | disable submit
				    }
			   	})
		  	}
		});
        //Address condition   

        /*$('select[name=applicant_basicinfo_country]').val(167);
		$('#applicant_basicinfo_country').selectpicker('refresh');*/

        $('.selectlocation').change(function(){
			if($(this).val() != ''){
				var action = $(this).attr("id");
			   	var query = $(this).val();
			   	var result = '';
			   	if(action == "applicant_basicinfo_province"){
			    	result = 'applicant_basicinfo_municapality';
			   	} else {
			    	result = 'applicant_basicinfo_barangay';
			   	}
			   	$.ajax({
				    url:"pages_exe/applicants/applicant_register_exe.php",
				    method:"POST",
				    data:{
				    	selectlocation:action, 
				    	query:query
				    },
				    success:function(data){
				     $('#'+result).html(data);
				    }
			   	})
		  	}
		});

		//Family Backgrounnd
		var familycount = 1;
		 $('#family_add').click(function(){
		  familycount = familycount + 1;
		  var family_code = "<tr id='familyrow"+familycount+"'>";
		   family_code += "<td contenteditable='false'><input type='text' class='form-control applicant_family_childname' placeholder='Full Name (FirstName MiddleName LastName)' name='applicant_family_childname[]' id='applicant_family_childname' /></td>";
		   family_code += "<td contenteditable='false'><select name='applicant_family_status[]' id='applicant_family_status' class='form-control applicant_family_status'><option value='alive'>Alive</option><option value='deceased'>Deceased</option></select></td>";
		   family_code += "<td><button type='button' name='familyremove' data-row='familyrow"+familycount+"' class='btn btn-danger familyremove'>Delete</button></td>";   
		   family_code += "</tr>";  
		   $('#family_table').append(family_code);
		});
		$(document).on('click', '.familyremove', function(){
		  	var delete_row = $(this).data("row");
		  	$('#' + delete_row).remove();
		});

		//Education
		var educationcount = 1;
		$('#education_add').click(function(){
			educationcount = educationcount + 1;
		  	var education_code = "<tr id='educationrow"+educationcount+"'>";
		   	education_code += "<td contenteditable='false'><select name='applicant_education_degree[]' id='applicant_education_degree' class='form-control we_expand applicant_education_degree'><option value='High school level'>High school level</option><option value='High school graduate'>High school graduate</option><option value='Vocational school graduate'>Vocational school graduate</option><option value='College level'>College level</option><option value='College graduate'>College graduate</option><option value='Some graduate school'>Some graduate school</option><option value='Completed graduate school'>Completed graduate school</option></select></td>";
			education_code += "<td contenteditable='false'><textarea name='applicant_education_school[]' id='applicant_education_school' class='form-control applicant_education_school' rows='1' placeholder='Name of School'></textarea></td>";

			education_code += "<td contenteditable='false'><textarea name='applicant_education_course[]' id='applicant_education_course' class='form-control applicant_education_course' rows='1' placeholder='Course'></textarea></td>";

			education_code += "<td contenteditable='false'><div class='form-group'><div class='input-group date datetimepicker3 applicant_education_dateoccured'><input id='applicant_education_dateoccured' name='applicant_education_dateoccured[]' type='text' class='form-control we_expand' placeholder='Date Occured' /><span class='input-group-addon'><span class='glyphicon glyphicon-time'></span></span></div></div></td>";


		   education_code += "<td><button type='button' name='educationremove' data-row='educationrow"+educationcount+"' class='btn btn-danger educationremove'>Delete</button></td>";   
		   education_code += "</tr>";  
		   $('#education_table').append(education_code);
		});
		$(document).on('click', '.educationremove', function(){
		  	var delete_row = $(this).data("row");
		  	$('#' + delete_row).remove();
		});

		//Work Experience 
		
		var workecount = 1;
		$('#work_add').click(function(){
			workecount = workecount + 1;
		  	var work_code = "<tr id='workrow"+workecount+"'>";
		   	work_code += "<td contenteditable='false'><input type='text' name='applicant_exp_title[]' id='applicant_exp_title' class='form-control we_expand applicant_exp_title' placeholder='Job Title'></td>";
			work_code += "<td contenteditable='false'><textarea name='applicant_exp_company[]' id='applicant_exp_company' class='form-control we_expand applicant_exp_company' rows='1' placeholder='Company'></textarea></td>";

			work_code += "<td contenteditable='false'><select name='applicant_exp_emptype[]' id='applicant_exp_emptype' class='form-control we_expand applicant_exp_emptype'><option value='Full Time'>Full Time</option><option value='Part Time'>Part Time</option><option value='Freelance'>Freelance</option><option value='Contractual'>Contractual</option><option value='OJT / Intern'>OJT / Intern</option></select></td>";

			work_code += "<td contenteditable='false'><div class='form-group'><div class='input-group date exp_startdate '><input id='applicant_exp_startdate' name='applicant_exp_startdate[]' type='text' class='form-control startdate applicant_exp_startdate' placeholder='Start Date' /><span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span></div></div></td>";

			work_code += "<td contenteditable='false'><div class='form-group'><div class='input-group date exp_enddate'><input id='applicant_exp_enddate' name='applicant_exp_enddate[]' type='text' class='form-control enddate applicant_exp_enddate' placeholder='End Date' /><span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span></div></div></td> ";
			work_code += "<td contenteditable='false'><textarea name='applicant_exp_jobdesc[]' id='applicant_exp_jobdesc' class='form-control applicant_exp_jobdesc' rows='1' placeholder='Job Description'></textarea></td> ";
			work_code += "<td contenteditable='false'><input type='text' name='applicant_exp_salary[]' id='applicant_exp_salary' class='form-control we_expand applicant_exp_salary' placeholder='Salary'></td> ";
		   work_code += "<td><button type='button' name='workremove' data-row='workrow"+workecount+"' class='btn btn-danger workremove'>Delete</button></td>";   
		   work_code += "</tr>";  
		   $('#work_table').append(work_code);
		});
		$(document).on('click', '.workremove', function(){
		  	var delete_row = $(this).data("row");
		  	$('#' + delete_row).remove();
		});


		//Certificates, Trainings & Associations
		var trainingcount = 1;
		 $('#training_add').click(function(){
		  trainingcount = trainingcount + 1;
		  var training_code = "<tr id='trainingrow"+trainingcount+"'>";
		   training_code += "<td contenteditable='false'><textarea name='applicant_training_name[]' id='applicant_training_name' class='form-control applicant_training_name' rows='1' placeholder='Certificates, Trainings & Associations'></textarea></td> ";
		   training_code += "<td contenteditable='false'><div class='form-group'><div class='input-group date datetimepicker3'><input id='applicant_training_occured' name='applicant_training_occured[]' type='text' class='form-control applicant_training_occured' placeholder='Date Occured' /><span class='input-group-addon'><span class='glyphicon glyphicon-time'></span></span></div></div></td>";
		   training_code += "<td><button type='button' name='trainingremove' data-row='trainingrow"+trainingcount+"' class='btn btn-danger trainingremove'>Delete</button></td>";   
		   training_code += "</tr>";  
		   $('#training_table').append(training_code);
		});
		$(document).on('click', '.trainingremove', function(){
		  	var delete_row = $(this).data("row");
		  	$('#' + delete_row).remove();
		});

		//Skills
		var skillcount = 1;
		 $('#skill_add').click(function(){
		  skillcount = skillcount + 1;
		  var skill_code = "<tr id='skillrow"+skillcount+"'>";
		   skill_code += "<td contenteditable='false'><input type='text' class='form-control applicant_skill_name' placeholder='Skill' name='applicant_skill_name[]' id='applicant_skill_name' /></td>";
		   skill_code += "<td contenteditable='false'><select name='applicant_skill_level[]' id='applicant_skill_level' class='form-control applicant_skill_level'><option value='Beginner'>Beginner</option><option value='Intermediate'>Intermediate</option><option value='Advanced'>Advanced</option><option value='Expert'>Expert</option><option value='Master'>Master</option></select></td>";
		   skill_code += "<td><button type='button' name='skillremove' data-row='skillrow"+skillcount+"' class='btn btn-danger skillremove'>Delete</button></td>";   
		   skill_code += "</tr>";  
		   $('#skill_table').append(skill_code);
		});
		$(document).on('click', '.skillremove', function(){
		  	var delete_row = $(this).data("row");
		  	$('#' + delete_row).remove();
		});

		//References
		var referencecount = 1;
		 $('#reference_add').click(function(){

		 var rowCount = $('#reference_table tr').length;
		   console.log(rowCount);
		  if (rowCount==4) {
		  	alert('more than 3 row na bro');
		  } else {


		referencecount = referencecount + 1;
		var reference_code = "<tr id='referencerow"+referencecount+"'>";
		   reference_code += "<td contenteditable='false'><input type='text' name='applicant_reference_name[]' id='applicant_reference_name' class='applicant_reference_name form-control we_expand' placeholder='Name'></td>";
		   reference_code += "<td contenteditable='false'><textarea name='applicant_reference_company[]' id='applicant_reference_company' class='applicant_reference_company form-control' rows='1' placeholder='Company'></textarea></td>";
		   reference_code += "<td contenteditable='false'><input type='text' name='applicant_reference_position[]' id='applicant_reference_position' class='applicant_reference_position form-control we_expand' placeholder='Position'></td>";
		   reference_code += "<td contenteditable='false'><input type='text' name='applicant_reference_contact[]' id='applicant_reference_contact' class='applicant_reference_contact form-control we_expand' placeholder='Contact #'></td>  ";
		   reference_code += "<td contenteditable='false'><input type='email' name='applicant_reference_Email[]' id='applicant_reference_Email' class='applicant_reference_Email form-control we_expand' placeholder='Email'></td>";
		   reference_code += "<td><button type='button' name='referenceremove' data-row='referencerow"+referencecount+"' class='btn btn-danger referenceremove'>Delete</button></td>";   
		   reference_code += "</tr>";  
		   $('#reference_table').append(reference_code);
		   var rowCount = $('#reference_table tr').length;
		   		if (rowCount==4) {
		   			$('#reference_add').hide();
		   		}
		   }
		});
		$(document).on('click', '.referenceremove', function(){
		  	var delete_row = $(this).data("row");
		  	$('#' + delete_row).remove();
		   var rowCount = $('#reference_table tr').length;
		  	if (rowCount<4 && rowCount>2) {
		  		$('#reference_add').show();
		  	}
		  	/*
		   var rowCount = $('#reference_table tr').length;
		  	if (rowCount<4 ) {
		   			var refbtn ="<button type='button' name='reference_add' id='reference_add' class='btn btn-default'>Add Row</button>";
		   			
		   			$('.reference_addbtn_container').append(refbtn);
		   		}*/
		});

		$("#applicant-registration-form").validate({
			rules: {
				//basic info
                applicant_basicinfo_firstname: {
                    required: true,
                },
                applicant_basicinfo_middlename: {
                    required: true,
                },
                applicant_basicinfo_lastname: {
                    required: true,
                },
                applicant_basicinfo_password: {
					required: true,
					minlength: 8
				},
				confirm_applicant_basicinfo_password: {
					required: true,
					minlength: 8,
					equalTo: "#applicant_basicinfo_password"
				}
			},
			messages: {
				//basic info
                applicant_basicinfo_firstname: {
                    required: "Please enter firstname"
                },
                applicant_basicinfo_middlename: {
                    required: "Please enter middlename"
                },
                applicant_basicinfo_lastname: {
                    required: "Please enter lastname"
                },
			},
			submitHandler: submitForm 
		});

		function submitForm() {

			var data = $("#applicant-registration-form").serialize();
			$.ajax({            
                type : 'POST', 
                url  : 'pages_exe/applicants/applicant_register_exe.php',
                data : data,
                beforeSend: function(){ 
                    //$("#error").fadeOut();
                    $("#applicant_registration_button").html('Sending ...');
                },
                success : function(data,status){
                    console.log(data);
                    var module1 = JSON.parse(data);    
                   
                    if (data!=999) {
                        setTimeout(' window.location.href = "index.php?page=customer-registration-success"; ',1000);
                    } else {
                        $("#applicant_registration_button").html('Submit');
                    }

                   
                }
            });
            return false;
		}

		$('.datetimepicker3').datetimepicker({
            format: 'MMM-YYYY',
            viewMode: "months"
        });

		//Linked Picker for Work Experience
		$('.exp_startdate').datetimepicker({
			format: 'MM/DD/YYYY',
			viewMode: "months"
		});
        $('.exp_enddate').datetimepicker({
        	format: 'MM/DD/YYYY',
        	viewMode: "months",
            useCurrent: false //Important! See issue #1075
        });
        $(".exp_startdate").on("dp.change", function (e) {
            $('.exp_enddate').data("DateTimePicker").minDate(e.date);
        });
        $(".exp_enddate").on("dp.change", function (e) {
            $('.exp_startdate').data("DateTimePicker").maxDate(e.date);
        });

        //Tooltip
        $('[data-toggle="tooltip"]').tooltip()
	});
</script>