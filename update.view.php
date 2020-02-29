<!DOCTYPE html>
<html>
<head>
	<title>Update Staff Record</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
	<h2>Update Staff Record</h2>
	</div>
	
	<form method="post" action="update.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstname" value="<?php echo $firstname; ?>">
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>">
        </div>
        <div class="input-group">
			<label>Name</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Role</label>
			<select name="role">
                <option value="<?php echo $role; ?>"></option>
                <option value="Admin">Admin</option>
                <option value="Doctor">Doctor</option>
                <option value="Nurse">Nurse</option>
            </select>
		</div>
		<div class="input-group">
		<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #5F9EA0;" >Update</button>
<?php endif?>
		</div>
	</form>
</body>
</html>