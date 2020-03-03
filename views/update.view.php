<?php 
include('../config.php');
$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM user WHERE id =$id");

while ($res=mysqli_fetch_array($result)) {
    $firstname=$res['firstname'];
    $lastname=$res['lastname'];
    $email=$res['email'];
    $role=$res['role'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="header">
        <h2>Update Record</h2>
    </div>

    <form action="../update.php" method="post">
    <div class="input-group">
        <label>First Name</label>
    <input type="text" name="firstname" value="<?php echo $firstname;?>" required>
    </div>
    <div class="input-group">
        <label>Last Name</label>
    <input type="text" name="lastname" value="<?php echo $lastname;?>" required>
    </div>
    <div class="input-group">
        <label>Email</label>
    <input type="email" name="email" value="<?php echo $email;?>" required>
    </div>
    <div class="input-group">
        <label>Role</label>
    <select name="role" required>
        <option value=""></option>
        <option value="Admin">Admin</option>
        <option value="Doctor">Doctor</option>
        <option value="Nurse">Nurse</option>
    </select>
    </div>
    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>
    <div class="input-group">
       <button type="submit" class="btn" name="update_btn">Update</button>
    </div>
    </form>
</body>
</html>