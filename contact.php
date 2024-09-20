<?php
include 'includes/header.php';


if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["name"];
    $email = $_POST["email"];
    $message_text = $_POST["message_text"];

    // Insert the message into the database
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$user_name', '$email', '$message_text')";

    if ($con->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
<div class="imgcontact">

<div class="contact">
    <h1>Contact</h1>

    <form id="contact-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label>Name:</label>
        <input type="text" id="name" name="name"placeholder="Enter your Name" required>

        <label>Email:</label>   
        <input type="text" id="email" name="email" placeholder="Enter your Email" required>

        <label>Message:</label>
        <textarea type="text" id="message" name="message_text" placeholder="Enter your Message" rows="4" required></textarea>
 
<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</div>


<?php
include 'includes/footer.php';
?>
