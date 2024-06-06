<?php
include ("connection.php");

// Delete Member
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // Fetch member details from database based on name
    $stmt = $conn->prepare("SELECT * FROM members WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Member found, display confirmation message
        ?>
        <h3>Are you sure you want to delete the member "<?php echo htmlspecialchars($name); ?>"?</h3>
        <form action="confirm-delete-member.php" method="POST">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <button type="submit" name="confirm" value="yes">Yes</button>
            <button type="submit" name="confirm" value="no">No</button>
        </form>
        <?php
    } else {
        echo "Member not found.";
    }
} else {
    echo "Name parameter not provided.";
}