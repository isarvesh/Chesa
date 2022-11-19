<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Chesa Dental Care</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <?php include 'header.php';?>
<!-- end header -->
           
  


<!-- Divider: Contact -->
<section class="small-section p-4 divider layer-overlay overlay-deep" data-bg-img="images/bg/bg1.jpg">
    <div class="container">
      <div class="row pt-30">
          <div class="col-md-2"></div>
        <div class="col-md-8" style="border: 2px solid #f86517;border-radius: 29px;margin-bottom: 20px;margin-top: 20px;border-style: dashed;padding: 25px;">
            <div class="col-md-12 text-center ">
                <h5 class="alt-font text-extra-dark-gray font-weight-600"><u>Demo Request Form</u></h5>
                

            </div>
          <hr>
          <!-- Contact Form -->
          <?php if (isset($message)) { ?>
<div class="">
<?php echo $message; ?>
</div>
<?php } ?>	
          <form action="demo-request.php" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>First Name <small>*</small></label>
                  <input name="fname" class="form-control" type="text" required placeholder="Enter First Name"  autocomplete="off">
                  
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Middle Name <small>*</small></label>
                  <input name="mname" class="form-control" type="text" placeholder="Enter Middle Name"  autocomplete="off">
                   
                </div>
              </div>
              </div>
              <div class="row">
              
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Last Name <small>*</small></label>
                  <input name="lname" class="form-control" required type="text" placeholder="Enter Last Name" autocomplete="off">
                   
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email <small>*</small></label>
                  <input name="email" class="form-control email"  requiredtype="email" placeholder="Enter Email" autocomplete="off">
                  
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                  <label>City <small>*</small></label>
                  <input name="city" class="form-control" required type="text" placeholder="Enter City" autocomplete="off">
                 
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>State <small>*</small></label>
                  <select name="state" class="form-control" required  type="text">
                  <option value="">....Select State....</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
