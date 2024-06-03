<?php
$servername = "localhost";
$username = "root";
$password = ""; // Ensure no spaces if the password is empty
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO messages (name, email, comment) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $comment);

if ($stmt->execute()) {
    // JavaScript to display alert and redirect
    echo "<script>
            alert('New record created successfully');
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 3000); // 3 seconds
          </script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
