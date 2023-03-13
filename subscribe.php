<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Save the email address to your database or email marketing service
    echo "Thank you for subscribing!";
  } else {
    echo "Invalid email address";
  }
}
?>