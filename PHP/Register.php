<?php

include('Common.php');

outputHeader("Register");

?>

<!-- Header -->
<header>
    <!-- Navigation Bar -->
    <div class="navigationBar">
        <?php
        outputNavigationBar();
        ?>
    </div>
</header>

<!-- Registration form -->
<div class="register-form">
    <form name="registerForm" action="../PHP/AddCustomer.php" method="post">
        <div class="content">
            <!-- Title -->
            <h3>Registration Form</h3>
            <p>Please fill in this form to create an account.</p>

            <div class="line-seperator-register">
                <hr id="line" />
            </div>

            <!-- FirstName input -->
            <div>
                <input type="text" id="register_firstName" placeholder="First Name" name="register_firstName">
                <div id="firstName_error"></div>
            </div>

            <!-- LastName input -->
            <div>
                <input type="text" id="register_lastName" placeholder="Last Name" name="register_lastName">
                <div id="lastName_error"></div>
            </div>

            <!-- Username input -->
            <div>
                <input type="text" id="register_username" placeholder="Username" name="register_username">
                <div id="username_error"></div>
            </div>

            <!-- Combo-box select -->
            <div>
                <select id="gender" name="gender" required>
                    <option disabled selected>Select Gender:</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <!-- Date of birth input -->
            <div>
                <input id="dob" type="date" name="dob" max="2017-11-30" required>
            </div>

            <!-- Address input -->
            <div>
                <input type="text" id="register_address" placeholder="Address" name="register_address" required>
                <div id="address_error"></div>
            </div>

            <!-- Email input -->
            <div>
                <input type="email" id="register_email_address" placeholder="E-mail Address" name="register_email_address">
                <div id="email_error"></div>
            </div>

            <!-- Password input -->
            <div>
                <input type="password" id="register_password" placeholder="Password" name="register_password">
                <div id="password_error"></div>
            </div>

            <!-- Password confirmation input -->
            <div>
                <input type="password" id="confirm_password" placeholder="Confirm Password" name="confirm_password" onkeyup="passwordMatch()">
                <div id="confirm_password_error"></div>
            </div>

            <div class="line-seperator-register">
                <hr id="line" />
            </div>
            <p>By creating an account you agree to our <a href="#" style="color: dodgerblue;">Terms & Privacy</a>.</p>

            <!-- Register button -->
            <button type="submit" class="register_button" onclick="return RegValidate()">Register</button>

            <!-- Link to login website -->
            <div class="to-login">
                <p>Already have an account? <a href="Login.php">Login</a>.</p>
            </div>
        </div>
    </form>

    <?php
    outputFooter();
    ?>

    <script type="text/javascript" src="../Javascript/RegisterValidation.js"></script>
</div>

<?php
outputFooterEnd();
?>