<?php
$username = $_POST['username'];
$password = $_POST['password'];
$mobile   = $_POST['mobile'];

// Check empty fields
if (empty($username) || empty($password) || empty($mobile)) {
    echo "⚠️ All fields are required. <a href='alumne.html'>Go back</a>";
    exit();
}

// Dummy login details (replace with DB later)
$validUser = "deepak";
$validPass = "1234";
$validMobile = "9894207827";

// Check login
if ($username == $validUser && $password == $validPass && $mobile == $validMobile) {
    // ✅ Redirect to your Alumni form page
    header("Location: bio.html");
    exit();
} else {
    echo "❌ Invalid login details. <a href='alumne.html'>Try again</a>";
}
?>

