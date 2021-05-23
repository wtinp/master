<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('World Telehealth Initiative') }}
        </h2>
    </x-slot>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Registration Form - World Telehealth Initiative</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Registration Form</title>
    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>
<style>
    section{
        padding-top:100px;
    }
    .form-section{
        padding-left:15px;
        display:none;
    }
    .form-section.current{
        display: inherit;
    }
    .btn-info, .btn-btn-success{
        margin-top:10px;
    }
    .parsley-errors-list{
        margin: 2px 0 3px;
        padding: 0;
        list-style-type: none;
        color:red;
    }
</style>
</head>
<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header text-white bg-info">
                            <h5>Provider Registration Form</h5>
                        </div>
                        <div class="card-body">
                            <form id="providerForm" class="providerForm" method="POST" action="{{route('providerRequest.providerRequestPost')}}">
                                @csrf
                                <div class="form-section">
                                    <label for="txtTitle"><strong>*Title:</strong></label>
                                        <select class="form-control" placeholder= "Title" id="txtTitle" name="txtTitle">
                                            <option value="Dr.">Dr.</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mr.">Ms.</option>
                                            <option value="Mrs.">Mrs.</option>
                                        </select>                            

                                    <label for="txtFn"><strong>*First Name:</strong>
                                    <input type="text" class="form-control" placeholder= "First Name" required id="txtFn" name="txtFn">                                   
                                    </label>

                                    <label for="txtMn"><strong>Middle Name:</strong>
                                    <input type="text" class="form-control" placeholder= "Middle Name" id="txtMn" name="txtMn">                                    
                                    </label>
                    
                                    <label for="txtLn"><strong>*Last Name:</strong>
                                    <input type="text" class="form-control" placeholder= "Last Name" required id="txtLn" name="txtLn">
                                    </label>
                                    

                                    <label for="txtPe"><strong>*Primary Email:</strong>
                                    <input type="text" class="form-control" placeholder= "Primary Email" required id="txtPe" name="txtPe">
                                    </label>
                                    
                    
                                    <label for="Secondary Email"><strong>Secondary Email:</strong>
                                    <input type="text" class="form-control" placeholder= "Secondary Email" id="txtSe" name="txtSe">
                                    </label>
                                    
                    
                                    <label for="txtPp"><strong>*Primary Phone:</strong>
                                    <input type="text" class="form-control" placeholder= "eg. +1-XXX-XXX-XXXX" required id="txtPp" name="txtPp">
                                    </label>
                                    
                    
                                    <label for="txtSn"><strong>Secondary Phone:</strong>
                                    <input type="text" class="form-control" placeholder= "eg. +1-XXX-XXX-XXXX" id="txtSn" name="txtSn">
                                    </label>
                                    
                    
                                    <label for="txtWa"><strong>*Whatsapp:</strong>
                                    <input type="text" class="form-control" placeholder= "Mobile No. Used on Whatsapp" id="txtWa" name="txtWa">
                                    </label>
                                    
                    
                                    <label for="txtAo"><strong>*Address(1):</strong>
                                    <input type="text" class="form-control" placeholder= "Street / Lane" required id="txtAo" name="txtAo">
                                    </label>
                                    
                    
                                    <label for="txtAt"><strong>Address(2):</strong>
                                    <input type="text" class="form-control" placeholder= "Area / Locality" id="txtAt" name="txtAt">
                                    </label>
                                    
                    
                                    <label for="txtCity"><strong>*City:</strong>
                                    <input type="text" class="form-control" placeholder= "City" required id="txtCity" name="txtCity">
                                    </label>
                                    
                    
                                    <label for="txtState"><strong>*State:</strong>
                                    <input type="text" class="form-control" placeholder= "State" required id="txtState" name="txtState">
                                    </label>
                                    
                    
                                    <label for="country"><strong>*Country:</strong>
                                    <select class="form-control" id="country" name="country"></label>
                                        <option value="Default">--Make a selection-- </option>
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
                                        <option value="Korea South">Korea South</option>
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
                                    </label>
                                    

                                    <label for="txtZc"><strong>Zip Code(US):</strong>
                                    <input type="text" class="form-control" placeholder= "Zip Code(US)" id="txtZc" name="txtZc"></label>
                                    

                                    <label for="txtPc"><strong>Postal Code(Non-US):</strong>
                                    <input type="text" class="form-control" placeholder= "Postal Code(Non US)" id="txtPc" name="txtPc"></label>
                                    
                                </div>

                                <div class="form-section">
                                    <label for="txtCd"><strong>*Clinical Designation:</strong></label> 
                                    <select class="form-control" placeholder= "Clinical Designation" id="txtCd" name="txtCd">
                                        <option value="Physician">Physician</option>
                                        <option value="Dentistry">Dentist</option>
                                        <option value="Physician’s Assistant">Physician’s Assistant</option>
                                        <option value="Registered Nurse">Registered Nurse</option>                
                                        <option value="Dietician">Dietician</option>
                                        <option value="Certified Therapist">Certified Therapist</option>
                                        <option value="Licensed Professional Counselor">Licensed Professional Counselor</option>
                                        <option value="Clinical Social Worker">Clinical Social Worker</option>
                                        <option value="Midwife">Midwife</option>
                                        <option value="Community Health Worker">Community Health Worker</option>
                                        <option value="Other">Other(Not Listed)</option>
                                    </select>
                                                                   
                                    
                            
                                    <label for="txtSpcl1"><strong>*Specialities: </strong></label>
                                    <select class="form-control" placeholder= "Specialities" id="txtSpcl1" name="txtSpcl1">
                                        <option value="Default">--Make a selection-- </option>
                                        <option value="Allergy(GenMed)">Allergy(GenMed)</option>
                                        <option value="Anesthesiology(GenMed)">Anesthesiology(GenMed)</option>
                                        <option value="CardioThoracic(GenMed)">CardioThoracic(GenMed)</option>
                                        <option value="Chiropractic(GenMed)">Chiropractic(GenMed)</option>
                                        <option value="Counseling(Behavhealth)">Counseling(Behavhealth)</option>
                                        <option value="Dermatology(GenMed)">Dermatology(GenMed)</option>
                                        <option value="Dietitian(GenMed)">Dietitian(Nutrition)</option>
                                        <option value="ER(GenMed)">ER(GenMed)</option>
                                        <option value="Internal Medicine(GenMed)">Internal Medicine(GenMed)</option>
                                        <option value="OBGyn(GenMed)">OBGyn(GenMed)</option>
                                        <option value="OccHealth(GenMed)">OccHealth(GenMed)</option>
                                        <option value="Opth(GenMed)">Opth(GenMed)</option>
                                        <option value="Orthopedics(GenMed)">Orthopedics(GenMed)</option>
                                        <option value="Otolaryngology(GenMed)">Otolaryngology(GenMed)</option>
                                        <option value="Pain Mgmt(GenMed)">Pain Mgmt(GenMed)</option>
                                        <option value="Pathology(GenMed)">Pathology(GenMed)</option>
                                        <option value="Pediatrics(GenMed)">Pediatrics(GenMed)</option>
                                        <option value="Physical Med(GenMed)">Physical Med(GenMed)</option>
                                        <option value="Plastics(GenMed)">Plastics(GenMed)</option>
                                        <option value="Psychiatry(Behavhealth)">Psychiatry(Behavhealth)</option>
                                        <option value="Psychology(Behavhealth)">Psychology(Behavhealth)</option>
                                        <option value="Radiology(GenMed)">Radiology(GenMed)</option>
                                        <option value="Surgery(GenMed)">Surgery(GenMed)</option>
                                    </select>
                                    
                                    
                                    <label for="txtBc"><strong>Board Certification(1):</strong>
                                    <select class="form-control"  placeholder="Board Certification"  id="txtBc" name="txtBc">
                                        <option value="Default">--Make a selection-- </option>
                                        <option value="Allergy(GenMed)">Allergy(GenMed)</option>
                                        <option value="Anesthesiology(GenMed)">Anesthesiology(GenMed)</option>
                                        <option value="CardioThoracic(GenMed)">CardioThoracic(GenMed)</option>
                                        <option value="Chiropractic(GenMed)">Chiropractic(GenMed)</option>
                                        <option value="Counseling(Behavhealth)">Counseling(Behavhealth)</option>
                                        <option value="Dermatology(GenMed)">Dermatology(GenMed)</option>
                                        <option value="Dietitian(GenMed)">Dietitian(Nutrition)</option>
                                        <option value="ER(GenMed)">ER(GenMed)</option>
                                        <option value="Internal Medicine(GenMed)">Internal Medicine(GenMed)</option>
                                        <option value="OBGyn(GenMed)">OBGyn(GenMed)</option>
                                        <option value="OccHealth(GenMed)">OccHealth(GenMed)</option>
                                        <option value="Opth(GenMed)">Opth(GenMed)</option>
                                        <option value="Orthopedics(GenMed)">Orthopedics(GenMed)</option>
                                        <option value="Otolaryngology(GenMed)">Otolaryngology(GenMed)</option>
                                        <option value="Pain Mgmt(GenMed)">Pain Mgmt(GenMed)</option>
                                        <option value="Pathology(GenMed)">Pathology(GenMed)</option>
                                        <option value="Pediatrics(GenMed)">Pediatrics(GenMed)</option>
                                        <option value="Physical Med(GenMed)">Physical Med(GenMed)</option>
                                        <option value="Plastics(GenMed)">Plastics(GenMed)</option>
                                        <option value="Psychiatry(Behavhealth)">Psychiatry(Behavhealth)</option>
                                        <option value="Psychology(Behavhealth)">Psychology(Behavhealth)</option>
                                        <option value="Radiology(GenMed)">Radiology(GenMed)</option>
                                        <option value="Surgery(GenMed)">Surgery(GenMed)</option>
                                        </select>
                                    </label>
                                    
                                            
                                    <label for="bce"><strong>Board Certifications Expiration(1):</strong>
                                        <input class="form-control" type="date" id="dateBce" name="dateBce1">
                                    </label>
                                    

                                    <label for="txtBc2"><strong>Board Certification(2):</strong>
                                        <select class="form-control"  placeholder= "Board Certification" id="txtBc2" name="txtBc2">
                                        <option value="Default">--Make a selection-- </option>
                                        <option value="Allergy(GenMed)">Allergy(GenMed)</option>
                                        <option value="Anesthesiology(GenMed)">Anesthesiology(GenMed)</option>
                                        <option value="CardioThoracic(GenMed)">CardioThoracic(GenMed)</option>
                                        <option value="Chiropractic(GenMed)">Chiropractic(GenMed)</option>
                                        <option value="Counseling(Behavhealth)">Counseling(Behavhealth)</option>
                                        <option value="Dermatology(GenMed)">Dermatology(GenMed)</option>
                                        <option value="Dietitian(GenMed)">Dietitian(Nutrition)</option>
                                        <option value="ER(GenMed)">ER(GenMed)</option>
                                        <option value="Internal Medicine(GenMed)">Internal Medicine(GenMed)</option>
                                        <option value="OBGyn(GenMed)">OBGyn(GenMed)</option>
                                        <option value="OccHealth(GenMed)">OccHealth(GenMed)</option>
                                        <option value="Opth(GenMed)">Opth(GenMed)</option>
                                        <option value="Orthopedics(GenMed)">Orthopedics(GenMed)</option>
                                        <option value="Otolaryngology(GenMed)">Otolaryngology(GenMed)</option>
                                        <option value="Pain Mgmt(GenMed)">Pain Mgmt(GenMed)</option>
                                        <option value="Pathology(GenMed)">Pathology(GenMed)</option>
                                        <option value="Pediatrics(GenMed)">Pediatrics(GenMed)</option>
                                        <option value="Physical Med(GenMed)">Physical Med(GenMed)</option>
                                        <option value="Plastics(GenMed)">Plastics(GenMed)</option>
                                        <option value="Psychiatry(Behavhealth)">Psychiatry(Behavhealth)</option>
                                        <option value="Psychology(Behavhealth)">Psychology(Behavhealth)</option>
                                        <option value="Radiology(GenMed)">Radiology(GenMed)</option>
                                        <option value="Surgery(GenMed)">Surgery(GenMed)</option>
                                        </select>
                                    </label>
                                    

                                    <label><strong>Board Certifications Expiration(2):</strong>
                                        <input class="form-control" type="date" id="dateBce" name="dateBce2">
                                    </label>
                                    

                                    <label for="txtBc3"><strong>Board Certification(3):</strong>
                                        <select class="form-control"  placeholder= "Board Certifications" id="txtBc3" name="txtBc3">
                                        <option value="Default">--Make a selection-- </option>
                                        <option value="Allergy(GenMed)">Allergy(GenMed)</option>
                                        <option value="Anesthesiology(GenMed)">Anesthesiology(GenMed)</option>
                                        <option value="CardioThoracic(GenMed)">CardioThoracic(GenMed)</option>
                                        <option value="Chiropractic(GenMed)">Chiropractic(GenMed)</option>
                                        <option value="Counseling(Behavhealth)">Counseling(Behavhealth)</option>
                                        <option value="Dermatology(GenMed)">Dermatology(GenMed)</option>
                                        <option value="Dietitian(GenMed)">Dietitian(Nutrition)</option>
                                        <option value="ER(GenMed)">ER(GenMed)</option>
                                        <option value="Internal Medicine(GenMed)">Internal Medicine(GenMed)</option>
                                        <option value="OBGyn(GenMed)">OBGyn(GenMed)</option>
                                        <option value="OccHealth(GenMed)">OccHealth(GenMed)</option>
                                        <option value="Opth(GenMed)">Opth(GenMed)</option>
                                        <option value="Orthopedics(GenMed)">Orthopedics(GenMed)</option>
                                        <option value="Otolaryngology(GenMed)">Otolaryngology(GenMed)</option>
                                        <option value="Pain Mgmt(GenMed)">Pain Mgmt(GenMed)</option>
                                        <option value="Pathology(GenMed)">Pathology(GenMed)</option>
                                        <option value="Pediatrics(GenMed)">Pediatrics(GenMed)</option>
                                        <option value="Physical Med(GenMed)">Physical Med(GenMed)</option>
                                        <option value="Plastics(GenMed)">Plastics(GenMed)</option>
                                        <option value="Psychiatry(Behavhealth)">Psychiatry(Behavhealth)</option>
                                        <option value="Psychology(Behavhealth)">Psychology(Behavhealth)</option>
                                        <option value="Radiology(GenMed)">Radiology(GenMed)</option>
                                        <option value="Surgery(GenMed)">Surgery(GenMed)</option>
                                    </select>
                                    </label>
                                    

                                    <label for="bce"><strong>Board Certifications Expiration(3):</strong>
                                        <input class="form-control" type="date" id="dateBce" name="dateBce3">
                                    </label>
                                    <br>
                                    

                                    <label for="txtBc4"><strong>Other Board Certifications (Please use commas to seperate):</strong></label>
                                    <input type="text" class="form-control" placeholder= "Board Certifications" id="txtBc4" name="txtBc4">
                                    <br>
                                    
                                    

                                    <label for="txtEmp"><strong>Employer:</strong></label>
                                    <input type="text" class="form-control" placeholder= "Employer" id="txtEmp" name="txtEmp">
                                                        

                                    <label for="txtHp"><strong>Hospital Priviliges:</strong>
                                        <input type="text" class="form-control" placeholder= "Hospital Privileges" required id="txtHp" name="txtHp">
                                    </label>
                                    

                                    <label for="txtOp"><strong>Other Priviliges:</strong>
                                        <input type="text" class="form-control" placeholder= "Other Privilege(s)" id="txtOp" name="txtOp">
                                    </label>
                                    

                                    <label for="txtLan"><strong>Languages spoken (Please use commas for multiple):</strong>
                                        <input type="text" class="form-control" placeholder= "Languages" required id="txtLan" name="txtLan">
                                    </label>
                                    

                            
                                    <label for="txtGen"><strong>Gender:</strong>
                                    <select class="form-control" placeholder= "Make a selection">
                                                <option value="Male/Man">Male/Man</option>
                                                <option value="Female/Woman">Female/Woman</option>
                                                <option value="TransMale/TransMan">TransMale/TransMan</option>
                                                <option value="TransFemale/TransWoman">TransFemale/TransWoman</option>                                        
                                                <option value="Genderqueer/Gender nonconfroming">Genderqueer/Gender nonconfroming</option>
                                                <option value="Something Else">Something Else</option>
                                                <option value="Prefer Not to say">Prefer Not to say</option>
                                            </select>                            
                                    <i>Why do we collect this information? Some countries may have Gender restrictions in special cases.</i>
                                    </label>
                                                             

                                    <label for="txtEth"><strong>Ethnicity:</strong>
                                        <input type="text" class="form-control" placeholder= "Ethnicity" required id="txtEth" name="txtEth">
                                    <i>Why do we collect this information? Some countries may have Ethnicity restrictions in special cases.</i>
                                    </label>
                                    

                                    <label for="txtCoi"><strong>Countries of Interest:</strong>
                                        <p><i>You may <strong>control-click (Windows)</strong> or <strong>command-click (Mac)</strong> to select more than one.</i></p>
                                        <select class="form-control" placeholder= "Countries of Interest:" required id="txtCoi" name="txtCoi" multiple>
                                        <option value="United States of America">United States of America</option>
                                        <option value="India">India</option>
                                        <option value="Bangladesh">Bangladesh</option> 
                                        <option value="Malawi">Malawi</option>
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
                                        <option value="Korea South">Korea South</option>
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
                                    </label>
                                    

                                    <label for="txtAd"><strong>Available Days:</strong>
                                        <p><i>You may <strong>control-click (Windows)</strong> or <strong>command-click (Mac)</strong> to select more than one.</i></p>
                                        <select class="form-control" placeholder= "Available Days" required id="txtAd" name="txtAd" multiple>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </label>
                                    

                                    <label for="txtAh"><strong>Available Hours:</strong>
                                        <p>You may <strong>control-click (Windows)</strong> or <strong>command-click (Mac)</strong> to select more than one.</p>
                                        <select class="form-control" placeholder= "Available Hours"required txt="txtAh" name="txtAh" multiple>
                                            <option value="00:00 - 01:00">00:00 - 01:00</option>
                                            <option value="01:00 - 02:00">01:00 - 02:00</option>
                                            <option value="02:00 - 03:00">02:00 - 03:00</option>
                                            <option value="03:00 - 04:00">03:00 - 04:00</option>
                                            <option value="04:00 - 05:00">04:00 - 05:00</option>
                                            <option value="05:00 - 06:00">05:00 - 06:00</option>
                                            <option value="06:00 - 07:00">06:00 - 07:00</option>
                                            <option value="07:00 - 08:00">07:00 - 08:00</option>
                                            <option value="08:00 - 09:00">08:00 - 09:00</option>
                                            <option value="09:00 - 10:00">09:00 - 10:00</option>
                                            <option value="10:00 - 11:00">10:00 - 11:00</option>
                                            <option value="11:00 - 12:00">11:00 - 12:00</option>
                                            <option value="12:00 - 13:00">12:00 - 13:00</option>
                                            <option value="13:00 - 14:00">13:00 - 14:00</option>                            
                                            <option value="14:00 - 15:00">14:00 - 15:00</option>
                                            <option value="15:00 - 16:00">15:00 - 16:00</option>
                                            <option value="16:00 - 17:00">16:00 - 17:00</option>
                                            <option value="17:00 - 18:00">17:00 - 18:00</option>
                                            <option value="18:00 - 19:00">18:00 - 19:00</option>
                                            <option value="19:00 - 20:00">19:00 - 20:00</option>
                                            <option value="20:00 - 21:00">20:00 - 21:00</option>
                                            <option value="21:00 - 22:00">21:00 - 22:00</option>                            
                                            <option value="22:00 - 23:00">22:00 - 23:00</option>
                                            <option value="23:00 - 00:00">23:00 - 00:00</option>
                                        </select>
                                    </label>
                                    

                                    <label for="txtOai"><strong>Any other Availability Information:</strong>
                                        <input type="text" class="form-control" placeholder= "Other Availability Information:" id="txtOai" name="txtOai">
                                    </label>
                                    
                                </div>

                                <div class="form-section">
                                    <label for="txtHow"><strong>How did you hear about us?</strong>
                                        <select class="form-control" placeholder= "How did you hear about us?" required id="txtHow" name="txtHow">
                                        <option value="Website">Website</option>
                                        <option value="Conference">Conference</option>
                                        <option value="Event">Event</option>
                                        <option value="Newsletter">Newsletter</option>
                                        <option value="Email campaign">Email campaign</option>
                                        <option value="Personal relationship (WTI Staff)">Personal relationship (WTI Staff)</option>
                                        <option value="Personal relationship (WTI Board Member)">Personal relationship (WTI Board Member)</option>
                                        <option value="Personal relationship (Teladoc Team)">Personal relationship (Teladoc Team)</option>
                                        <option value="Press">Press</option>
                                        </select>
                                    </label>
                                    

                                    <label for="txtContactMeth"><strong>Preferred method of contact:</strong>
                                        <select class="form-control" placeholder= "Preferred method of contact:" required id="txtContactMeth" name="txtHow">
                                        <option value="Phone">Phone</option>
                                        <option value="Email">Email</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                        </select>
                                    </label>
                                    

                                    <label for="txtComm"><strong>Other Comments:</strong>
                                        <input type="text" class ="form-control" placeholder= "Other Comments" id="txtComm" name="txtComm">
                                    </label>
                                    
                                </div>

                                <div class="form-navigation">
                                    <button type="button" class="previous btn btn-info float-left">Previous</button>
                                    <button type="button" class="next btn btn-info float-right">Next</button>
                                    <button type="submit" class="btn btn-success float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function(){
            var $sections = $('.form-section');

            function navigateTo(index){
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index>0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);
            }

            function curIndex()
            {
                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function(){
                navigateTo(curIndex()-1);
            });

            $('.form-navigation .next').click(function(){
                $('.providerForm').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function(){
                    navigateTo(curIndex()+1);
                });
            });

            $sections.each(function(index,section){
                $(section).find(':input').attr('data-parsley-group','block-'+index);
            });

            navigateTo(0);
        });
    </script>
