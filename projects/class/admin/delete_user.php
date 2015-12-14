<?php
$page_title = "Home";
include('./header.php');
?>
<div class="grid clearfix">
    <div class="col-1-1">
        <p class="dark thick">
            Are you sure you wish to delete the following user?
        </p>
        <div class="grid clearfix">
            <div class="col-auto">
                <p class="yellow 400">
                    Name:<br />
                    Username:<br />
                    Email:<br />
                </p>
            </div> <!-- End of .col-auto -->
            <div class="col-auto">
                <p class="thin">
                    <span id="fname"></span> <span id="lname"></span><br />
                    <span id="uname"></span><br />
                    <span id="email"></span>
                </p>
            </div> <!-- End of .col-auto -->
        </div> <!-- End of .grid -->
        <div class="grid clearfix">
            <div class="col-1-1">
                <a href="javascript:confirmDelete(queryString.email)" class="button">Yes</a> 
                <a href="javascript:stopDelete()" class="button">No</a>
            </div> <!-- End of .col-1-1 -->
        </div> <!-- End of .grid -->
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<script type="text/javascript">
    $('#fname').text(usr[queryString.email].fname);
    $('#lname').text(usr[queryString.email].lname);
    $('#uname').text(usr[queryString.email].uname);
    $('#email').text(queryString.email);
    function confirmDelete(user) {
        delete usr[user];
        var x = JSON.stringify(usr);
        localStorage.user = x;
        alert("User deleted.");
        window.location.assign("./users.php");
    }
    function stopDelete() {
        alert("User was not deleted.");
        window.location.assign("./users.php");
    }
</script>
<?php
include('./footer.php');
?>