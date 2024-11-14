<?php
include('conn.php');

$id = $_POST['id'];
$task = $_POST['task'];
$sql = "UPDATE tasks SET task='$task' WHERE id=$id"; 

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

