<?php require_once "database.php";

session_start();

$Username = $_POST ['username'];
$Password = $_POST['password'];
$Query = "SELECT * FROM users WHERE Username = '$Username' AND Pass = '$Password'";
$Result = mysqli_query($Connection, $Query);
$Rows = mysqli_num_rows($Result);


// Retrieve hashed password from the database
$stmt = $Connection->prepare("SELECT pass FROM users WHERE username = ?");
$stmt->bind_param("s", $Username);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $encrypt_password = $row['pass'];

    // Verify the entered password
    if (password_verify($Password, $encrypt_password)) {
        $_SESSION['username'] = $Username;
        header("Location: admin.php");
    }
}

?>