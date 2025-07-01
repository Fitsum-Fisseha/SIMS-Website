<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $status = $_POST['status'];
    $date = date('Y-m-d');
    $query = "INSERT INTO attendance (student_id, status, date) 
              VALUES ('$student_id', '$status', '$date')";
    mysqli_query($conn, $query);
    echo "Attendance recorded.";
}
?>
<form method="POST">
    <input name="student_id" placeholder="Student ID" required>
    <select name="status">
        <option value="present">Present</option>
        <option value="absent">Absent</option>
    </select>
    <button type="submit">Submit</button>
</form>