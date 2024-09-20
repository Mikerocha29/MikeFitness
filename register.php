<?php
    include 'includes/header.php';
?>




<?php

    // Declare variables
    $name = $email = $password = '';
    $nameErr = $emailErr = $passwordErr = '';

    if(isset($_POST['submit'])) {
        // Validate Name
        if(empty($_POST['name'])) {
            $nameErr = 'Must enter a Name';
        }
        else {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

       // Validate Email
        if(empty($_POST['email'])) {
            $emailErr = 'Email is required';
        }
        else {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        // Validate password
        if(empty($_POST['password'])) {
            $passwordErr = 'Must enter a Password';
        }
        else {
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if(empty($nameErr) && empty($emailErr) && empty($passwordErr)) {
            // Add to the database
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            if(mysqli_query($con, $sql)) {
                
                header('Location: members.php');
            }
            else {
                // Error
                echo 'Error: ' . mysqli_error($con);
            }
        }
    }
?>




<?php echo isset($name) ? $name : ''; ?>
<div class="img-register">
<div class="register">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    
        <h1>Register Members </h1>
            <label>Name</label>
            <input type="text" <?php echo !$nameErr ?: 'is-invalid'; ?>" id="name" name="name" placeholder="Enter your Name" required value="<?php echo $name; ?>">
        
        
            <label>Email:</label> 
            <input type="text" <?php echo !$emailErr ?: 'is-invalid'; ?>" id="email" name="email" placeholder="Enter your Email" required value="<?php echo $email; ?>">
        
        
            <label>Password</label>
            <input type="password" <?php echo !$passwordErr ?: 'is-invalid'; ?>" id="password" name="password" placeholder="Enter your Password" required value="<?php echo $password; ?>">
       
            <input type="submit" name="submit" class="btn btn-primary" value="Send" >
</div>   
</div>
</form>








<?php
    include 'includes/footer.php';
?>