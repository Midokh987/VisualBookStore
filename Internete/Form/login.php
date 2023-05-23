<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "online_library";

$db = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = validate_input($_POST["email"]);
    $password = validate_input($_POST["password"]);

    // Retrieve the user data from the database
    $stmt = $db->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Check if the password is correct
        if (password_verify($password, $user["password"])) {
            // Start a new session and store the user ID
            session_start();
            $_SESSION["user_id"] = $user["id"];
            // Redirect the user to the dashboard page
            header("Location: internet.html");
            exit;
        } else {
            // Incorrect password
            $error = "password";
        }
    } else {
        // Email not found
        $error = "email";
    }

    // Redirect back to login page with error message
    header("Location: login.html?error=" . $error . "&email=" . urlencode($email));
    exit;
}

// Close the database connection
$db->close();

// Function to validate input fields
function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>