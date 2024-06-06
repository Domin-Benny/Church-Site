<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<style>

section {
	border: 1px solid #ccc;
	padding: 20px;
	margin-bottom: 40px; /* Increased margin-bottom to create more space between sections */
}

label {
	display: block;
	margin-bottom: 10px;
	font-weight: bold; /* Added font-weight to make labels stand out */
}

span {
	display: block;
	margin-bottom: 20px;
}

.pagination {
	text-align: center;
	margin-top: 40px; /* Increased margin-top to create more space before pagination */
}

.pagination a {
	text-decoration: none;
	color: #337ab7;
	padding: 10px; /* Added padding to make pagination links more clickable */
	border-radius: 5px; /* Added border-radius to give pagination links a rounded corner */
}

.pagination a:hover {
	color: #23527c;
	background-color: #f5f5f5; /* Added background-color to give pagination links a hover effect */
}

</style>
</head>
<?php
include("connection.php");


// Retrieve data from database
$sql = "SELECT * FROM members";
$result = $conn->query($sql);


// Display data in a form-like format
echo "<h2>Member Report</h2>";

while($row = $result->fetch_assoc()) {
echo "<section>";
echo "<h3>Personal Details</h3>";
echo "<label>Name:</label> <span>" . $row["name"] . "</span>";
echo "<label>DOB:</label> <span>" . $row["dob"] . "</span>";
echo "<label>Gender:</label> <span>" . $row["gender"] . "</span>";
echo "<label>Address:</label> <span>" . $row["address"] . "</span>";
echo "</section>";

echo "<section>";
echo "<h3>Church Details</h3>";
echo "<label>Registry Date:</label> <span>" . $row["registry_date"] . "</span>";
echo "<label>Ministry:</label> <span>" . $row["ministry"] . "</span>";
echo "<label>Department:</label> <span>" . $row["department"] . "</span>";
echo "<label>Tithe Number:</label> <span>" . $row["tithe_number"] . "</span>";
echo "</section>";

echo "<section>";
echo "<h3>Additional Details</h3>";
echo "<label>Baptised:</label> <span>" . ($row["baptised"] == 1 ? "Yes" : "No") . "</span>";
echo "<label>Baptism Date:</label> <span>" . $row["baptism_date"] . "</span>";
echo "<label>Spouse Name:</label> <span>" . $row["spouse_name"] . "</span>";
echo "<label>Children Number:</label> <span>" . $row["children_number"] . "</span>";
echo "<label>Emergency Contact:</label> <span>" . $row["emergency_contact"] . "</span>";
echo "</section>";

echo "<section>";
echo "<h3>Profile</h3>";
echo "<label>Profile Image:</label> <span>" . $row["profile_image"] . "</span>";
echo "</section>";
}


// Close connection
$conn->close();
