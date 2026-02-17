<?php
require_once 'controllers/AuthController.php';

$auth = new AuthController();
$error = $auth->login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SET Sports</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body style="background-color: #f0f2f5;">

    <nav class="navbar">
        <div class="logo">
            <a href="index.php" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
                <i class="fas fa-trophy" style="margin-right: 10px; color: var(--primary-color);"></i> SET
            </a>
        </div>
        <div>
            <a href="index.php" class="btn-outline">Back to Home</a>
        </div>
    </nav>

    <div class="login-container">
        <h2><i class="fas fa-lock"></i> Secure Login</h2>
        
        <?php if ($error): ?>
            <div class="alert">
                <?php echo $error; ?>
            </div>
        <?php
endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" required placeholder="admin@set.com">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required placeholder="••••••••">
            </div>

            <button type="submit" class="btn-red" style="width: 100%; border: none; padding: 0.8rem; font-size: 1rem; cursor: pointer;">
                Login
            </button>
        </form>
        
        <div style="margin-top: 1rem; text-align: center; font-size: 0.9rem; color: #666;">
            <p>Demo Credentials:</p>
            <p>Admin: admin@set.com / admin123</p>
            <p>Analyst: analyst@set.com / analyst123</p>
        </div>
    </div>

</body>
</html>
