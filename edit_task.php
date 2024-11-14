<?php
include('conn.php');

$id = $_GET['id'];
$sql = "SELECT task FROM tasks WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kegiatan</title>
</head>
<body>
    <h1>Edit Kegiatan</h1>
    <form action="update_task.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="task" value="<?php echo $row['task']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
