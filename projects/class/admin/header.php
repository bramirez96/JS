<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $page_title . " - Admin"; ?></title>
		<link rel="stylesheet" type="text/css" href="../styles/main.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script><!--Might take this out-->
		<script type="text/javascript" src="./scripts/admin.js" /></script>
		<script type="text/javascript" src="../scripts/paginate.js" /></script>
		<script type="text/javascript">
    		loadUsers();
    		loadItems('isbn');
    		var queryString = {};
            <?php
                if (!empty($_GET)) {
                    foreach ($_GET as $key => $value) {
                        echo "queryString['$key'] = '$value';";
                    }
                }
                    
            ?>
        </script>
	</head>
	<body>
		<div id="container" class="clearfix">
			<div id="header-wrap">
				<header class="content">
					<div id="notLogo">
						<h1>Admin Control Panel</h1>
						<nav>
							<ul>
								<li><a href="./users.php">View Users</a></li>
								<li><a href="./items.php">View Items</a></li>
								<li class="float-right"><a href="javascript:logOut()">Log Out</a></li>
                                <li class="float-right">Logged in as: Admin</li>
							</ul>
						</nav>
					</div> <!-- End #notLogo -->
				</header>
			</div> <!-- End #header-wrap -->
			<div class="content">