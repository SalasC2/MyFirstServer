<?php
// Here we get all the information from the fields sent over by the form.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'christiansalas96@gmail.com';
$subject = 'The subject';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: christiansalas96@gmail.com';

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message) or die('Error sending Mail'); //This method sends the mail.
echo "Your email was sent!"; // success message
} else {
  echo "Invalid Email, please provide a correct email"
}
    // Only process POST reqeusts.
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Get the form fields and remove whitespace.
    //     $name = $_POST["name"];
		// 		// $name = str_replace(array("\r","\n"),array(" "," "),$name);
    //     $email = $_POST["email"];
    //     $message = $_POST["message"];
    //
    //     // Check that data was sent to the mailer.
    //     if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         // Set a 400 (bad request) response code and exit.
    //         http_response_code(400);
    //         echo "Oops! There was a problem with your submission. Please complete the form and try again.";
    //         exit;
    //     }
    //
    //     // Set the recipient email address.
    //     $recipient = "christiansalas96@gmail.com";
    //
    //     // Set the email subject.
    //     $subject = "New contact from $name";
    //
    //     // Build the email content.
    //     $email_content = "Name: $name\n";
    //     $email_content .= "Email: $email\n\n";
    //     $email_content .= "Message:\n$message\n";
    //
    //     // Build the email headers.
    //     $email_headers = "From: $name <$email>";
    //
    //     // Send the email.
    //     if (mail($recipient, $subject, $email_content, $email_headers)) {
    //         // Set a 200 (okay) response code.
    //         http_response_code(200);
    //         $response = "Thank You! Your message has been sent.";
    //     } else {
    //         // Set a 500 (internal server error) response code.
    //         http_response_code(500);
    //         $response =  "Oops! Something went wrong and we couldn't send your message.";
    //     }
    //
    // } else {
    //     // Not a POST request, set a 403 (forbidden) response code.
    //     http_response_code(403);
    //     $response = "There was a problem with your submission, please try again.";
    // }

?>
