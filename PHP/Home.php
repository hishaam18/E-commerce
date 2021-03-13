<?php
include('Common.php');

outputHeader("Home");
?>

<!-- Header tag -->
<header>
    <!-- Navigation Bar -->
    <div class="navigationBar">
        <?php
        outputNavigationBar();
        ?>

        <!-- Search bar -->
        <div class="searchContainer">
            <form name="searchBar">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</header>

<body id="myPage" data-spy="scroll" data-offset="60">
    <!-- Jumbotron used for title and welcoming line-->
    <div class="jumbotron text-center">
        <h1>Watchshop</h1>
        <p>Welcome to our pretigious watch shop</p>
        <button id="shopNow">
            <a href="../PHP/Shop.php">SHOP NOW</a>
        </button>
    </div>

    <div class="featuredWatch">
        <h2>Featured Watches</h2>
        <div class="mainImages" id="mainImages">
            <!-- First Image -->
            <div class="imageColumn">
                <img src="../Img/HBossWatch.png" alt="watchOne">
                <div class="watchNP">
                    <p>Hugo Boss Talent Watch 1513584</p>
                    <p>$364.59</p>
                </div>
            </div>

            <!-- Second Image -->
            <div class="imageColumn">
                <img src="../Img/NavihawkATWatch.png" alt="watchTwo">
                <div class="watchNP">
                    <p>Mens Citizen Navihawk AT Alarm Chronograph Radio Controlled Eco-Drive Watch JY8037-50E</p>
                    <p>$649.75</p>
                </div>
            </div>

            <!-- Third Image -->
            <div class="imageColumn">
                <img src="../Img/CitizenTWatch.png" alt="watchThree">
                <div class="watchNP">
                    <p>Mens Citizen Eco-drive Gents Titanium Chronograph Titanium Watch CA0349-51L</p>
                    <p>$494.44</p>
                </div>
            </div>
        </div>
    </div>

    <!-- About section -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>About</h2>
                <h4>Watch Shop is an official stockist for all watch brands listed on this website. Established in
                    1991 on the high street, Watch Shop is a leading retailer of brand name designer watches and is
                    also the UK's most popular watch website*. Watch Shop was the first independent watch retailer
                    to advertise on national television, and we pride ourselves on having one of the most efficient
                    shopping systems available with communication at every stage to inform you of your order status,
                    as well as excellent 7-days sales, customer service and support team who are glad to assist you
                    with any enquiry. </h4>
            </div>
            <!-- Add bootstrap icon -->
            <div class="col-sm-4" align="center">
                <span class="glyphicon glyphicon-signal logo"></span>
            </div>
        </div>
    </div>

    <!-- Value section -->
    <div class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-4" align="center">
                <span class="glyphicon glyphicon-globe logo slideanim"></span>
            </div>
            <div class="col-sm-8">
                <h2>Our Values</h2><br>
                <h4><strong>MISSION:</strong> Our mission is to provide quality service to our customers.</h4>
                <h4><strong>VISION:</strong> Our vision is to reach the top in the global market and be among
                    the top 10 best e-commerce website in the world.</h4>
            </div>
        </div>
    </div>

    <!-- Services provided section -->
    <div id="services" class="container-fluid text-center">
        <h2>SERVICES</h2>
        <h4>What we offer</h4>
        <br>
        <!-- Rows of icon -->
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-calendar logo-small"></span>
                <h4>Next day delivery</h4>

            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-plane logo-small"></span>
                <h4 style="color:#303030;">Free Delivery</h4>

            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo-small"></span>
                <h4>Stocks</h4>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-flag logo-small"></span>
                <h4>Worldwide Delivery</h4>

            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-usd logo-small"></span>
                <h4>Full Refund Policy</h4>

            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-ok logo-small"></span>
                <h4>100% genuine watches</h4>
            </div>
        </div>
    </div>


    <!-- Get In Touch section -->
    <div class="get-in-touch" id="get-in-touch">
        <h3>Get In Touch</h3>
        <p>
            Please send us your reviews about the game or if you are having any issues. You
            can also suggest options of how<br>the game can be improved or if new features
            should be added to make the gaming experience better.<br>Thank you!
        </p>

        <!-- Show a form for users -->
        <div class="contact">
            <form>
                <textarea id="message" name="message" placeholder="Enter message here..." required></textarea>
                <br>
                <input type="email" id="email" name="emailAddress" placeholder="Email Address" required>
                <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
                <button type="submit" class="submit-button"><i class="fas fa-paper-plane"></i> Submit</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function() {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>
</body>

<?php
outputFooter();
?>

<?php
outputFooterEnd();
?>