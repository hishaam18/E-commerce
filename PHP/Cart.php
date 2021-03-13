<?php
include('Common.php');

outputHeader("Cart");
?>

<!-- Header tag -->
<header>
    <!-- Navigation Bar -->
    <div class="navigationBar">
        <?php
        outputNavigationBar();
        ?>
    </div>
</header>

<!-- Cart content -->
<div class="cartContent">
    <!-- Tab section -->
    <div class="tab">
        <a href="javascript:void(0)" onclick="openContent(event, 'Cart');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">1. Shopping Cart</div>
        </a>
        <a>
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">2. Shipping Details</div>
        </a>
        <a>
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">3. Confirmation</div>
        </a>
    </div>

    <!-- Cart section when tab cart is clicked -->
    <div id="Cart" class="w3-container shop" style="display:none">
        <!-- Display product bought -->
        <div class="productBought">
            <p style="border-bottom: 6px solid #ccc !important">Shopping Cart</p>
            <!-- Display product details next to project bought -->
            <div class="productDetails">
                <img src="../Img/HBossWatch.png" width="400px" height="400px" alt="watchOne" align="left">
                <p>Hugo Boss Talent Watch 1513584</p>
                <p style="font-size: 22px">Hugo Boss Talent 1513584 is a practical and handsome Gents watch from Talent collection.
                    Case is made out of Stainless Steel, which stands for a high quality of the item while the dial colour is Black.
                    50 metres water resistancy will protect the watch and allows it to be submerged in water for periods, so can be used for swimming and fishing.
                    It is not reccomended for high impact water sports. The watch is shipped with an original box and a guarantee from the manufacturer.</p>
                <div class="priceRow" style="overflow: hidden; font-size: 24px;">
                    <p style="float:left;">$</p><input type="text" name="price" id="price" value="364.59" readonly />
                    <p style="float:right;">Select amount: <input type="number" value="1" name="quantity" min="1" max="5" onclick="multiply(this);"></p>
                </div>
            </div>

            <div class="product2Details">
                <img src="../Img/NavihawkATWatch.png" width="400px" height="400px" alt="watchOne" align="left">
                <p>Mens Citizen Navihawk AT Alarm Chronograph Radio Controlled Eco-Drive Watch JY8037-50E</p>
                <p style="font-size: 22px">The Citizen Navihawk AT JY8037-50E is a super Gents watch.
                    The case is made from Stainless Steel and has a black dial. The features of the watch include
                    (among others) a chronograph and date function as well as an alarm function. This model is 200 metres
                    water resistant - meaning it can be used for professional marine activity, skin diving and high impact
                    water sports, but not deep sea or mixed gas diving. The watch is shipped with an original box and a
                    manufacturers guarantee.</p>
                <div class="priceRow" style="overflow: hidden; font-size: 24px;">
                    <p style="float:left;">$</p><input type="text" name="price" id="price" value="649.75" readonly />
                    <p style="float:right;">Select amount: <input type="number" value="1" name="quantity" min="1" max="5" onclick="multiply(this);"></p>
                </div>
            </div>

            <!-- Line separator -->
            <hr style="border-top: 1px solid white; width: 1250px;" />

            <!-- Buttons in carts -->
            <div class="buttonPosition">
                <button type="button" class="nextBtn">
                    <a class="nextLink" href="javascript:void(0)" onclick="openContent(event, 'Shipping');" style="text-decoration: none;">
                        <div>Next</div>
                    </a>
                </button>

                <button type="button" class="cancelBtn">Cancel</button>
            </div>
        </div>

        <!-- Summary to display prices -->
        <div class="summary">
            <p style="border-bottom: 6px solid #ccc !important">Summary</p>
            <div class="checkOut">
                <div style='float:left; width:75%'>
                    <p>COST</p>
                    <p>SHIPPING</p>
                    <hr style="border-top: 1px solid white; width: 630px;" />
                    <p>TOTAL</p>
                </div>

                <div class="displayPrice" style='float:right; width:25%;'>
                    <input type="text" name="price" id="price" value="649.75" readonly />
                    <p class="shipping">$0.00</p>
                    <p class="totalPrice">$649.75</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Shipping section when tab shipping is clicked -->
    <div id="Shipping" class="w3-container shop" style="display:none">
        <p style="border-bottom: 6px solid #ccc !important; font-size: 30px">Shipping Details</p>
        <!-- Shipping form for user to fill -->
        <div class="shippingDetails">
            <div class="name">
                <input type="text" id="name" name="firstName" placeholder="First Name" />
            </div>
            <div class="name">
                <input type="text" id="name" name="lastName" placeholder="Last Name" />
            </div>

            <div class="address">
                <input type="text" id="address" name="address" placeholder="Address" />
            </div>

            <div class="address">
                <input type="text" id="address" name="address2" placeholder="Address 2" />
            </div>

            <!-- Combo box of all countries -->
            <div class="country">
                <select id="country" name="country" required>
                    <option disabled selected>Select country:</option>
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
            <div class="city">
                <input type="text" id="city" name="city" placeholder="City" />
            </div>
            <br>
            <div class="zipCode">
                <input type="text" id="zipCode" name="zipCode" placeholder="Zip/Postal Code" />
            </div>
            <div class="phoneNum">
                <input type="text" id="phoneNum" name="phoneNum" placeholder="Phone Number" />
            </div>

            <hr />

            <!-- Button position in shipping class -->
            <div class="buttonPosition2">
                <button type="button" class="nextBtn">
                    <a class="nextLink" href="javascript:void(0)" onclick="openContent(event, 'Confirmation');" style="text-decoration: none;">
                        <div>Next</div>
                    </a>
                </button>

                <button type="button" class="backBtn">
                    <a class="nextLink" href="javascript:void(0)" onclick="openContent(event, 'Cart');" style="text-decoration: none;">
                        <div>Back</div>
                    </a>
                </button>
            </div>
        </div>
    </div>

    <!-- Confirmation section when tab confirmation is clicked -->
    <div id="Confirmation" class="w3-container shop" style="display:none">
        <p style="border-bottom: 6px solid #ccc !important; font-size: 30px">Your Order Confirmation</p>
        <div class="confirmationMessage">
            <p>Thank you for your purchase from WatchShop.</p>
            <p>Order Number: 123456789</p>
            <!-- Display date when user makes order -->
            <p>Order Date:
                <script>
                    document.write(new Date().toLocaleDateString());
                </script>
            </p>

            <p style="border-bottom: 6px solid #ccc !important; font-size: 30px">Shipping To: (USER)</p>
            <p>Address</p>

            <!-- Table to display orders -->
            <p style="border-bottom: 6px solid #ccc !important; font-size: 30px">Order Summary</p>
            <table class="table">
                <tr>
                    <th>ITEM</th>
                    <th>SHIPPING</th>
                    <th>PRICE</th>
                    <th>QTY</th>
                    <th>TOTAL</th>
                </tr>

                <tr>
                    <td>Hugo Boss Talent Watch 1513584</td>
                    <td>$0.00</td>
                    <td>$364.59</td>
                    <td>1</td>
                    <td>$364.69</td>
                </tr>

                <tr>
                    <td>Mens Citizen Navihawk AT Alarm Chronograph Radio Controlled Eco-Drive Watch JY8037-50E</td>
                    <td>$0.00</td>
                    <td>$649.75</td>
                    <td>1</td>
                    <td>$649.75</td>
                </tr>

                <tr>
                    <td class="total" colspan="4">Total Item price:</td>
                    <td>$1014.34</td>
                </tr>
                <tr>
                    <td class="total" colspan="4">Total Shipping:</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td class="total" colspan="4"><span style="font-weight:bold">Total Order:</span><br></td>
                    <td>$1014.34</td>
                </tr>
            </table>

            <div class="buttonPosition3">
                <button type="button" class="confirmBtn">Confirm</button>

                <button type="button" class="cancelBtn">
                    <a class="nextLink" href="javascript:void(0)" onclick="openContent(event, 'Cart');" style="text-decoration: none;">
                        <div>Cancel</div>
                    </a>
                </button>
            </div>
        </div>

        <script>
            document.getElementsByClassName('tablink')[0].click();

            /**
                Functioni to display content when tab changes. 
             */
            function openContent(evt, title) {
                var i, x, tablinks;
                x = document.getElementsByClassName("shop");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" w3-border-dark-grey", "");
                }
                document.getElementById(title).style.display = "block";
                evt.currentTarget.firstElementChild.className += " w3-border-dark-grey";
            }

            /**
                Changes the value of price when the number of amount is clicked.
             */
            document.getElementsByName("quantity")[0].onclick = function() {
                var quantity = document.getElementsByName("quantity")[0].value;
                var price = document.getElementsByName("price")[0].value;

                var total = quantity * price;

                document.getElementsByTagName("input")[0].value = total;
            }

            document.getElementsByName("quantity")[1].onclick = function() {
                var quantity = document.getElementsByName("quantity")[1].value;
                var price = document.getElementsByName("price")[1].value;

                var total = quantity * price;

                document.getElementsByTagName("input")[2].value = total;
            }

            document.getElementsByClassName("nextLink").onclick = function() {
                document.getElementsByClassName('tablink')[0].style.borderBottomColor = "#616161";
            }
        </script>
    </div>
</div>

<?php
outputFooter();
?>

<?php
outputFooterEnd();
?>