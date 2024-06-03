<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/nazox-ajax/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Aug 2023 13:10:05 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Baron Portfolio </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                        <div class="w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <a href="index.html" class="">
                                                    <img src="assets/images/loo.png" alt="" height="40" class="auth-logo logo-dark mx-auto">
                                                    <img src="assets/images/loo.png" alt="" height="40" class="auth-logo logo-light mx-auto">
                                                </a>
                                            </div>

                                            <h4 class="font-size-18 mt-4">Welcome Back Champ!</h4>
                                            <p class="text-muted">Log in to Read Your Messages.</p>
                                        </div>                                          <?php
include('connection.php');

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $enteredUsername = validate($_POST['username']);
        $enteredPassword = validate($_POST['password']);

        if (empty($enteredUsername)) {
            $error = "Username is required";
        } elseif (empty($enteredPassword)) {
            $error = "Password is required";
        } else {
            $sql = "SELECT username, password FROM admin WHERE username = ?";
            $stmt = mysqli_prepare($connection, $sql);
            mysqli_stmt_bind_param($stmt, "s", $enteredUsername);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result) {
                $row = mysqli_fetch_assoc($result);
                
                if ($row) {
                    $storedUsername = $row['username'];
                    $storedPassword = $row['password'];

                    if ($enteredUsername === $storedUsername && $enteredPassword === $storedPassword) {
                        // Username and password match, log in
                        header("Location: index.php");
                        exit();
                    } else {
                        $error = "Incorrect Username or Password";
                    }
                } else {
                    $error = "Incorrect Username or Password";
                }
            } else {
                $error = "Database Error";
            }
        }
    }
}
?>



                                
                                        <div class="container">
        <div class="p-2 mt-5">
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <form action="" method="POST">
                <div class="mb-3 auth-form-group-custom mb-4">
                    <i class="ri-user-2-line auti-custom-input-icon"></i>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                </div>
                <div class="mb-3 auth-form-group-custom mb-4">
                    <i class="ri-lock-2-line auti-custom-input-icon"></i>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="mt-4 text-center">
                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                </div>
            </form>
</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="authentication-bg">
                        <div class="bg-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/nazox-ajax/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Aug 2023 13:10:05 GMT -->

</html>