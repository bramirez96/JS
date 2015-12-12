<?php
$page_title = "Home";
include('./mod/header.php');
if (!empty($_POST)) {
?>
<script type="text/javascript">
    //I'm not even gonna pretend this is useful
    if (typeof sessionStorage.admin === 'undefined') {
        sessionStorage.admin = true;
        sessionStorage.user = "Admin";
    }
</script>
<?
} 
?>
<div class="grid clearfix notLogged" style="display:none;">
    <div class="col-2-3 no_top_pad">
        <form method="POST" action="./admin/users.php" onsubmit="return checkAdminForm(this)">
            <h1>Admin Login:</h1>
            <p>
                <input type="text" name="admin" placeholder="Admin Username" />
                <span id="adError"></span>
                <br />
                <input type="password" name="pass" placeholder="Password" />
                <span id="pwError"></span>
                <br />
                <input type="submit" value="Log In" />
                <br />
                <span class="form_params">username: root, password: admin</span>
            </p>
        </form>
    </div> <!-- End of .col-2-3 -->
    <div class="col-1-3">
    
    </div> <!-- End of .col-1-3 -->
</div> <!-- End of #login -->
<div class="grid clearfix isAdmin" style="display:none;">
    <div class="col-1-1">
        <p>
            Admins don't need welcome messages.
        </p>
    </div> <!-- End of .col-1-1 -->
</div>
<?
include('./mod/footer.php');
?>