<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'partials/_nav.php'; ?>

<div class="container">
    <h2 class="heading">Transaction History</h2>
    <div class="table-container">
        <table class="transaction-table">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Amount</th>
                    <th>Date & Time</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include 'partials/_dbconnect.php';
                $sql = "SELECT * FROM transaction";
                $query = mysqli_query($conn, $sql);
                while ($rows = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td><?php echo $rows['tid']; ?></td>
                    <td><?php echo $rows['sender']; ?></td>
                    <td><?php echo $rows['receiver']; ?></td>
                    <td><?php echo $rows['balance']; ?></td>
                    <td><?php echo $rows['datetime']; ?></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
