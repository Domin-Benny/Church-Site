<?php
include("connection.php");
// Fetch all members
$sql = "SELECT * FROM members";
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    // Check if there are members
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["contact"] . "</td>";
            echo "<td>" . $row["ministry"] . "</td>";
            echo "<td>" . $row["department"] . "</td>";
            echo "<td>" . $row["tithe_number"] . "</td>";
            echo "<td><img src='/arc-c/upfiles/" . $row["profile_image"] . "' alt='Profile Picture' style='max-width: 50px; max-height: 50px;'></td>";
                  echo "<td>";
            echo "<a href='update-member.php?name=" . urlencode($row["name"]) . "' class='btn btn-primary'>Edit</a>";
            echo "<a href='delete-member.php?name=" . urlencode($row["name"]) . "' class='btn btn-danger'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        
        
         
            // Output other columns similarly
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='10'>0 results</td></tr>";
    }
}

// Close connection
$conn->close();
