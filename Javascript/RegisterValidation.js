// Input Fields of Register page.
var register_firstName = document.forms["registerForm"]["register_firstName"];
var register_lastName = document.forms["registerForm"]["register_lastName"];
var register_username = document.forms["registerForm"]["register_username"];
var register_address = document.forms["registerForm"]["register_address"];
var register_email_address =
  document.forms["registerForm"]["register_email_address"];
var register_password = document.forms["registerForm"]["register_password"];
var confirm_password = document.forms["registerForm"]["confirm_password"];

// Display error fields.
var firstName_error = document.getElementById("firstName_error");
var lastName_error = document.getElementById("lastName_error");
var username_error = document.getElementById("username_error");
var address_error = document.getElementById("address_error");
var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");
var confirm_password_error = document.getElementById("confirm_password_error");

// Regex array
var nameRegex = new RegExp(/^[A-Za-z]+$/);
var usernameRegex = new RegExp(
  "^[a-zA-Z0-9]([._](?![._])|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$"
);
var addressRegex = new RegExp(/^[a-zA-Z0-9\s,.'-]{3,}$/);
var emailRegex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
var passwordRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})");

// Event to display errors.
register_firstName.addEventListener("blur", firstNameVerify, true);
register_lastName.addEventListener("blur", lastNameVerify, true);
register_username.addEventListener("blur", usernameVerify, true);
register_address.addEventListener("blur", addressVerify, true);
register_email_address.addEventListener("blur", emailVerify, true);
register_password.addEventListener("blur", passwordVerify, true);

/**
 *
 * Function to check errors of register fields.
 *
 */
function RegValidate() {
  // Check if register firstName is empty.
  if (register_firstName.value == "") {
    register_firstName.style.border = "1px solid red";
    firstName_error.textContent = "First Name is required!";
    firstName_error.style.color = "red";
    firstName_error.style.fontSize = "18px";
    register_firstName.focus();
    return false;
  }

  if (!nameRegex.test(register_firstName.value)) {
    register_firstName.style.border = "1px solid red";
    firstName_error.innerHTML = "Invalid Name!";
    firstName_error.style.color = "red";
    firstName_error.style.fontSize = "18px";
    register_firstName.focus();
    return false;
  }

  // Check if register lastName is empty.
  if (register_lastName.value == "") {
    register_lastName.style.border = "1px solid red";
    lastName_error.textContent = "Last Name is required!";
    lastName_error.style.color = "red";
    lastName_error.style.fontSize = "18px";
    register_lastName.focus();
    return false;
  }

  if (!nameRegex.test(register_lastName.value)) {
    register_lastName.style.border = "1px solid red";
    lastName_error.innerHTML = "Invalid Name!";
    lastName_error.style.color = "red";
    lastName_error.style.fontSize = "18px";
    register_lastName.focus();
    return false;
  }

  // Check if register username is empty.
  if (register_username.value == "") {
    register_username.style.border = "1px solid red";
    username_error.textContent = "Username is required!";
    username_error.style.color = "red";
    username_error.style.fontSize = "18px";
    register_username.focus();
    return false;
  }

  /* 
  Check if username has 8 to 20 characters.
  Username can have underscore and dot but not in a row.
  Ex: user__test is not accepted.
  */
  if (!usernameRegex.test(register_username.value)) {
    register_username.style.border = "1px solid red";
    username_error.innerHTML =
      "Invalid Username! <br>1. Contains only alphanumeric characters, underscore and dot.<br>2. Underscore and dot cannot be at start or end or used multiple times in a row.<br>3. Underscore and dot can't be next to each other.<br>4. Number of characters must be between 8 to 20.";
    username_error.style.color = "red";
    username_error.style.fontSize = "18px";
    register_username.focus();
    return false;
  }

  // Check if address matches regex.
  if (!addressRegex.test(register_address.value)) {
    register_address.style.border = "1px solid red";
    address_error.innerHTML = "Invalid Address!";
    address_error.style.color = "red";
    address_error.style.fontSize = "18px";
    register_address.focus();
    return false;
  }

  // Check if email address is empty.
  if (register_email_address.value == "") {
    register_email_address.style.border = "1px solid red";
    email_error.textContent = "Email Address is required!";
    email_error.style.color = "red";
    email_error.style.fontSize = "18px";
    register_email_address.focus();
    return false;
  }

  // Check if email address has a '@' and '.'.
  if (!emailRegex.test(register_email_address.value)) {
    register_email_address.style.border = "1px solid red";
    email_error.textContent = "Invalid Email Address!";
    email_error.style.color = "red";
    email_error.style.fontSize = "18px";
    register_email_address.focus();
    return false;
  }

  // Check if password is empty.
  if (register_password.value == "") {
    register_password.style.border = "1px solid red";
    password_error.textContent = "Password is required!";
    password_error.style.color = "red";
    password_error.style.fontSize = "18px";
    register_password.focus();
    return false;
  }

  // Check if password has uppercase, lower space characters, a numerical value and at least 6 characters.
  if (!passwordRegex.test(register_password.value)) {
    register_password.style.border = "1px solid red";
    password_error.innerHTML =
      "Invalid Password! <br>Password must contain 1 UPPERCASE character, 1 numerical value & minimum 6 characters.";
    confirm_password_error.innerHTML = "";
    password_error.style.color = "red";
    password_error.style.fontSize = "18px";
    register_password.focus();
    return false;
  }

  // Check if password is equal to confirm password.
  if (register_password.value != confirm_password.value) {
    register_password.style.border = "1px solid red";
    confirm_password.style.border = "1px solid red";
    confirm_password_error.innerHTML = "Passwords do not match!";
    confirm_password_error.style.color = "red";
    confirm_password_error.style.fontSize = "18px";
    return false;
  }
}