<script>
    $("#providerForm").on('submit',function(e){
        e.preventDefault();

        let txtTitle = $("#txtTitle").val();
        let txtFn = $("#txtFn").val();
        let txtMn = $("#txtMn").val();
        let txtLn = $("#txtLn").val();
        let txtPe = $("#txtPe").val();
        let txtSe = $("#txtSe").val();
        let txtPp = $("#txtPp").val();
        let txtSn = $("#txtSn").val();
        let txtWa = $("#txtWa").val();
        let txtAo = $("#txtAo").val();
        let txtAt = $("#txtAt").val();
        let txtCity = $("#txtCity").val();
        let txtState = $("#txtState").val();
        let country = $("#country").val();
        let txtZc = $("#txtZc").val();
        let txtPc = $("#txtPc").val();
        let txtCd = $("#txtCd").val();
        let txtSpcl1 = $("#txtSpcl1").val();
        let txtBc = $("#txtBc").val();
        let dateBce1 = $("#dateBce1").val();
        let txtBc2 = $("#txtBc2").val();
        let dateBce2 = $("#dateBce2").val();
        let txtBc3 = $("#txtBc3").val();
        let dateBce3 = $("#dateBce3").val();
        let txtBc4 = $("#txtBc4").val();
        let txtEmp = $("#txtEmp").val();
        let txtHp = $("#txtHp").val();
        let txtOp = $("#txtOp").val();
        let txtLan = $("#txtLan").val();
        let txtGen = $("#txtGen").val();
        let txtEth = $("#txtEth").val();
        let txtCoi = $("#txtCoi").val();
        let txtAd = $("#txtAd").val();
        let txtAh = $("#txtAh").val();
        let txtOai = $("#txtOai").val();
        let txtHow = $("#txtHow").val();
        let txtContactMeth = $("#txtContactMeth").val();
        let txtComm = $("#txtComm").val();
        let _token = $("input[name=_token]").val();


        $.ajax({                
            url: "{{route('providerRequest.providerRequestPost')}}",
            type:"post",
            data:{
                "_token": "{{ csrf_token() }}",
                txtTitle:txtTitle,
                txtFn:txtFn,
                txtMn:txtMn,
                txtLn:txtLn,
                txtPe:txtPe,
                txtSe:txtSe,
                txtPp:txtPp,
                txtSn:txtSn,
                txtWa:txtWa,
                txtAo:txtAo,
                txtAt:txtAt,
                txtCity:txtCity,
                txtState:txtState,
                country:country,
                txtZc:txtZc,
                txtPc:txtPc,
                txtCd:txtCd,
                txtSpcl1:txtSpcl1,
                txtBc:txtBc,
                dateBce1:dateBce1,
                txtBc2:txtBc2,
                dateBce2:dateBce2,
                txtBc3:txtBc3,
                dateBce3:dateBce3,
                txtBc4:txtBc4,
                txtEmp:txtEmp,
                txtHp:txtHp,
                txtOp:txtOp,
                txtLan:txtLan,
                txtGen:txtGen,
                txtEth:txtEth,
                txtCoi:txtCoi,
                txtAd:txtAd,
                txtAh:txtAh,
                txtOai:txtOai,
                txtHow:txtHow,
                txtContactMeth:txtContactMeth,
                txtComm:txtComm                    
            },
            success:function(response)
            {
                if(response)
                {
                    $("#providerTable tbody").prepend('<tr><td>'+ response.txtTitle +'</td><td>'+ response.txtFn +'</td><td>'+ response.txtMn +'</td><td>'+ response.txtLn +'</td><td>'+ response.txtPe +'</td><td>'+ response.txtSe +'</td><td>'+ response.txtPp +'</td><td>'+ response.txtSn +'</td><td>'+ response.txtWa +'</td><td>'+ response.txtAo +'</td><td>'+ response.txtAt +'</td><td>'+ response.txtCity +'</td><td>'+ response.txtState +'</td><td>'+ response.country +'</td><td>'+ response.txtZc +'</td><td>'+ response.txtPc +'</td><td>'+ response.txtCd +'</td><td>'+ response.txtSpcl1 +'</td><td>'+ response.txtBc +'</td><td>'+ response.dateBce1 +'</td><td>'+ response.txtBc2 +'</td><td>'+ response.dateBce2 +'</td><td>'+ response.txtBc3 +'</td><td>'+ response.dateBce3 +'</td><td>'+ response.txtBc4 +'</td><td>'+ response.txtEmp +'</td><td>'+ response.txtHp +'</td><td>'+ response.txtOp +'</td><td>'+ response.txtLan +'</td><td>'+ response.txtGen +'</td><td>'+ response.txtEth +'</td><td>'+ response.txtCoi +'</td><td>'+ response.txtAd +'</td><td>'+ response.txtAh +'</td><td>'+ response.txtOai +'</td><td>'+ response.txtHow +'</td><td>'+ response.txtContactMeth +'</td><td>'+ response.txtComm +'</td></tr>');
                    $("#providerForm")[0].reset();
                    $("#providerModal").modal('hide');
                }
            }

        });
    });        
</script>
</body>
</html>
</x-app-layout>
