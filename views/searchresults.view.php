<?php include('search.php'); ?>
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
            <th>Staff Number</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
            <th>Role</th>
        </tr>
	</thead>
         
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['role']; ?></td>
       
</table>
