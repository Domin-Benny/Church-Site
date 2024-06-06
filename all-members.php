<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Membership Dashboard - Admin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<!-- Add this HTML snippet at the top of your body tag, inside the <body> element -->
    <div id="notification-container"></div>

<body id="admin-dashboard">
<?php
?>
<!-- Top bar -->
<div class="top-bar">
    <div class="logo">
        <img src="assets/images/arc-logo.webp" alt="Admin">
    </div>
    <div class="search">
        <input type="text" placeholder="Search...">
        <button id="search-button"><i class="fas fa-search"></i></button>
    </div>
</div>

<!-- Sidebar (Top bar) -->
<div class="dropdown sidebar">
    <a href="dashboard.php" class="active"><i class="fas fa-home"></i> Dashboard</a>
    <a class="dropdown-toggle active" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-users"></i> Members </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li></li><a id="add-member-link" href="form.php"><i class="fas fa-user-plus"></i> Add member</a></li>
        <li><a id="all-members-link" href="all-members.php"><i class="fas fa-users"></i>Manage Members</a> </li>
    </ul>
    <a href="#"><i class="fas fa-users"></i> Groups</a>
    <a href="#"><i class="far fa-calendar-alt"></i> Events</a>
    <a href="#"><i class="fas fa-cog"></i> Settings</a>
</div>

<!-- Page content -->
<div class="content">
   

    
    
  <!-- Member table container -->
  <div id="member-table-container">
    <div class="table-responsive">
    <table class="table table-striped table-hover custom-table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Ministry</th>
			<th>Department</th>
			<th>Tithe Number</th>
			<th>Profile</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="member-table-body">
		<!-- Placeholder for dynamic content -->
		<?php include ("fetch-members.php"); ?>
	</tbody>
</table>
    <!--
         <td>
                <a href="edit-member.php?name=<?php echo urlencode($row["name"]); ?>" class="btn btn-primary">Edit</a>
                <a href="delete-member.php?name=<?php echo urlencode($row["name"]); ?>" class="btn btn-danger">Delete</a>
                </td>
    -->
    </div>
</div>



</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="script.js"></script>
<script>

</script>
</body>
</html>