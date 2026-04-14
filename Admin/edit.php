<?php
include "../config/db.php";

$id = intval($_GET['id']);

$result = mysqli_query($conn, "SELECT * FROM contacts WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    mysqli_query($conn, "UPDATE contacts SET 
        name='$name',
        email='$email',
        phone='$phone',
        message='$message'
        WHERE id=$id");

    header("Location: dashboard.php");
}
?>

<form method="POST">
<input type="text" name="name" value="<?= $row['name']; ?>"><br>
<input type="email" name="email" value="<?= $row['email']; ?>"><br>
<input type="text" name="phone" value="<?= $row['phone']; ?>"><br>
<textarea name="message"><?= $row['message']; ?></textarea><br>
<button name="update">Update</button>
</form>