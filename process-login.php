<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the username and password (perform your desired validation logic)
    // For example, you can connect to the database and check if the credentials are correct
    $servername = "your_servername";
    $dbname = "your_dbname";
    $dbusername = "your_username";
    $dbpassword = "your_password";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare a SQL statement to select the user with the given username
        $stmt = $conn->prepare("SELECT * FROM admin_credentials WHERE username = :username");
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        // Check if a user with the given username exists
        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify the password
            if (password_verify($password, $user["password"])) {
                // Password is correct, login successful
                echo "Login successful!";
                // Redirect to the desired page
                // header("Location: dashboard.php");
                // exit();
            } else {
                // Invalid password
                echo "Invalid password!";
            }
        } else {
            // User not found
            echo "User not found!";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>
