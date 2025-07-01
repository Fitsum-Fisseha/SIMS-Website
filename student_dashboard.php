<?php
include('db.php');
session_start();
$id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT * FROM scores WHERE student_id = $id");
echo "<h2>Your Scores</h2>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "Subject: " . $row['subject'] . " - Score: " . $row['score'] . "<br>";
}
?>
<a href="pay_fee.php">Pay Fee</a>