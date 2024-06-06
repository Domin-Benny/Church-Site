<?php
include ("connection.php");

// Confirm Delete
if (isset($_POST['name']) && isset($_POST['confirm'])) {
    $name = $_POST['name'];
    $confirmation = $_POST['confirm'];

    if ($confirmation === 'yes') {
        // Delete member from database based on name
        $stmt = $conn->prepare("DELETE FROM members WHERE name = ?");
        $stmt->bind_param("s", $name);
        if ($stmt->execute()) {
            header("Location: all-members.php");
            exit;
        } else {
            echo "Error deleting member: " . $conn->error;
        }
    } else {
        echo "Deletion canceled.";
    }
} else {
    echo "Invalid request.";
}