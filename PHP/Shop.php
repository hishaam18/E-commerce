<?php
include('Common.php');

outputHeader("Shop");
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

<!-- Container with Title and subtitle -->
<div id="shopContents">
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Shop</h1>
            <p>Have a look at your future watch..</p>
        </div>
    </div>

    <div id="Products">

    </div>

    <?php
    outputFooter();
    ?>

    <script src="../Javascript/DisplayProducts.js"></script>
</div>

<?php
outputFooterEnd();
?>