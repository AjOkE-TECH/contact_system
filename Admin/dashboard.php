<?php include "../includes/header.php"; 

include "../config/db.php";

$sql = "SELECT * FROM contacts ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>


<table border="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>
<th>Date</th>
<th>Action</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?= $row['name']; ?></td>
<td><?= $row['email']; ?></td>
<td><?= $row['phone']; ?></td>
<td><?= $row['message']; ?></td>
<td><?= $row['created_at']; ?></td>
<td>
<a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
<a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete?')">Delete</a>
</td>
</tr>
<?php } ?>
</table>
<?php include "../includes/footer.php"; ?>