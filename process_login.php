<?php
// Retrieve submitted data
$submittedUsername = $_POST['username'];
$submittedPassword = $_POST['password'];

// Correct username and password (you can replace these with your actual values)
$correctUsername = 'myuser';
$correctPassword = 'mypassword';

// Check if submitted credentials match
if ($submittedUsername === $correctUsername && $submittedPassword === $correctPassword) {
    // Successful login
    echo 'Welcome, ' . $correctUsername . '!';
    // Now, you can store this information in a separate document (more on that next).
} else {
    // Invalid credentials
    echo 'Incorrect username or password. Please try again.';
}
?>
