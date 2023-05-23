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
    $first_name = validate_input($_POST["first_name"]);
    $last_name = validate_input($_POST["last_name"]);
    $email = validate_input($_POST["email"]);
    $password = validate_input($_POST["password"]);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    // Validate input fields
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
        die("Error: All fields are required");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format");
    }

    // Check if the email already exists in the database
    $check_email_query = "SELECT * FROM user WHERE email='$email'";
    $result = $db->query($check_email_query);
    if ($result->num_rows > 0) {
        die("Error: Email already taken");
    }
}

// Insert the form data into the database
$sql = "INSERT INTO user (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password_hash')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
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