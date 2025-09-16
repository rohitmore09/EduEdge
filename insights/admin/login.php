<?php
session_start();
require_once '../api/config.php';

$error = "";

// Redirect if already logged in
if (isset($_SESSION['nj_admin'])) {
    header('Location: ' . $admin_url);
    exit;
}

// Login form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // If passwords are stored in plain text
        if ($user['password'] === $password) {
            $_SESSION['nj_admin'] = $user['username'];
            header('Location: ' . $admin_url);
            exit;
        } else {
            $error = "Invalid username or password";
        }

        // If using password_hash(), use this instead:
        /*
        if (password_verify($password, $user['password'])) {
            $_SESSION['nj_admin'] = $user['username'];
            header('Location: ' . $admin_url);
            exit;
        } else {
            $error = "Invalid username or password";
        }
        */
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="../assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>LOGIN</b></h1>
                                    </div>
                                    <form class="user" method="POST" action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" placeholder="Enter Username" required name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" placeholder="Password" required name="password">
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Login">
                                        <?php if (!empty($error)) : ?>
                                            <p class="text-danger mt-3 text-center"><?= htmlspecialchars($error) ?></p>
                                        <?php endif; ?>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/admin/vendor/jquery/jquery.min.js"></script>
</body>
</html>
