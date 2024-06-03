<?php
session_start();
include('connection.php');

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if (empty($username)) {
            $error = "Username is required";
        } else if (empty($password)) {
            $error = "Password is required";
        } else {
            // Query the database to check if username and password match
            $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
            $result = $connection->query($sql);

            if ($result->num_rows == 1) {
                // Login successful, set session variable
                $_SESSION['admin_id'] = $username;
                
                // Redirect to the desired page
                header("Location: index.html");
                exit();
            } else {
                $error = "Incorrect Username or Password";
            }
        }
    }
}
?>
