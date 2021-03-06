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
            <th colspan="2">Action</th>
        </tr>
	</thead>
    <?php while ($row = mysqli_fetch_array($result)) { ?>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['role']; ?></td>
        <td>
				<a href="views/update.view.php?id=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="delete.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
        <?php } ?>
</table>
