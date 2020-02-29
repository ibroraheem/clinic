<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff List</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Role</th>

			<th colspan="2">Action</th>
		</tr>
	</thead>    
    <tr>
    <?php while ($row = mysqli_fetch_array($result)) { ?>
			<td><?php echo $row['firstname']; ?></td>
			<td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
			<td><?php echo $row['role']; ?></td>
            <td>
				<a href="index.php?edit=<?php echo $row['email']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['email']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
        <?php } ?>
</table>
</body>
</html>