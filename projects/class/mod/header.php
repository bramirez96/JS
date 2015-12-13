<? # Code to clear $_GET of unwanted user-inputted values
    $allowed = ['email', 'pass', 'cpass', 'uname', 'fname', 'lname'];
    foreach ($_GET as $key => $value) {
        if (!in_array($key, $allowed)) {
            unset($_GET[$key]);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $page_title . " - Shopping"; ?></title>
		<link rel="stylesheet" type="text/css" href="./styles/main.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script><!--Might take this out-->
		<script type="text/javascript" src="./scripts/main.js" /></script>
		<script type="text/javascript" src="./scripts/paginate.js" /></script>
		<script type="text/javascript">
    		loadUsers();
    		loadItems();
    		var queryString = new Object();
            <?php
                if (!empty($_POST)) {
                    foreach ($_POST as $key => $value) {
                        echo "queryString['$key'] = '$value';\n";
                    }
                }
                if (!empty($_GET)) {
                    foreach ($_GET as $key => $value) {
                        echo "queryString['$key'] = '$value';\n";
                    }
                }
            ?>
    		$(document).ready(function() {
        	    setUser();
            });
        </script>
	</head>
	<body>
		<div id="container" class="clearfix">
			<div id="header-wrap">
				<header class="content">
					<div id="notLogo">
						<h1>Shopping</h1>
						<nav>
							<ul>
    							<div class="notLogged" style="display: none;">
        							<li><a href="./index.php">Log In</a></li>
        							<li><a href="./signup.php">Sign Up</a></li>
        							<li><a href="./admin.php">Admin Login</a></li>
    							</div>
								<div class="isLogged" style="display:none;">
    								<li><a href="./index.php">Home</a></li>
    								<li><a href="./store.php">Shop</a></li>
    								<li><a href="./cart.php">View Cart (<span class="cartNum"></span>)</a></li>
    								<li class="float-right"><a href="javascript:logOut()">Log Out</a></li>
                                    <li class="float-right">Logged in as: <span class="username"></span></li>
								</div>
                                <? /* User JavaScript to display this thing */ ?>
							</ul>
						</nav>
					</div> <!-- End #notLogo -->
				</header>
			</div> <!-- End #header-wrap -->
			<div class="content">