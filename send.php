
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $order = htmlspecialchars($_POST["order"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "info@asemanelegance.com"; // Change this to your email
    $subject = "Support Request from $name";
    $body = "Name: $name\nEmail: $email\nOrder ID: $order\nMessage:\n$message";
    $headers = "From: $email";

	if (mail($to, $subject, $body, $headers)) {
		header("Location: thank-you.html");
		exit();
	} else {
		echo "There was an error sending your message.";
	}

}
?>
