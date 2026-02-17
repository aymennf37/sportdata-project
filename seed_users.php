<?php
require_once 'config/Database.php';

$database = new Database();
$db = $database->connect();

echo "<h1>Fixing User Accounts...</h1>";

// 1. Admin Account
$adminPass = password_hash('admin123', PASSWORD_DEFAULT);
$adminEmail = 'admin@set.com';

// Update if exists, Insert if not
$query = "INSERT INTO users (username, email, password, role) 
          VALUES ('Admin', :email, :pass, 'admin') 
          ON DUPLICATE KEY UPDATE password = :pass";
$stmt = $db->prepare($query);
$stmt->bindParam(':email', $adminEmail);
$stmt->bindParam(':pass', $adminPass);
if ($stmt->execute()) {
    echo "<p style='color:green'>✅ Admin account fixed (Password: admin123)</p>";
}
else {
    echo "<p style='color:red'>❌ Error fixing Admin account</p>";
}

// 2. Analyst Account
$analystPass = password_hash('analyst123', PASSWORD_DEFAULT);
$analystEmail = 'analyst@set.com';

$query = "INSERT INTO users (username, email, password, role) 
          VALUES ('Analyst', :email, :pass, 'analyst') 
          ON DUPLICATE KEY UPDATE password = :pass";
$stmt = $db->prepare($query);
$stmt->bindParam(':email', $analystEmail);
$stmt->bindParam(':pass', $analystPass);
if ($stmt->execute()) {
    echo "<p style='color:green'>✅ Analyst account fixed (Password: analyst123)</p>";
}
else {
    echo "<p style='color:red'>❌ Error fixing Analyst account</p>";
}

echo "<br><a href='login.php'>Go to Login Page</a>";
