<?php include('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>To-Do-List</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Tulis kegiatan" required>
            <button type="submit">Tambah</button>
        </form>
        <ul>
            <?php
            $sql = "SELECT * FROM tasks";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["task"] . " 
                        <a href='edit_task.php?id=" . $row["id"] . "'>Edit</a> 
                        <a href='delete_task.php?id=" . $row["id"] . "'>Hapus</a>
                    </li>";
                }
            } else {
                echo "<li>Belum ada kegiatan.</li>";
            }

            $conn->close();
            ?>
        </ul>
    </div>
</body>
</html>
