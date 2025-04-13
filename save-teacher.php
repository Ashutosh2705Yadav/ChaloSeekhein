<?php
include 'db.php';
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$sql = "INSERT INTO teachers (name, subject, email) VALUES ('$name', '$subject', '$email')";
if ($conn->query($sql)) {
  echo "Thank you for volunteering!";
} else {
  echo "Error: " . $conn->error;
}
?>