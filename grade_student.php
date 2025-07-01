<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $subject = $_POST['subject'];
    $score = $_POST['score'];
    $query = "INSERT INTO scores (student_id, subject, score) 
              VALUES ('$student_id', '$subject', '$score')";
    mysqli_query($conn, $query);
    echo "Score recorded.";
}
?>
<form method="POST">
    <input name="student_id" placeholder="Student ID" required>
    <input name="subject" placeholder="Subject" required>
    <input name="score" placeholder="Score" required>
    <button type="submit">Submit Score</button>
</form>