<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare the SQL statement to prevent SQL injection
    $stmt = mysqli_prepare($connection, "DELETE FROM messages WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        // Deletion successful, redirect to the messages page
        header("Location: index.php");
    } else {
        // Deletion failed, display an error
        echo "Error deleting record: " . mysqli_error($connection);
    }

    mysqli_stmt_close($stmt);
} else {
    // No ID provided, redirect to the messages page
    header("Location: index.php");
}

mysqli_close($connection);
?>