/**
 *
 * Function to return true if there are no errors in FirstName.
 *
 */
function firstNameVerify() {
  if (register_firstName.value != "") {
    register_firstName.style.border = "1px solid none";
    firstName_error.innerHTML = "";
    return true;
  }
}

/**
 *
 * Function to return true if there are no errors in lastName.
 *
 */
function lastNameVerify() {
  if (register_lastName.value != "") {
    register_lastName.style.border = "1px solid none";
    lastName_error.innerHTML = "";
    return true;
  }
}

/**
 *
 * Function to return true if there are no errors in username.
 *
 */
function usernameVerify() {
  if (register_username.value != "") {
    register_username.style.border = "1px solid none";
    username_error.innerHTML = "";
    return true;
  }

  if (usernameRegex.test(register_username.value)) {
    register_username.style.border = "1px solid none";
    username_error.innerHTML = "";
    return true;
  }
}

/**
 *
 * Function to return true if there are no errors in address.
 *
 */
function addressVerify() {
  if (register_address.value != "") {
    register_address.style.border = "1px solid none";
    address_error.innerHTML = "";
    return true;
  }
}

/**
 *
 * Function to return true if there are no errors in the email address.
 *
 */
function emailVerify() {
  if (register_email_address.value != "") {
    register_email_address.style.border = "1px solid none";
    email_error.innerHTML = "";
    return true;
  }

  if (!emailRegex.test(register_email_address.value)) {
    register_email_address.style.border = "1px solid none";
    email_error.innerHTML = "";
    return true;
  }
}

/**
 *
 * Function to return true if there are no errors in password.
 *
 */
function passwordVerify() {
  if (register_password.value != "") {
    register_password.style.border = "1px solid none";
    password_error.innerHTML = "";
    return true;
  }

  if (passwordRegex.test(register_password.value)) {
    register_password.style.border = "1px solid none";
    password_error.innerHTML = "";
    return true;
  }
}

/**
 *
 * Function to return true if the password is equal to the confirm password.
 *
 */
function passwordMatch() {
  if (register_password.value === confirm_password.value) {
    register_password.style.border = "1px solid none";
    confirm_password.style.border = "1px solid none";
    password_error.innerHTML = "";
    confirm_password_error.innerHTML = "Passwords Match!";
    confirm_password_error.style.color = "green";
    confirm_password_error.style.fontSize = "18px";
    return true;
  } else {
    register_password.style.border = "1px solid none";
    confirm_password.style.border = "1px solid none";
    password_error.innerHTML = "";
    confirm_password_error.innerHTML = "Passwords Does Not Match!";
    confirm_password_error.style.color = "red";
    confirm_password_error.style.fontSize = "18px";
    return false;
  }
}
