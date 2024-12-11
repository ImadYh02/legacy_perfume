<div>
    {{-- <nav class="w-full flex items-center justify-between h-[65px] bg-black" aria-label="Global">
        ===== Logo Brand =====
        <a class="text-xl font-semibold text-white mx-auto" href="/" wire:navigate>Brand</a>
    </nav> --}}
    
    <section class="py-8 bg-[#eee]">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h1 class="text-3xl font-bold mb-8 text-center">Checkout</h1>
        
            <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12 xl:gap-16">
                {{-- ===== Delivery Detail ===== --}}
                <div class="min-w-0 flex-1 space-y-8">
                  {{-- ===== Delivery Form ===== --}}
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">
                            Delivery Details
                        </h2>
                
                        <form wire:submit.prevent="placeOrder" class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            {{-- ===== First Name ===== --}}
                            <div class="max-w-sm space-y-4">
                                <div>
                                    <label for="hs-validation-name-error" class="block text-sm font-medium mb-2">First Name</label>
                                    <div class="relative">
                                        <input wire:model="first_name" type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="py-3 px-4 block w-full rounded-full border-red-500 text-sm focus:border-red-500 focus:ring-red-500" ="" aria-describedby="hs-validation-name-error-helper">
                                        @error('first_name')
                                            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('first_name')
                                        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
    
                            {{-- ===== Last Name ===== --}}
                            <div class="max-w-sm space-y-4">
                                <div>
                                    <label for="hs-validation-name-error" class="block text-sm font-medium mb-2">Last Name</label>
                                    <div class="relative">
                                        <input wire:model="last_name" type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="py-3 px-4 block w-full rounded-full border-red-500 text-sm focus:border-red-500 focus:ring-red-500" ="" aria-describedby="hs-validation-name-error-helper">
                                        @error('last_name')
                                            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('last_name')
                                        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            
                            {{-- ===== Country ===== --}}
                            <div class="max-w-sm space-y-4">
                                <div>
                                    <label for="hs-validation-name-error" class="block text-sm font-medium mb-2">Country</label>
                                    <div class="relative">
                                        <!-- All countries -->
                                        <select wire:model="country" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" autocomplete="country" id="country" name="country">
                                            <option value="">country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua & Barbuda</option>
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
                                            <option value="Bolivia (Plurinational State of)">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cabo Verde">Cape Verde</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Caribbean Netherlands">Caribbean Netherlands</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo - Brazzaville</option>
                                            <option value="Congo, Democratic Republic of the">Congo - Kinshasa</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaçao">Curaçao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czechia</option>
                                            <option value="Côte d'Ivoire">Côte d’Ivoire</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Eswatini (Swaziland)">Eswatini</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Islas Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard & McDonald Islands</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, North">North Korea</option>
                                            <option value="Korea, South">South Korea</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia North">North Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
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
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Curaçao</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn Islands">Pitcairn Islands</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Réunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthelemy">St. Barthélemy</option>
                                            <option value="Saint Helena">St. Helena</option>
                                            <option value="Saint Kitts and Nevis">St. Kitts & Nevis</option>
                                            <option value="Saint Lucia">St. Lucia</option>
                                            <option value="Saint Martin">St. Martin</option>
                                            <option value="Saint Pierre and Miquelon">St. Pierre & Miquelon</option>
                                            <option value="Saint Vincent and the Grenadines">St. Vincent & Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">São Tomé & Príncipe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Serbia and Montenegro">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten">Sint Maarten</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia & South Sandwich Islands</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard & Jan Mayen</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey (Türkiye)">Türkiye</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks & Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="U.S. Outlying Islands">U.S. Outlying Islands</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City Holy See">Vatican City</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands, British">British Virgin Islands</option>
                                            <option value="Virgin Islands, U.S">U.S. Virgin Islands</option>
                                            <option value="Wallis and Futuna">Wallis & Futuna</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        <!-- total - 251 -->

                                        {{-- <input wire:model="country" type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="py-3 px-4 block w-full rounded-full border-red-500 text-sm focus:border-red-500 focus:ring-red-500" ="" aria-describedby="hs-validation-name-error-helper"> --}}
                                        @error('country')
                                        <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                            <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12"></line>
                                                <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                            </svg>
                                        </div>
                                    @enderror
                                </div>
                                @error('country')
                                    <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper"> {{ $message }} </p>
                                @enderror
                                </div>
                            </div>
                  
                            {{-- ===== City ===== --}}
                            <div class="max-w-sm space-y-4">
                                <div>
                                    <label for="hs-validation-name-error" class="block text-sm font-medium mb-2">City</label>
                                    <div class="relative">
                                        <input wire:model="city" type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="py-3 px-4 block w-full rounded-full border-red-500 text-sm focus:border-red-500 focus:ring-red-500" ="" aria-describedby="hs-validation-name-error-helper">
                                        @error('city')
                                            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('city')
                                        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            
                            {{-- ===== Phone Number ===== --}}
                            <div class="max-w-sm space-y-4">
                                <div>
                                    <label for="hs-validation-name-error" class="block text-sm font-medium mb-2">Phone Number</label>
                                    <div class="relative">
                                        <input wire:model="phone_number" type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="py-3 px-4 block w-full rounded-full border-red-500 text-sm focus:border-red-500 focus:ring-red-500" ="" aria-describedby="hs-validation-name-error-helper">
                                        @error('phone_number')
                                            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('phone_number')
                                        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                          
                            {{-- ===== Email ===== --}}
                            <div class="max-w-sm space-y-4">
                                <div>
                                    <label for="hs-validation-name-error" class="block text-sm font-medium mb-2">Email</label>
                                    <div class="relative">
                                        <input wire:model="email" type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="py-3 px-4 block w-full rounded-full border-red-500 text-sm focus:border-red-500 focus:ring-red-500" ="" aria-describedby="hs-validation-name-error-helper">
                                        @error('email')
                                            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('email')
                                        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                          
                            {{-- ===== Address ===== --}}
                            <div class="max-w-sm space-y-4">
                                <div class="col-span-2">
                                    <div>
                                        <label for="hs-validation-name-error" class="block text-sm font-medium mb-2">Address</label>
                                        <div class="relative">
                                            <textarea wire:model="address" id="hs-validation-name-error" class="py-3 px-4 block w-full border-red-500 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none" rows="3" placeholder="Say hi..." aria-describedby="hs-validation-name-error-helper" =""></textarea>
                                            @error('address')
                                            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('address')
                                        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper"> {{ $message }} </p>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                          
                            {{-- ===== Note ===== --}}
                            <div class="max-w-sm space-y-4">
                                <div class="col-span-2">
                                    <div>
                                        <label for="hs-validation-name-error" class="block text-sm font-medium mb-2">Note (Not Reuquired)</label>
                                        <div class="relative">
                                            <textarea wire:model="note" id="hs-validation-name-error" class="py-3 px-4 block w-full border-red-500 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none" rows="3" placeholder="Say hi..." aria-describedby="hs-validation-name-error-helper"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        {{-- ===== Payment ===== --}}
                        <div class="lg:flex gap-32">
                            <div class="space-y-2">
                                <h3 class="text-xl font-semibold text-gray-900">
                                    Payment
                                </h3>
                            
                                <div class="grid grid-cols-1 gap-4">
                                    <div class="rounded-lg border border-gray-200 bg-white p-4 ps-4">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input checked id="pay-on-delivery" aria-describedby="pay-on-delivery-text" type="radio" name="payment-method" value="" class="h-4 w-4 border-gray-300 bg-white text-primary-600 focus:ring-2 focus:ring-primary-600" />
                                            </div>
                                
                                            <div class="ms-4 text-sm">
                                                <label for="pay-on-delivery" class="font-medium leading-none text-gray-900">
                                                    Payment on delivery
                                                </label>
                                                <p id="pay-on-delivery-text" class="mt-1 text-xs font-normal text-gray-500">
                                                    +$15 payment processing fee
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            {{-- ===== Delivery Methds ===== --}}
                            <div class="space-y-2">
                                <h3 class="text-xl font-semibold text-gray-900">
                                    Delivery Methods
                                </h3>
                        
                                <div class="grid grid-cols-1 gap-4">
                                    <div class="rounded-lg border border-gray-200 bg-white p-4 ps-4">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input id="dhl" aria-describedby="dhl-text" type="radio" name="delivery-method" value="" class="h-4 w-4 border-gray-300 bg-white text-primary-600 focus:ring-2 focus:ring-primary-600" checked />
                                            </div>
                                
                                            <div class="ms-4 text-sm">
                                                <label for="dhl" class="font-medium leading-none text-gray-900">
                                                    $15 - DHL Fast Delivery
                                                </label>
                                                <p id="dhl-text" class="mt-1 text-xs font-normal text-gray-500">
                                                    Get it by Tommorow
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    {{-- ===== Order Total ===== --}}
                    <div class="mt-6 w-full bg-white p-4 rounded-xl space-y-6 sm:mt-8 lg:mt-0 lg:max-w-xs xl:max-w-md">
                        <div class="flow-root">
                            <div class="space-y-4 mb-4">
                                <div class="border-b pb-4">
                                    <h3 class="font-semibold mb-2">Product Details</h3>
                                    <ul class="space-y-2">
                                        @foreach ($cart_items as $ci)
                                            <li wire:key="{{ $ci['product_id'] }}" class="flex items-center space-x-4">
                                                <!-- Product Image -->
                                                <img src="{{ url('storage', $ci['image']) }}" alt="{{ $ci['name'] }}" class="w-16 h-16 object-cover rounded-md">
                                                
                                                <!-- Product Info -->
                                                <div class="flex-1">
                                                    <span class="font-medium block"> {{ $ci['name'] }} </span>
                                                    <span class="block text-sm text-gray-500">Quantity: {{ $ci['quantity'] }}</span>
                                                </div>
                    
                                                <!-- Product Total Price -->
                                                <span> {{ Number::currency($ci['total_amount'], 'MAD') }} </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span>Subtotal</span>
                                        <span> {{ Number::currency($grand_total, 'MAD') }} </span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Shipping</span>
                                        <span> {{ Number::currency(0, 'MAD') }} </span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Taxes</span>
                                        <span> {{ Number::currency(0, 'MAD') }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-between font-semibold text-lg">
                                    <span>Total</span>
                                    <span> {{ Number::currency($grand_total, 'MAD') }} </span>
                                </div>
                            </div>
                        </div>
                    
                        {{-- ===== Proceed to Payment Button ===== --}}
                        <div class="space-y-3">
                            {{-- <a href="/checkout/order-received" type="submit" class="flex w-full items-center justify-center bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">
                                Proceed to Payment
                            </a> --}}

                            <button type="submit" class="flex w-full items-center justify-center bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">
                                <span wire:loading.remove>Proceed to Payment</span>
                                <span wire:loading>Processing ...</span>
                            </button>
                    
                            <p class="text-sm font-normal text-gray-500">
                                One or more items in your cart require an account.
                                <a href="#" title="" class="font-medium text-primary-700 underline hover:no-underline">
                                    Sign in or create an account now.
                                </a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>