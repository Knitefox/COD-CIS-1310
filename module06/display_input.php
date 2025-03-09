<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Submitted Form Data</h2>";
    
    echo "<strong>Full Name:</strong> " . htmlspecialchars($_POST['full_name']) . "<br>";
    echo "<strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "<br>";
    echo "<strong>Password:</strong> " . htmlspecialchars($_POST['password']) . "<br>";
    echo "<strong>Date of Birth:</strong> " . htmlspecialchars($_POST['dob']) . "<br>";
    
    if (isset($_POST['hobby'])) {
        echo "<strong>Favorite Hobby:</strong> " . htmlspecialchars($_POST['hobby']) . "<br>";
    }
    
    echo "<strong>Preferred Programming Language:</strong> " . htmlspecialchars($_POST['language']) . "<br>";
    
    if (!empty($_POST['comments'])) {
        echo "<strong>Comments/Feedback:</strong> " . nl2br(htmlspecialchars($_POST['comments'])) . "<br>";
    }
    
    if (isset($_POST['agree'])) {
        echo "<strong>Agreement:</strong> Accepted";
    } else {
        echo "<strong>Agreement:</strong> Not Accepted";
    }
} else {
    echo "<p>No form data submitted.</p>";
}
?>
