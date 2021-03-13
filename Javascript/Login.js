var request = new XMLHttpRequest();

window.onload = checkLogin;

// Checks if user is logged in.
function checkLogin() {
  //Create event handler that specifies what should happen when server responds
  request.onload = function() {
    if (request.responseText == "Already Logged In!") {
      document.getElementsByTagName("p")[0].innerHTML =
        'Welcome! <a href="../PHP/User.php">My Profile</a> | <a onclick="logout()">Logout</a>';
    } else {
      console.log(request.responseText);
    }
  };

  //Set up and send request
  request.open("GET", "CheckLogin.php");
  request.send();
}

// Log in user to server
function login() {
  //Create event handler that specifies what should happen when server responds
  request.onload = function() {
    //Check HTTP status code
    if (request.status === 200) {
      //Get data from server
      var responseData = request.responseText;

      //Add data to page
      if (responseData == "ok") {
        document.getElementById("errorMsg").innerHTML = "";
        alert("Login Successful");
      } else {
        document.getElementById("errorMsg").innerHTML = request.responseText;
        alert("Login Failed!");
      }
    } else {
      alert("Cannot communicate with server!");
    }
  };

  //Extract login data
  var userName = document.getElementById("login_username").value;
  var password = document.getElementById("login_password").value;

  //Set up and send request
  request.open("POST", "CustomerLogin.php");
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send("Username=" + userName + "&Password=" + password);
}

// Log out user
function logout() {
  //Create event handler that specifies what should happen when server responds
  request.onload = function() {
    checkLogin();
  };
  //Set up and send request
  request.open("GET", "Logout.php");
  request.send();
  alert("Logging out...");
  location.reload();
}
