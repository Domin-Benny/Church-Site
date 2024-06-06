<?php
include ("connection.php");
// Update Member
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // Fetch member details from database based on name
    $stmt = $conn->prepare("SELECT * FROM members WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Member found, populate form with member details
        $row = $result->fetch_assoc();
        // Display edit form with pre-filled data
        ?>
        <form action="update-member.php" method="POST">
            <!-- Populate form fields with member details -->
            <input type="hidden" name="old_name" value="<?php echo $row['name']; ?>">
            <!-- Add other input fields here for editing -->
	<!-- Modal code -->
	<div class="modal fade" id="edit-member-modal" tabindex="-1" aria-labelledby="edit-member-modal-label" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="edit-member-modal-label">Edit Member</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!-- Form to update member details -->
					<form action="update-member.php" method="post">
						<input type="hidden" name="name" value="<?php echo $member['name']; ?>">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" name="name" value="<?php echo $member['name']; ?>">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" value="<?php echo $member['email']; ?>">
						</div>
						<!-- Add more form fields as needed -->
						<button type="submit" class="btn btn-primary">Save Changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>

            <!-- For example: <input type="text" name="new_name" value="<?php echo $row['name']; ?>"> -->
            <button type="submit">Update Member</button>
        </form>
        <?php
    } else {
        echo "Member not found.";
    }
} else {
    echo "Name parameter not provided.";
}