<div class="error" id="stateErr"></div>                 
                </div>
              </div>
              </div>
              <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Country <small>*</small></label>
                  <select name="country"  class="form-control" required >
              <option value="">....Select Country....</option>
 <option value="Afganistan">Afghanistan</option>
 <option value="Albania">Albania</option>
 <option value="Algeria">Algeria</option>
 <option value="American Samoa">American Samoa</option>
 <option value="Andorra">Andorra</option>
 <option value="Angola">Angola</option>
 <option value="Anguilla">Anguilla</option>
 <option value="Antigua & Barbuda">Antigua & Barbuda</option>
 <option value="Argentina">Argentina</option>
 <option value="Armenia">Armenia</option>
 <option value="Aruba">Aruba</option>
 <option value="Australia">Australia</option>
 <option value="Austria">Austria</option>
 <option value="Azerbaijan">Azerbaijan</option>
 <option value="Bahamas">Bahamas</option>
 <option value="Bahrain">Bahrain</option>
 <option value="Bangladesh">Bangladesh</option>
 <option value="Barbados">Barbados</option>
 <option value="Belarus">Belarus</option>
 <option value="Belgium">Belgium</option>
 <option value="Belize">Belize</option>
 <option value="Benin">Benin</option>
 <option value="Bermuda">Bermuda</option>
 <option value="Bhutan">Bhutan</option>
 <option value="Bolivia">Bolivia</option>
 <option value="Bonaire">Bonaire</option>
 <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
 <option value="Botswana">Botswana</option>
 <option value="Brazil">Brazil</option>
 <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
 <option value="Brunei">Brunei</option>
 <option value="Bulgaria">Bulgaria</option>
 <option value="Burkina Faso">Burkina Faso</option>
 <option value="Burundi">Burundi</option>
 <option value="Cambodia">Cambodia</option>
 <option value="Cameroon">Cameroon</option>
 <option value="Canada">Canada</option>
 <option value="Canary Islands">Canary Islands</option>
 <option value="Cape Verde">Cape Verde</option>
 <option value="Cayman Islands">Cayman Islands</option>
 <option value="Central African Republic">Central African Republic</option>
 <option value="Chad">Chad</option>
 <option value="Channel Islands">Channel Islands</option>
 <option value="Chile">Chile</option>
 <option value="China">China</option>
 <option value="Christmas Island">Christmas Island</option>
 <option value="Cocos Island">Cocos Island</option>
 <option value="Colombia">Colombia</option>
 <option value="Comoros">Comoros</option>
 <option value="Congo">Congo</option>
 <option value="Cook Islands">Cook Islands</option>
 <option value="Costa Rica">Costa Rica</option>
 <option value="Cote DIvoire">Cote DIvoire</option>
 <option value="Croatia">Croatia</option>
 <option value="Cuba">Cuba</option>
 <option value="Curaco">Curacao</option>
 <option value="Cyprus">Cyprus</option>
 <option value="Czech Republic">Czech Republic</option>
 <option value="Denmark">Denmark</option>
 <option value="Djibouti">Djibouti</option>
 <option value="Dominica">Dominica</option>
 <option value="Dominican Republic">Dominican Republic</option>
 <option value="East Timor">East Timor</option>
 <option value="Ecuador">Ecuador</option>
 <option value="Egypt">Egypt</option>
 <option value="El Salvador">El Salvador</option>
 <option value="Equatorial Guinea">Equatorial Guinea</option>
 <option value="Eritrea">Eritrea</option>
 <option value="Estonia">Estonia</option>
 <option value="Ethiopia">Ethiopia</option>
 <option value="Falkland Islands">Falkland Islands</option>
 <option value="Faroe Islands">Faroe Islands</option>
 <option value="Fiji">Fiji</option>
 <option value="Finland">Finland</option>
 <option value="France">France</option>
 <option value="French Guiana">French Guiana</option>
 <option value="French Polynesia">French Polynesia</option>
 <option value="French Southern Ter">French Southern Ter</option>
 <option value="Gabon">Gabon</option>
 <option value="Gambia">Gambia</option>
 <option value="Georgia">Georgia</option>
 <option value="Germany">Germany</option>
 <option value="Ghana">Ghana</option>
 <option value="Gibraltar">Gibraltar</option>
 <option value="Great Britain">Great Britain</option>
 <option value="Greece">Greece</option>
 <option value="Greenland">Greenland</option>
 <option value="Grenada">Grenada</option>
 <option value="Guadeloupe">Guadeloupe</option>
 <option value="Guam">Guam</option>
 <option value="Guatemala">Guatemala</option>
 <option value="Guinea">Guinea</option>
 <option value="Guyana">Guyana</option>
 <option value="Haiti">Haiti</option>
 <option value="Hawaii">Hawaii</option>
 <option value="Honduras">Honduras</option>
 <option value="Hong Kong">Hong Kong</option>
 <option value="Hungary">Hungary</option>
 <option value="Iceland">Iceland</option>
 <option value="Indonesia">Indonesia</option>
 <option value="India">India</option>
 <option value="Iran">Iran</option>
 <option value="Iraq">Iraq</option>
 <option value="Ireland">Ireland</option>
 <option value="Isle of Man">Isle of Man</option>
 <option value="Israel">Israel</option>
 <option value="Italy">Italy</option>
 <option value="Jamaica">Jamaica</option>
 <option value="Japan">Japan</option>
 <option value="Jordan">Jordan</option>
 <option value="Kazakhstan">Kazakhstan</option>
 <option value="Kenya">Kenya</option>
 <option value="Kiribati">Kiribati</option>
 <option value="Korea North">Korea North</option>
 <option value="Korea Sout">Korea South</option>
 <option value="Kuwait">Kuwait</option>
 <option value="Kyrgyzstan">Kyrgyzstan</option>
 <option value="Laos">Laos</option>
 <option value="Latvia">Latvia</option>
 <option value="Lebanon">Lebanon</option>
 <option value="Lesotho">Lesotho</option>
 <option value="Liberia">Liberia</option>
 <option value="Libya">Libya</option>
 <option value="Liechtenstein">Liechtenstein</option>
 <option value="Lithuania">Lithuania</option>
 <option value="Luxembourg">Luxembourg</option>
 <option value="Macau">Macau</option>
 <option value="Macedonia">Macedonia</option>
 <option value="Madagascar">Madagascar</option>
 <option value="Malaysia">Malaysia</option>
 <option value="Malawi">Malawi</option>
 <option value="Maldives">Maldives</option>
 <option value="Mali">Mali</option>
 <option value="Malta">Malta</option>
 <option value="Marshall Islands">Marshall Islands</option>
 <option value="Martinique">Martinique</option>
 <option value="Mauritania">Mauritania</option>
 <option value="Mauritius">Mauritius</option>
 <option value="Mayotte">Mayotte</option>
 <option value="Mexico">Mexico</option>
 <option value="Midway Islands">Midway Islands</option>
 <option value="Moldova">Moldova</option>
 <option value="Monaco">Monaco</option>
 <option value="Mongolia">Mongolia</option>
 <option value="Montserrat">Montserrat</option>
 <option value="Morocco">Morocco</option>
 <option value="Mozambique">Mozambique</option>
 <option value="Myanmar">Myanmar</option>
 <option value="Nambia">Nambia</option>
 <option value="Nauru">Nauru</option>
 <option value="Nepal">Nepal</option>
 <option value="Netherland Antilles">Netherland Antilles</option>
 <option value="Netherlands">Netherlands (Holland, Europe)</option>
 <option value="Nevis">Nevis</option>
 <option value="New Caledonia">New Caledonia</option>
 <option value="New Zealand">New Zealand</option>
 <option value="Nicaragua">Nicaragua</option>
 <option value="Niger">Niger</option>
 <option value="Nigeria">Nigeria</option>
 <option value="Niue">Niue</option>
 <option value="Norfolk Island">Norfolk Island</option>
 <option value="Norway">Norway</option>
 <option value="Oman">Oman</option>
 <option value="Pakistan">Pakistan</option>
 <option value="Palau Island">Palau Island</option>
 <option value="Palestine">Palestine</option>
 <option value="Panama">Panama</option>
 <option value="Papua New Guinea">Papua New Guinea</option>
 <option value="Paraguay">Paraguay</option>
 <option value="Peru">Peru</option>
 <option value="Phillipines">Philippines</option>
 <option value="Pitcairn Island">Pitcairn Island</option>
 <option value="Poland">Poland</option>
 <option value="Portugal">Portugal</option>
 <option value="Puerto Rico">Puerto Rico</option>
 <option value="Qatar">Qatar</option>
 <option value="Republic of Montenegro">Republic of Montenegro</option>
 <option value="Republic of Serbia">Republic of Serbia</option>
 <option value="Reunion">Reunion</option>
 <option value="Romania">Romania</option>
 <option value="Russia">Russia</option>
 <option value="Rwanda">Rwanda</option>
 <option value="St Barthelemy">St Barthelemy</option>
 <option value="St Eustatius">St Eustatius</option>
 <option value="St Helena">St Helena</option>
 <option value="St Kitts-Nevis">St Kitts-Nevis</option>
 <option value="St Lucia">St Lucia</option>
 <option value="St Maarten">St Maarten</option>
 <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
 <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
 <option value="Saipan">Saipan</option>
 <option value="Samoa">Samoa</option>
 <option value="Samoa American">Samoa American</option>
 <option value="San Marino">San Marino</option>
 <option value="Sao Tome & Principe">Sao Tome & Principe</option>
 <option value="Saudi Arabia">Saudi Arabia</option>
 <option value="Senegal">Senegal</option>
 <option value="Seychelles">Seychelles</option>
 <option value="Sierra Leone">Sierra Leone</option>
 <option value="Singapore">Singapore</option>
 <option value="Slovakia">Slovakia</option>
 <option value="Slovenia">Slovenia</option>
 <option value="Solomon Islands">Solomon Islands</option>
 <option value="Somalia">Somalia</option>
 <option value="South Africa">South Africa</option>
 <option value="Spain">Spain</option>
 <option value="Sri Lanka">Sri Lanka</option>
 <option value="Sudan">Sudan</option>
 <option value="Suriname">Suriname</option>
 <option value="Swaziland">Swaziland</option>
 <option value="Sweden">Sweden</option>
 <option value="Switzerland">Switzerland</option>
 <option value="Syria">Syria</option>
 <option value="Tahiti">Tahiti</option>
 <option value="Taiwan">Taiwan</option>
 <option value="Tajikistan">Tajikistan</option>
 <option value="Tanzania">Tanzania</option>
 <option value="Thailand">Thailand</option>
 <option value="Togo">Togo</option>
 <option value="Tokelau">Tokelau</option>
 <option value="Tonga">Tonga</option>
 <option value="Trinidad & Tobago">Trinidad & Tobago</option>
 <option value="Tunisia">Tunisia</option>
 <option value="Turkey">Turkey</option>
 <option value="Turkmenistan">Turkmenistan</option>
 <option value="Turks & Caicos Is">Turks & Caicos Is</option>
 <option value="Tuvalu">Tuvalu</option>
 <option value="Uganda">Uganda</option>
 <option value="United Kingdom">United Kingdom</option>
 <option value="Ukraine">Ukraine</option>
 <option value="United Arab Erimates">United Arab Emirates</option>
 <option value="United States of America">United States of America</option>
 <option value="Uraguay">Uruguay</option>
 <option value="Uzbekistan">Uzbekistan</option>
 <option value="Vanuatu">Vanuatu</option>
 <option value="Vatican City State">Vatican City State</option>
 <option value="Venezuela">Venezuela</option>
 <option value="Vietnam">Vietnam</option>
 <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
 <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
 <option value="Wake Island">Wake Island</option>
 <option value="Wallis & Futana Is">Wallis & Futana Is</option>
 <option value="Yemen">Yemen</option>
 <option value="Zaire">Zaire</option>
 <option value="Zambia">Zambia</option>
 <option value="Zimbabwe">Zimbabwe</option>
