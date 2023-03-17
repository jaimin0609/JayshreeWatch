<?php
if(isset($_POST['submit'])){
   $to = "jaimin06091995@gmail.com"; // Enter your email address here
   $from = $_POST['email']; // This will be the user's email address
   $subject = "Newsletter subscription request";
   $message = "Please add me to your newsletter list.";
   $headers = "From:" . $from;
   mail($to,$subject,$message,$headers);
   echo "Thank you for subscribing to our newsletter!";
}
?>

<form action="" method="post">
   <label for="email">Email Address:</label>
   <input type="email" id="email" name="email" required>
   <input type="submit" name="submit" value="Subscribe">
</form>
