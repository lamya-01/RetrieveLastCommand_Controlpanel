<?php
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "robotmovement";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['command'])) {
        $command = $_POST['command'];

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO direction (robotDirection) VALUES (?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("s", $command);

        if ($stmt->execute()) {
            echo "Command saved successfully. ";
        } else {
            echo "Execute failed: " . $stmt->error;
        }

        $stmt->close();
    } 
    // Retrieve the last command
    $result = $conn->query("SELECT robotDirection FROM direction ORDER BY id DESC LIMIT 1");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Last command: " . $row['robotDirection'];
    } else {
        echo "No commands found.";
    }

    $conn->close();
?>