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
<?php
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
        <p id="homePage">
            
        </p>
    </div> <!-- End of .col-1-1 -->
</div>
<script type="text/javascript">
    $(document).ready(function() {
        if (sessionStorage.cartNum == 1) {
            $('#homePage').append('You currently have 1 book in your cart.<br />');
        } else {
            $('#homePage').append('You currently have ' + sessionStorage.cartNum + ' books in your cart.<br />');
        }
        $('#homePage').append('<a href="./store.php">Click here</a> to shop some more, or <a href="./cart.php">click here</a> to check out.');
    });
</script>
<?php
include('./mod/footer.php');
?>