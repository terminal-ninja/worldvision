<?php /* Template Name: Donate Template */ get_header(); ?>

<h2 class="heading">Donate</h2>

<section class="center">
  <h2>Inspired To See No Child Without</h2>
  <p class="black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim unde fugit nisi iure quisquam, deleniti nam maxime omnis, quam in vitae. Fugit voluptates, eum dignissimos inventore. Nesciunt nam, harum ea.</p>
  <div class="steps center">
    <i class="fa fa-circle" aria-hidden="true"></i>
      <div class="line"></div>
    <i class="fa fa-circle-thin" aria-hidden="true"></i>
  </div>
</section>

<section class="form">
  <h3 class="center">Donate and Help a Child</h3>
  <div class="inner">
    <h4>Donation Information</h4>
    <form action="/wvusertest/Donate/DonateIndex" class="box validate" enctype="multipart/form-data" id="form" method="post" name="form">
      <div class="row">
        <div class="form-pg-1">
          <div class="ibox float-e-margins">
            <!-- <div class="ibox-title">
              
            </div> -->
            <div class="ibox-content">
              <div class="row">
                <div class="half validate col-2">
                  <label>Donation Amount</label><!-- <label class="required_imp"><b>*</b> --></label>
                  <div class="">
                    <span class="input-group-addon orangeBg"></span> <label>Donation Info</label> <input class="required form-control" data-val="true" data-val-number="The field Sponsor_Amount must be a number." data-val-required="The Sponsor_Amount field is required." id="Sponsor_Amount" maxlength="13" name="Sponsor_Amount" placeholder="Donation Amount" type="text" value="">
                  </div><span class="error-block"></span>
                </div>
                <div class="half col-2">
                  <div class="form-group">
                    <label>Motivation to Donate</label> <select class="chosen-select form-control form-control-name" id="Sponsor_MotivationToDonate" name="Sponsor_MotivationToDonate">
                      <option value="6">
                        A TV Ad
                      </option>
                      <option value="7">
                        Radio
                      </option>
                      <option value="8">
                        A Magazine Ad
                      </option>
                      <option value="9">
                        World Vision&#39;s website
                      </option>
                      <option value="10">
                        Social Media
                      </option>
                      <option value="11">
                        An SMS from World Vision
                      </option>
                      <option value="12">
                        A World Vision Representative visited my house
                      </option>
                      <option value="13">
                        World of Mouth
                      </option>
                      <option value="14">
                        A World Vision Stand
                      </option>
                      <option value="15">
                        A Phone Call from World Vision
                      </option>
                      <option value="22">
                        Existing Campaigns
                      </option>
                      <option value="23">
                        Dedicate a Special Event
                      </option>
                      <option value="24">
                        Create your own cause
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="half">
                  <div class="checkbox i-checks">
                    <input id="Sponsor_isDonateMonthly" name="Sponsor_isDonateMonthly" type="hidden" value=""> <input id="isDonateMonthly" type="checkbox" value=""> <i></i>I'd like to donate this amount monthly
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="quarter">
                  <div class="form-group">
                    <label>I'm donating as an</label>
                  </div>
                </div>
                <div class="quarter">
                  <div class="btn-group">
                    <input id="Sponsor_Type" name="Sponsor_Type" type="hidden" value=""> <button class="btn btn-w-m btn-primary prime-color1-bak" id="btnIndividual" type="button">Individual</button> <button class="btn btn-w-m btn-default" id="btnOrganization" type="button">Organization</button>
                  </div>
                </div>
              </div>
              <div class="row Individual">
                <div class="one-fifth col-3">
                  <div class="form-group">
                    <label>Title</label> <select class="chosen-select form-control form-control-name" id="Sponsor_Title" name="Sponsor_Title">
                      <option value="Mr.">
                        Mr.
                      </option>
                      <option value="Mrs.">
                        Mrs.
                      </option>
                      <option value="Miss.">
                        Miss.
                      </option>
                    </select>
                  </div>
                </div>
                <div class="two-fifths col-3">
                  <div class="form-group">
                    <label>First Name*</label><!-- <label class="required_imp"><b>*</b></label> --> <input class="required form-control" id="Sponsor_First_Name" maxlength="50" name="Sponsor_First_Name" type="text" value="">
                  </div>
                </div>
                <div class="two-fifths col-3">
                  <div class="form-group">
                    <label>Last Name*</label><!-- <label class="required_imp"><b>*</b></label> --> <input class="required form-control" id="Sponsor_Last_Name" maxlength="50" name="Sponsor_Last_Name" type="text" value="">
                  </div>
                </div>
              </div>
              <div class="row Organization" style="display:none;">
                <div class="half">
                  <div class="form-group">
                    <label>Organization Name</label><!-- <label class="required_imp"><b>*</b></label> --> <input class="required form-control" id="Sponsor_Organization_Name" maxlength="128" name="Sponsor_Organization_Name" type="text" value="">
                  </div>
                </div>
                <div class="half">
                  <div class="form-group">
                    <label>Organization Type</label> <select class="chosen-select form-control form-control-name" id="Sponsor_Organization_Type" name="Sponsor_Organization_Type">
                      <option value="Church">
                        Church
                      </option>
                      <option value="Club">
                        Club
                      </option>
                      <option value="Corporate">
                        Corporate
                      </option>
                      <option value="Education">
                        Education
                      </option>
                      <option value="Government">
                        Government
                      </option>
                      <option value="Group">
                        Group
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row Organization" style="display:none;">
                <div class="half">
                  <div class="form-group">
                    <label>Contact Person</label><!-- <label class="required_imp"><b>*</b></label> --> <input class="required form-control" id="Sponsor_Contact_Person" maxlength="128" name="Sponsor_Contact_Person" type="text" value="">
                  </div>
                </div>
                <div class="four-fifths">
                  <div class="form-group">
                    <label>Supporter Number</label><!-- <label class="required_imp"><b>*</b></label> --> <input class="required form-control" id="Sponsor_SupporterNumber_Org" maxlength="50" name="Sponsor_SupporterNumber_Org" type="text" value="">
                  </div>
                </div>
              </div>
              <div class="row Individual">
                <div class="one-fifth col-2">
                  <div class="form-group">
                    <label>Date of Birth</label> <input class="Sponsor_DateofBirth form-control" id="Sponsor_DateofBirth" maxlength="50" name="Sponsor_DateofBirth" type="text" value="">
                  </div>
                </div>
                <div class="four-fifths col-2">
                  <div class="form-group">
                    <label>Supporter Number</label> <input class=" form-control" id="Sponsor_SupporterNumber_Ind" maxlength="50" name="Sponsor_SupporterNumber_Ind" type="text" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="one-fifth col-2">
                  <div class="form-group">
                    <label>Phone Type</label> <select class="chosen-select form-control form-control-name" id="Sponsor_Phone_Types" name="Sponsor_Phone_Types">
                      <option value="H">
                        Home
                      </option>
                      <option value="W">
                        Work
                      </option>
                      <option value="M">
                        Mobile
                      </option>
                    </select>
                  </div>
                </div>
                <div class="four-fifths  col-2">
                  <div class="form-group">
                    <label>Contact Number</label> <input class="form-control" id="Sponsor_Contact_Number" maxlength="50" name="Sponsor_Contact_Number" type="text" value="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ADDRESS DETAILS -->
        <div class="col-lg-6" style="display:none;">
          <div class="ibox float-e-margins">
            <div class="ibox-title">
              <h2>Address Details</h2>
            </div>
            <div class="ibox-content">
              <div class="row" style="padding-top:10px">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Email Address</label><!-- <label class="required_imp"><b>*</b></label> --> <input class="required form-control" id="Sponsor_Email_Address" maxlength="128" name="Sponsor_Email_Address" type="email" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Address Type</label> <select class="chosen-select form-control form-control-name" id="Sponsor_AddressType" name="Sponsor_AddressType">
                      <option value="S">
                        Street Address
                      </option>
                      <option value="P">
                        PO Box
                      </option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-9">
                  <div class="form-group">
                    <label>Address Line 1</label> <input class="form-control" id="Sponsor_Address_Line1" maxlength="128" name="Sponsor_Address_Line1" type="text" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Address Line 2</label> <input class="form-control" id="Sponsor_Address_Line2" maxlength="128" name="Sponsor_Address_Line2" type="text" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>City</label> <input class="form-control" id="Sponsor_City" maxlength="128" name="Sponsor_City" type="text" value="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>State</label> <input class="form-control" id="Sponsor_State" maxlength="128" name="Sponsor_State" type="text" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Postal Code</label> <input class="form-control" id="Sponsor_PostalCode" maxlength="50" name="Sponsor_PostalCode" type="text" value="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Country</label> <select class="chosen-select form-control form-control-name" id="Sponsor_Country" name="Sponsor_Country">
                      <option value="Aruba">
                        Aruba
                      </option>
                      <option value="Afghanistan">
                        Afghanistan
                      </option>
                      <option value="Angola">
                        Angola
                      </option>
                      <option value="Anguilla">
                        Anguilla
                      </option>
                      <option value="Aland Islands">
                        Aland Islands
                      </option>
                      <option value="Albania">
                        Albania
                      </option>
                      <option value="Andorra">
                        Andorra
                      </option>
                      <option value="United Arab Emirates">
                        United Arab Emirates
                      </option>
                      <option value="Argentina">
                        Argentina
                      </option>
                      <option value="Armenia">
                        Armenia
                      </option>
                      <option value="American Samoa">
                        American Samoa
                      </option>
                      <option value="Antarctica">
                        Antarctica
                      </option>
                      <option value="French Southern Territories">
                        French Southern Territories
                      </option>
                      <option value="Antigua and Barbuda">
                        Antigua and Barbuda
                      </option>
                      <option value="Australia">
                        Australia
                      </option>
                      <option value="Austria">
                        Austria
                      </option>
                      <option value="Azerbaijan">
                        Azerbaijan
                      </option>
                      <option value="Burundi">
                        Burundi
                      </option>
                      <option value="Belgium">
                        Belgium
                      </option>
                      <option value="Benin">
                        Benin
                      </option>
                      <option value="Bonaire~ Sint Eustatius and Saba">
                        Bonaire~ Sint Eustatius and Saba
                      </option>
                      <option value="Burkina Faso">
                        Burkina Faso
                      </option>
                      <option value="Bangladesh">
                        Bangladesh
                      </option>
                      <option value="Bulgaria">
                        Bulgaria
                      </option>
                      <option value="Bahrain">
                        Bahrain
                      </option>
                      <option value="Bahamas">
                        Bahamas
                      </option>
                      <option value="Bosnia and Herzegovina">
                        Bosnia and Herzegovina
                      </option>
                      <option value="Saint Barthelemy">
                        Saint Barthelemy
                      </option>
                      <option value="Belarus">
                        Belarus
                      </option>
                      <option value="Belize">
                        Belize
                      </option>
                      <option value="Bermuda">
                        Bermuda
                      </option>
                      <option value="Bolivia (Plurinational wv_tbl_countries of)">
                        Bolivia (Plurinational wv_tbl_countries of)
                      </option>
                      <option value="Brazil">
                        Brazil
                      </option>
                      <option value="Barbados">
                        Barbados
                      </option>
                      <option value="Brunei Darussalam">
                        Brunei Darussalam
                      </option>
                      <option value="Bhutan">
                        Bhutan
                      </option>
                      <option value="Bouvet Island">
                        Bouvet Island
                      </option>
                      <option value="Botswana">
                        Botswana
                      </option>
                      <option value="Central African Republic">
                        Central African Republic
                      </option>
                      <option value="Canada">
                        Canada
                      </option>
                      <option value="Cocos (Keeling) Islands">
                        Cocos (Keeling) Islands
                      </option>
                      <option value="Switzerland">
                        Switzerland
                      </option>
                      <option value="Chile">
                        Chile
                      </option>
                      <option value="China">
                        China
                      </option>
                      <option value="Cote d Ivoire">
                        Cote d Ivoire
                      </option>
                      <option value="Cameroon">
                        Cameroon
                      </option>
                      <option value="Congo (Democratic Republic of the)">
                        Congo (Democratic Republic of the)
                      </option>
                      <option value="Congo">
                        Congo
                      </option>
                      <option value="Cook Islands">
                        Cook Islands
                      </option>
                      <option value="Colombia">
                        Colombia
                      </option>
                      <option value="Comoros">
                        Comoros
                      </option>
                      <option value="Cabo Verde">
                        Cabo Verde
                      </option>
                      <option value="Costa Rica">
                        Costa Rica
                      </option>
                      <option value="Cuba">
                        Cuba
                      </option>
                      <option value="Curacao">
                        Curacao
                      </option>
                      <option value="Christmas Island">
                        Christmas Island
                      </option>
                      <option value="Cayman Islands">
                        Cayman Islands
                      </option>
                      <option value="Cyprus">
                        Cyprus
                      </option>
                      <option value="Czech Republic">
                        Czech Republic
                      </option>
                      <option value="Germany">
                        Germany
                      </option>
                      <option value="Djibouti">
                        Djibouti
                      </option>
                      <option value="Dominica">
                        Dominica
                      </option>
                      <option value="Denmark">
                        Denmark
                      </option>
                      <option value="Dominican Republic">
                        Dominican Republic
                      </option>
                      <option value="Algeria">
                        Algeria
                      </option>
                      <option value="Ecuador">
                        Ecuador
                      </option>
                      <option value="Egypt">
                        Egypt
                      </option>
                      <option value="Eritrea">
                        Eritrea
                      </option>
                      <option value="Western Sahara">
                        Western Sahara
                      </option>
                      <option value="Spain">
                        Spain
                      </option>
                      <option value="Estonia">
                        Estonia
                      </option>
                      <option value="Ethiopia">
                        Ethiopia
                      </option>
                      <option value="Finland">
                        Finland
                      </option>
                      <option value="Fiji">
                        Fiji
                      </option>
                      <option value="Falkland Islands (Malvinas)">
                        Falkland Islands (Malvinas)
                      </option>
                      <option value="France">
                        France
                      </option>
                      <option value="Faroe Islands">
                        Faroe Islands
                      </option>
                      <option value="Micronesia (Federated wv_tbl_countriess of)">
                        Micronesia (Federated wv_tbl_countriess of)
                      </option>
                      <option value="Gabon">
                        Gabon
                      </option>
                      <option value="United Kingdom of Great Britain and Northern Ireland">
                        United Kingdom of Great Britain and Northern Ireland
                      </option>
                      <option value="Georgia">
                        Georgia
                      </option>
                      <option value="Guernsey">
                        Guernsey
                      </option>
                      <option value="Ghana">
                        Ghana
                      </option>
                      <option value="Gibraltar">
                        Gibraltar
                      </option>
                      <option value="Guinea">
                        Guinea
                      </option>
                      <option value="Guadeloupe">
                        Guadeloupe
                      </option>
                      <option value="Gambia">
                        Gambia
                      </option>
                      <option value="Guinea~Bissau">
                        Guinea~Bissau
                      </option>
                      <option value="Equatorial Guinea">
                        Equatorial Guinea
                      </option>
                      <option value="Greece">
                        Greece
                      </option>
                      <option value="Grenada">
                        Grenada
                      </option>
                      <option value="Greenland">
                        Greenland
                      </option>
                      <option value="Guatemala">
                        Guatemala
                      </option>
                      <option value="French Guiana">
                        French Guiana
                      </option>
                      <option value="Guam">
                        Guam
                      </option>
                      <option value="Guyana">
                        Guyana
                      </option>
                      <option value="Hong Kong">
                        Hong Kong
                      </option>
                      <option value="Heard Island and McDonald Islands">
                        Heard Island and McDonald Islands
                      </option>
                      <option value="Honduras">
                        Honduras
                      </option>
                      <option value="Croatia">
                        Croatia
                      </option>
                      <option value="Haiti">
                        Haiti
                      </option>
                      <option value="Hungary">
                        Hungary
                      </option>
                      <option value="Indonesia">
                        Indonesia
                      </option>
                      <option value="Isle of Man">
                        Isle of Man
                      </option>
                      <option value="India">
                        India
                      </option>
                      <option value="British Indian Ocean Territory">
                        British Indian Ocean Territory
                      </option>
                      <option value="Ireland">
                        Ireland
                      </option>
                      <option value="Iran (Islamic Republic of)">
                        Iran (Islamic Republic of)
                      </option>
                      <option value="Iraq">
                        Iraq
                      </option>
                      <option value="Iceland">
                        Iceland
                      </option>
                      <option value="Israel">
                        Israel
                      </option>
                      <option value="Italy">
                        Italy
                      </option>
                      <option value="Jamaica">
                        Jamaica
                      </option>
                      <option value="Jersey">
                        Jersey
                      </option>
                      <option value="Jordan">
                        Jordan
                      </option>
                      <option value="Japan">
                        Japan
                      </option>
                      <option value="Kazakhstan">
                        Kazakhstan
                      </option>
                      <option value="Kenya">
                        Kenya
                      </option>
                      <option value="Kyrgyzstan">
                        Kyrgyzstan
                      </option>
                      <option value="Cambodia">
                        Cambodia
                      </option>
                      <option value="Kiribati">
                        Kiribati
                      </option>
                      <option value="Saint Kitts and Nevis">
                        Saint Kitts and Nevis
                      </option>
                      <option value="Korea (Republic of)">
                        Korea (Republic of)
                      </option>
                      <option value="Kuwait">
                        Kuwait
                      </option>
                      <option value="Lao People Democratic Republic">
                        Lao People Democratic Republic
                      </option>
                      <option value="Lebanon">
                        Lebanon
                      </option>
                      <option value="Liberia">
                        Liberia
                      </option>
                      <option value="Libya">
                        Libya
                      </option>
                      <option value="Saint Lucia">
                        Saint Lucia
                      </option>
                      <option value="Liechtenstein">
                        Liechtenstein
                      </option>
                      <option value="Sri Lanka">
                        Sri Lanka
                      </option>
                      <option value="Lesotho">
                        Lesotho
                      </option>
                      <option value="Lithuania">
                        Lithuania
                      </option>
                      <option value="Luxembourg">
                        Luxembourg
                      </option>
                      <option value="Latvia">
                        Latvia
                      </option>
                      <option value="Macao">
                        Macao
                      </option>
                      <option value="Saint Martin (French part)">
                        Saint Martin (French part)
                      </option>
                      <option value="Morocco">
                        Morocco
                      </option>
                      <option value="Monaco">
                        Monaco
                      </option>
                      <option value="Moldova (Republic of)">
                        Moldova (Republic of)
                      </option>
                      <option value="Madagascar">
                        Madagascar
                      </option>
                      <option value="Maldives">
                        Maldives
                      </option>
                      <option value="Mexico">
                        Mexico
                      </option>
                      <option value="Marshall Islands">
                        Marshall Islands
                      </option>
                      <option value="Macedonia (the former Yugoslav Republic of)">
                        Macedonia (the former Yugoslav Republic of)
                      </option>
                      <option value="Mali">
                        Mali
                      </option>
                      <option value="Malta">
                        Malta
                      </option>
                      <option value="Myanmar">
                        Myanmar
                      </option>
                      <option value="Montenegro">
                        Montenegro
                      </option>
                      <option value="Mongolia">
                        Mongolia
                      </option>
                      <option value="Northern Mariana Islands">
                        Northern Mariana Islands
                      </option>
                      <option value="Mozambique">
                        Mozambique
                      </option>
                      <option value="Mauritania">
                        Mauritania
                      </option>
                      <option value="Montserrat">
                        Montserrat
                      </option>
                      <option value="Martinique">
                        Martinique
                      </option>
                      <option value="Mauritius">
                        Mauritius
                      </option>
                      <option value="Malawi">
                        Malawi
                      </option>
                      <option value="Malaysia">
                        Malaysia
                      </option>
                      <option value="Mayotte">
                        Mayotte
                      </option>
                      <option value="Namibia">
                        Namibia
                      </option>
                      <option value="New Caledonia">
                        New Caledonia
                      </option>
                      <option value="Niger">
                        Niger
                      </option>
                      <option value="Norfolk Island">
                        Norfolk Island
                      </option>
                      <option value="Nigeria">
                        Nigeria
                      </option>
                      <option value="Nicaragua">
                        Nicaragua
                      </option>
                      <option value="Niue">
                        Niue
                      </option>
                      <option value="Netherlands">
                        Netherlands
                      </option>
                      <option value="Norway">
                        Norway
                      </option>
                      <option value="Nepal">
                        Nepal
                      </option>
                      <option value="Nauru">
                        Nauru
                      </option>
                      <option value="New Zealand">
                        New Zealand
                      </option>
                      <option value="Oman">
                        Oman
                      </option>
                      <option value="Pakistan">
                        Pakistan
                      </option>
                      <option value="Panama">
                        Panama
                      </option>
                      <option value="Pitcairn">
                        Pitcairn
                      </option>
                      <option value="Peru">
                        Peru
                      </option>
                      <option value="Philippines">
                        Philippines
                      </option>
                      <option value="Palau">
                        Palau
                      </option>
                      <option value="Papua New Guinea">
                        Papua New Guinea
                      </option>
                      <option value="Poland">
                        Poland
                      </option>
                      <option value="Puerto Rico">
                        Puerto Rico
                      </option>
                      <option value="Korea (Democratic People Republic of)">
                        Korea (Democratic People Republic of)
                      </option>
                      <option value="Portugal">
                        Portugal
                      </option>
                      <option value="Paraguay">
                        Paraguay
                      </option>
                      <option value="Palestine~ wv_tbl_countries of">
                        Palestine~ wv_tbl_countries of
                      </option>
                      <option value="French Polynesia">
                        French Polynesia
                      </option>
                      <option value="Qatar">
                        Qatar
                      </option>
                      <option value="Reunion">
                        Reunion
                      </option>
                      <option value="Romania">
                        Romania
                      </option>
                      <option value="Russian Federation">
                        Russian Federation
                      </option>
                      <option value="Rwanda">
                        Rwanda
                      </option>
                      <option value="Saudi Arabia">
                        Saudi Arabia
                      </option>
                      <option value="Sudan">
                        Sudan
                      </option>
                      <option value="Senegal">
                        Senegal
                      </option>
                      <option value="Singapore">
                        Singapore
                      </option>
                      <option value="South Georgia and the South Sandwich Islands">
                        South Georgia and the South Sandwich Islands
                      </option>
                      <option value="Saint Helena~ Ascension and Tristan da Cunha">
                        Saint Helena~ Ascension and Tristan da Cunha
                      </option>
                      <option value="Svalbard and Jan Mayen">
                        Svalbard and Jan Mayen
                      </option>
                      <option value="Solomon Islands">
                        Solomon Islands
                      </option>
                      <option value="Sierra Leone">
                        Sierra Leone
                      </option>
                      <option value="El Salvador">
                        El Salvador
                      </option>
                      <option value="San Marino">
                        San Marino
                      </option>
                      <option value="Somalia">
                        Somalia
                      </option>
                      <option value="Saint Pierre and Miquelon">
                        Saint Pierre and Miquelon
                      </option>
                      <option value="Serbia">
                        Serbia
                      </option>
                      <option value="South Sudan">
                        South Sudan
                      </option>
                      <option value="Sao Tome and Principe">
                        Sao Tome and Principe
                      </option>
                      <option value="Suriname">
                        Suriname
                      </option>
                      <option value="Slovakia">
                        Slovakia
                      </option>
                      <option value="Slovenia">
                        Slovenia
                      </option>
                      <option value="Sweden">
                        Sweden
                      </option>
                      <option value="Swaziland">
                        Swaziland
                      </option>
                      <option value="Sint Maarten (Dutch part)">
                        Sint Maarten (Dutch part)
                      </option>
                      <option value="Seychelles">
                        Seychelles
                      </option>
                      <option value="Syrian Arab Republic">
                        Syrian Arab Republic
                      </option>
                      <option value="Turks and Caicos Islands">
                        Turks and Caicos Islands
                      </option>
                      <option value="Chad">
                        Chad
                      </option>
                      <option value="Togo">
                        Togo
                      </option>
                      <option value="Thailand">
                        Thailand
                      </option>
                      <option value="Tajikistan">
                        Tajikistan
                      </option>
                      <option value="Tokelau">
                        Tokelau
                      </option>
                      <option value="Turkmenistan">
                        Turkmenistan
                      </option>
                      <option value="Timor~Leste">
                        Timor~Leste
                      </option>
                      <option value="Tonga">
                        Tonga
                      </option>
                      <option value="Trinidad and Tobago">
                        Trinidad and Tobago
                      </option>
                      <option value="Tunisia">
                        Tunisia
                      </option>
                      <option value="Turkey">
                        Turkey
                      </option>
                      <option value="Tuvalu">
                        Tuvalu
                      </option>
                      <option value="Taiwan~ Province of China">
                        Taiwan~ Province of China
                      </option>
                      <option value="Tanzania~ United Republic of">
                        Tanzania~ United Republic of
                      </option>
                      <option value="Uganda">
                        Uganda
                      </option>
                      <option value="Ukraine">
                        Ukraine
                      </option>
                      <option value="United wv_tbl_countriess Minor Outlying Islands">
                        United wv_tbl_countriess Minor Outlying Islands
                      </option>
                      <option value="Uruguay">
                        Uruguay
                      </option>
                      <option value="United wv_tbl_countriess of America">
                        United wv_tbl_countriess of America
                      </option>
                      <option value="Uzbekistan">
                        Uzbekistan
                      </option>
                      <option value="Holy See">
                        Holy See
                      </option>
                      <option value="Saint Vincent and the Grenadines">
                        Saint Vincent and the Grenadines
                      </option>
                      <option value="Venezuela (Bolivarian Republic of)">
                        Venezuela (Bolivarian Republic of)
                      </option>
                      <option value="Virgin Islands (British)">
                        Virgin Islands (British)
                      </option>
                      <option value="Virgin Islands (US)">
                        Virgin Islands (US)
                      </option>
                      <option value="Viet Nam">
                        Viet Nam
                      </option>
                      <option value="Vanuatu">
                        Vanuatu
                      </option>
                      <option value="Wallis and Futuna">
                        Wallis and Futuna
                      </option>
                      <option value="Samoa">
                        Samoa
                      </option>
                      <option value="Yemen">
                        Yemen
                      </option>
                      <option value="South Africa">
                        South Africa
                      </option>
                      <option value="Zambia">
                        Zambia
                      </option>
                      <option value="Zimbabwe">
                        Zimbabwe
                      </option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="display:none;">
        <div class="col-lg-12">
          <div class="ibox float-e-margins">
            <div class="ibox-content">
              <div class="row">
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <button class="btn btn-danger btn-w-m" id="btnCancel" onclick="location.href='http://154.0.174.145:800/wvfinal/donate/'" type="button">Cancel</button> 
                    <button class="btn btn-primary btn-w-m pull-right" id="btnSave" type="submit">Donate</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<?php get_footer(); ?>