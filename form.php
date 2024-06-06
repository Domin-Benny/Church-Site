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
    <!-- Add member form -->
    <!-- Add member form -->
<form id="add-member-form" class="form-container" action="add-member.php" method="POST" enctype="multipart/form-data" >
    <h2 class="form-title">REGISTRATION DETAILS</h2>
    <div class="form-section">
        <div class="personal-details">
            <h3>Personal Details</h3>
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
            <label for="dob" class="form-label">Date of Birth:</label>
            <input type="date" id="dob" name="dob" class="form-control" required>
            <label for="gender" class="form-label">Gender:</label>
            <select id="gender" name="gender" class="form-select" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <label for="address" class="form-label">Address:</label>
            <input type="text" id="address" name="address" class="form-control" required>
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
            <label for="contact" class="form-label">Contact:</label>
            <input type="tel" id="contact" name="contact" class="form-control" required>
        </div>
        <div class="church-details">
            <h3>Church Details</h3>
            <label for="registry-date" class="form-label">Registry Date:</label>
            <input type="date" id="registry-date" name="registry-date" class="form-control" required>
            <label for="ministry" class="form-label">Ministry:</label>
            <input type="text" id="ministry" name="ministry" class="form-control">
            <label for="department" class="form-label">Department:</label>
            <input type="text" id="department" name="department" class="form-control">
            <label for="tithe-number" class="form-label">Tithe Number:</label>
            <input type="text" id="tithe-number" name="tithe-number" class="form-control" required><br><br>
            <label for="baptised" class="form-check-label">Baptised:</label>
            <input type="checkbox" id="baptised" name="baptised" class="form-check-input" onchange="toggleBaptismDate()">
            <label for="baptism-date" id="baptism-date-label" class="form-label" style="display: none;">Baptism Date:</label>
            <input type="date" id="baptism-date" name="baptism-date" class="form-control" style="display: none;">
        </div>
        <div class="family-details">
            <h3>Family Details</h3>
            <label for="spouse-name" class="form-label">Spouse Name:</label>
            <input type="text" id="spouse-name" name="spouse-name" class="form-control">
            <label for="children-number" class="form-label">Children Number:</label>
            <input type="number" id="children-number" name="children-number" class="form-control">
            <label for="emergency-contact" class="form-label">Emergency Contact:</label>
            <input type="tel" id="emergency-contact" name="emergency-contact" class="form-control" required>
            <label for="passport-picture" class="form-label">Passport Picture:</label>
            <input type="file" id="passport-picture" name="passport-picture" class="form-control" accept="image/*">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Add Member</button>
</div>
</form>

   
  



</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="script.js"></script>
<script>

</script>
</body>
</html>