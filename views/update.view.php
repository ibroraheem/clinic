<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Staff Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="header">
    <h2>Update Record</h2>
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
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label for="Role">Role</label>
            <select name="Role" >
                <option value=""></option>
                <option value="Admin">Admin</option>
                <option value="Doctor">Doctor</option>
                <option value="Nurse">Nurse</option>
            </select>
        </div>
		<div class="input-group">
			<button class="btn" type="submit" name="update" >update</button>
		</div>
	</form>
</body>
</html>