<?php
// Initialize error array and processed flag
$errors = [];
$processed = false;

if (isset($_POST['add_students'])) {
    include "dbconect.php";

    // Validate first name
    if (empty($_POST['firstName'])) {
        $errors[] = "First name is required";
    } else {
        $firstName = trim($_POST['firstName']);
        // Check if contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
            $errors[] = "First name should contain only letters and spaces";
        }
    }

    // Validate last name
    if (empty($_POST['lastName'])) {
        $errors[] = "Last name is required";
    } else {
        $lastName = trim($_POST['lastName']);
        // Check if contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
            $errors[] = "Last name should contain only letters and spaces";
        }
    }

    // Validate age
    if (empty($_POST['age'])) {
        $errors[] = "Age is required";
    } else {
        $age = trim($_POST['age']);
        // Check if it's a number and within reasonable bounds
        if (!is_numeric($age) || $age < 1 || $age > 120) {
            $errors[] = "Age must be a number between 1 and 120";
        }
    }

    // If no errors, proceed with database insertion
    if (empty($errors)) {
        // Sanitize data for SQL injection prevention
        $firstName = mysqli_real_escape_string($connection, $firstName);
        $lastName = mysqli_real_escape_string($connection, $lastName);
        $age = mysqli_real_escape_string($connection, $age);

        $query = "INSERT INTO `students` (`first_name`, `last_name`, `age`) VALUES ('$firstName', '$lastName', '$age')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            $processed = true;
            // Set success message in session for display after redirect
            session_start();
            $_SESSION['success_message'] = "Student added successfully!";
            header("Location: index.php");
            exit();
        } else {
            $errors[] = "Database error: " . mysqli_error($connection);
        }
    }

    // If there were errors, format them for display
    if (!empty($errors)) {
        $error_message = "<div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4'>";
        $error_message .= "<strong class='font-bold'>Please fix these errors:</strong>";
        $error_message .= "<ul class='list-disc pl-5'>";

        foreach ($errors as $error) {
            $error_message .= "<li>$error</li>";
        }

        $error_message .= "</ul></div>";

        // Store error message in session to display after redirect
        session_start();
        $_SESSION['error_message'] = $error_message;
        header("Location: index.php");
        exit();
    }
}
?>