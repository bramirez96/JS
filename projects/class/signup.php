<?php
$page_title = "Sign Up";
include('./mod/header.php');
if (!empty($_POST)) {
?>
<script type="text/javascript">
    //The following code should save new user info to user string
    if ($.inArray(queryString['email'], Object.keys(usr)) == -1) {
        usr[queryString['email']] = {
            "fname": queryString['fname'],
            "lname": queryString['lname'],
            "uname": queryString['uname'],
            "pass" : queryString['pass'],
            "key"  : usr['keys'].length + 1
        }
        usr['keys'].push(usr['keys'].length + 1);
    }
    var z = JSON.stringify(usr);
    localStorage.user = z;
</script>
<div class="grid clearfix">
    <div class="col-1-1">
        <p>
            You've successfully signed up! <a href="./index.php">Click here</a> to log in.
        </p>
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<?
} else {
?>
<div class="grid clearfix">
    <div class="col-1-1 no_top_pad">
        <form method="POST" action="./signup.php" onsubmit="return checkSignupForm(this)">
            <h1>Sign Up</h1>
            <div class="grid clearfix">
                <div class="col-1-4">
                    <p>
                        First Name: 
                    </p>
                </div> <!-- End of .col-1-4 -->
                <div class="col-3-4">
                    <p>
                        <input type="text" name="fname" placeholder="First Name" />
                        <span id="fnError"></span>
                    </p>
                </div> <!-- End of .col-3-4 -->
            </div> <!-- End of .grid -->
            <div class="grid clearfix">
                <div class="col-1-4">
                    <p>
                        Last Name: 
                    </p>
                </div> <!-- End of .col-1-4 -->
                <div class="col-3-4">
                    <p>
                        <input type="text" name="lname" placeholder="Last Name" />
                        <span id="lnError"></span>
                    </p>
                </div> <!-- End of .col-3-4 -->
            </div> <!-- End of .grid -->
            <div class="grid clearfix">
                <div class="col-1-4">
                    <p>
                        Username: 
                    </p>
                </div> <!-- End of .col-1-4 -->
                <div class="col-3-4">
                    <p>
                        <input type="text" name="uname" placeholder="Username" />
                        <span id="unError"></span>
                        <span class="form_params">6-20 characters, letters and numbers only</span>
                    </p>
                </div> <!-- End of .col-3-4 -->
            </div> <!-- End of .grid -->
            <div class="grid clearfix">
                <div class="col-1-4">
                    <p>
                        Email: 
                    </p>
                </div> <!-- End of .col-1-4 -->
                <div class="col-3-4">
                    <p>
                        <input type="email" name="email" placeholder="Email" />
                        <span id="emError"></span>
                    </p>
                </div> <!-- End of .col-3-4 -->
            </div> <!-- End of .grid -->
            <div class="grid clearfix">
                <div class="col-1-4">
                    <p>
                        Password: 
                    </p>
                </div> <!-- End of .col-1-4 -->
                <div class="col-3-4">
                    <p>
                        <input type="password" name="pass" placeholder="Password" />
                        <span id="pwError"></span>
                        <span class="form_params">6-20 characters, one letter, one number, one symbol ($ & * $ # ?)</span>
                    </p>
                </div> <!-- End of .col-3-4 -->
            </div> <!-- End of .grid -->
            <div class="grid clearfix">
                <div class="col-1-4">
                    <p>
                        Confirm Password: 
                    </p>
                </div> <!-- End of .col-1-4 -->
                <div class="col-3-4">
                    <p>
                        <input type="password" name="cpass" placeholder="Confirm" />
                        <span id="cpError"></span>
                    </p>
                </div> <!-- End of .col-3-4 -->
            </div> <!-- End of .grid -->
            <div class="grid clearfix">
                <div class="col-1-1">
                    <p>
                        <input type="submit" value="Sign Up" />
                    </p>
                </div> <!-- End of .col-3-4 -->
            </div> <!-- End of .grid -->
        </form>
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<?
}
include('./mod/footer.php');
?>