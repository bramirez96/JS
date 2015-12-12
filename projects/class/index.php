<?php
$page_title = "Home";
include('./mod/header.php');
if (!empty($_POST)) {
?>
<script type="text/javascript">
    //This code logs the user in... with javascript... because this project isn't about realistic programming practices...
    if (typeof sessionStorage.user === 'undefined') {
        sessionStorage.user = usr[queryString.email].uname;
        sessionStorage.email = queryString.email;
        sessionStorage.cart = "";
        sessionStorage.cartNum = 0;
    }
</script>
<?
} 
?>
<div class="grid clearfix notLogged" style="display:none;">
    <div class="col-2-3 no_top_pad">
        <form method="POST" action="./index.php" onsubmit="return checkLoginForm(this)">
            <h1>Log In</h1>
            <p>
                <input type="email" name="email" placeholder="Email Address" />
                <span id="emError"></span>
                <br />
                <input type="password" name="pass" placeholder="Password" />
                <span id="pwError"></span>
                <br />
                <input type="submit" value="Log In" />
            </p>
        </form>
    </div> <!-- End of .col-2-3 -->
    <div class="col-1-3">
    
    </div> <!-- End of .col-1-3 -->
</div> <!-- End of #login -->
<div class="grid clearfix isLogged" style="display:none;">
    <div class="col-1-1">
        <h1>Welcome, <span class="username"></span>!</h1>
        <script type="text/javascript">
            if (sessionStorage.cartNum == 1) {
                document.write('You currently have 1 item in your cart.<br />');
            } else {
                document.write('You currently have ' + sessionStorage.cartNum + ' items in your cart.<br />');
            }
            document.write('<a href="./store.php">Click here</a> to shop some more, or <a href="./cart.php">click here</a> to check out.');
        </script>
    </div> <!-- End of .col-1-1 -->
</div>
<?
include('./mod/footer.php');
?>