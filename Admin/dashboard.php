<?php include "../includes/header.php"; ?>
<?php include "../config/db.php"; ?>

<?php
$sql = "SELECT * FROM contacts ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<div class="container">
    <h2>Contact Messages</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php if (mysqli_num_rows($result) > 0): ?>

            <?php while ($row = mysqli_fetch_assoc($result)): ?>

                <?php
                //  SANITIZE DATA 
                $name = htmlspecialchars($row['name']);
                $email = htmlspecialchars($row['email']);
                $phone = htmlspecialchars($row['phone']);
                $message = htmlspecialchars($row['message']);
                $date = htmlspecialchars($row['created_at']);
                ?>

                <tr>
                    <td><?= $name; ?></td>
                    <td><?= $email; ?></td>
                    <td><?= $phone; ?></td>
                    <td><?= $message; ?></td>
                    <td><?= $date; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
                        <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>

            <?php endwhile; ?>

        <?php else: ?>
            <tr>
                <td colspan="6">No messages found</td>
            </tr>
        <?php endif; ?>

    </table>
</div>

<?php include "../includes/footer.php"; ?>