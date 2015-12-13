<?php
$page_title = "Home";
include('./header.php');
?>
<div class="grid clearfix">
    <div class="list_users col-1-1">
        <h1>Users</h1>
        <div class="grid clearfix">
            <div class="col-1-8">
                <ul>
                    <li>Username</li>
                    <span id="uname">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-1-8 -->
            <div class="col-1-8">
                <ul>
                    <li>Last Name</li>
                    <span id="lname">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-1-8 -->
            <div class="col-1-8">
                <ul>
                    <li>First Name</li>
                    <span id="fname">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-1-8 -->
            <div class="col-3-8">
                <ul>
                    <li>Email</li>
                    <span id="email">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-3-8 -->
            <div class="col-1-8">
                <ul>
                    <li>Delete User</li>
                    <span id="options">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-1-8 -->
        </div> <!-- End of .grid -->
        <div class="grid clearfix">
            <div class="col-1-1 center">
                <button id="users_back">&lt;</button>
                <span id="users_range"></span>
                <button id="users_next">&gt;</button>
            </div> <!-- End of .col-1-1 -->
        </div> <!-- End of .grid -->
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<script type="text/javascript">
    for (var x = 0; x < Object.keys(usr).length; x++) {
        var z = Object.keys(usr)[x];
        $('#uname').append("<li data-item-num-users=\"" + (x+1) + "\">" + usr[z].uname + "</li>");
        $('#lname').append("<li data-item-num-users=\"" + (x+1) + "\">" + usr[z].lname + "</li>");
        $('#fname').append("<li data-item-num-users=\"" + (x+1) + "\">" + usr[z].fname + "</li>");
        $('#email').append("<li data-item-num-users=\"" + (x+1) + "\">" + z + "</li>");
        $('#options').append("<li data-item-num-users=\"" + (x+1) + "\"><a href=\"./delete_user.php?email=" + encodeURIComponent(z) + "\">Delete</a>");
    }
    var users = new Pages("users", x, 5);
</script>
<?
include('./footer.php');
?>