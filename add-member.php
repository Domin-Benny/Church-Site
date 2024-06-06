<?php
include ("connection.php");

// Process form submission
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER['REQUEST_METHOD'] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $address = $conn->real_escape_string($_POST['address']);
    $email = $conn->real_escape_string($_POST['email']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $registry_date = $conn->real_escape_string($_POST['registry-date']);
    $ministry = $conn->real_escape_string($_POST['ministry']);
    $department = $conn->real_escape_string($_POST['department']);
    $tithe_number = $conn->real_escape_string($_POST['tithe-number']);
    $baptised = isset($_POST['baptised']) ? 1 : 0; // Convert checkbox value to 1 or 0
    $baptism_date = isset($_POST['baptised']) ? $conn->real_escape_string($_POST['baptism-date']) : NULL;
    $spouse_name = $conn->real_escape_string($_POST['spouse-name']);
    $children_number = $conn->real_escape_string($_POST['children-number']);
    $emergency_contact = $conn->real_escape_string($_POST['emergency-contact']);

    // Handle file upload for profile image
    if(isset($_FILES["passport-picture"])) {
        $targetDirectory = __DIR__ . DIRECTORY_SEPARATOR . "upfiles" . DIRECTORY_SEPARATOR;
        $targetFile = $targetDirectory . basename($_FILES["passport-picture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        
        // Check file size
        if ($_FILES["passport-picture"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["passport-picture"]["tmp_name"], $targetFile)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["passport-picture"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded for passport picture.";
    }
    
    // If upload was successful, continue with database insertion
    if ($uploadOk != 0) {
        // Insert data into database
        $profile_image = $targetFile; // Assuming you're storing the file path
        $sql = "INSERT INTO members (name, dob, gender, address, email, contact, registry_date, ministry, department, tithe_number, baptised, baptism_date, spouse_name, children_number, emergency_contact, profile_image) VALUES ('$name', '$dob', '$gender', '$address', '$email', '$contact', '$registry_date', '$ministry', '$department', '$tithe_number', '$baptised', '$baptism_date', '$spouse_name', '$children_number', '$emergency_contact', '$profile_image')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close connection
$conn->close();
