<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
<form action="search.php" method="post">
	<div class="input-group">
		
		<input type="search" name="search" placeholder="Enter Search term">
		<input type="submit" value="Search">
	</div>
	</form>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		
	

		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		
		
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['firstname']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['role']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>
                    <small   style="color: #888;">
						 
                       &nbsp; <a href="view.php"> view users</a>
					</small>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>