<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="style.css"> 
</head>

<body>

<?php
include 'partials/_dbconnect.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<?php include 'partials/_nav.php'; ?>

<div class="container">
    <h2 class="heading">Transfer Money</h2>
    <div class="table-container">
        <table class="user-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Balance</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($rows = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $rows['uid'] ?></td>
                    <td><?php echo $rows['name'] ?></td>
                    <td><?php echo $rows['email'] ?></td>
                    <td><?php echo $rows['balance'] ?></td>
                    <td>
                        <a href="Selectuserdetail.php?id=<?php echo $rows['uid']; ?>">
                            <button class="btn">Transfer</button>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php' ?>

</body>
</html>