</select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Phone <small>*</small></label>
                  <input name="mobile" class="form-control" required maxlength="10" type="text" placeholder="Enter Phone" autocomplete="off">
                                    
                </div>
              </div>
            </div>
             <div class="row">
                 <div class="col-sm-6">
                <div class="form-group">
                  <label>Products <small>*</small></label>
                  <select name="product1" class="form-control" required  type="text">
<option value="">Select Products</option>
<option value="Fussen Sensor">Fussen Sensor</option>
<option value="Nano Ray">Nano Ray</option>
<option value="Simpler Laser">Simpler Laser</option>
<option value="Wiser Laser">Wiser Laser</option>
<option value="Endosmart Endomoter">Endosmart Endomoter</option>
<option value="Rio Scan PSP">Rio Scan PSP</option>
<option value="Runyes intra oral scanner">Runyes intra oral scanner</option>
</select>
                </div>
              </div>
             <div class="col-sm-6">
                <div class="form-group">
                  <label>Products <small>*</small></label>
                  <select name="product2" class="form-control" required  type="text">
                      <option value="">....Select Products....</option>
<option value="Fussen Sensor">Fussen Sensor</option>
<option value="Nano Ray">Nano Ray</option>
<option value="Simpler Laser">Simpler Laser</option>
<option value="Wiser Laser">Wiser Laser</option>
<option value="Endosmart Endomoter">Endosmart Endomoter</option>
<option value="Rio Scan PSP">Rio Scan PSP</option>
<option value="Runyes intra oral scanner">Runyes intra oral scanner</option>
</select>
                </div>
              </div>
            </div>
              
            <div class="row">
                <div class="col-sm-12">
                <div class="form-group">
                  <label>References <small>*</small></label>
                  <select name="reference"  class="form-control" required  type="text">
<option value="">Select References</option>
<option value="Facebook">Facebook</option>
<option value="Instagram">Instagram</option>
<option value="Google">Google</option>
<option value="Friends">Friends</option>
<option value="Colleague">Colleague</option>
<option value="SMS">SMS</option>
<option value="Email">Email</option>
<option value="Conference">Conference</option>
<option value="Other">Other</option>
</select>
                </div>
              </div> 
              </div>
          <div class="row">
              <div class="col-sm-12">
            <div class="form-group">
              <label>Message</label>
              <textarea  name="message" class="form-control"  rows="5" placeholder="Enter Message" required autocomplete="off"></textarea>
             
            </div>
          </div>
          </div> 
            <div class="form-group" style="margin-top:5px;">
              <button type="submit" class="btn btn-small btn-golden-brown btn-round-edge d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" data-loading-text="Please wait...">Submit<i class="fas fa-arrow-right right-icon"></i></button>
              <button type="reset" class="btn btn-small btn-transparent-black btn-rounded d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  




      
        <!-- start footer -->
        <?php include 'footer.php';?>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>