<?php
    include 'includes/header.php';
    include 'config/connect.php';
?>



<?php

    $query = "SELECT * FROM users";

    $result = mysqli_query($con, $query);

    if(!$result)
    {
        die ("Query failed ". mysqli_error($con));
    }

?>
<div class="img-member">
<div class="member">
    <form>
        
<h1> Members </h1>
    
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td><a href='edit.php?id=" . $row['Id'] . "' class='btn btn-primary'>Edit</a></td>";
            echo "</tr>";
        }
        ?>
        
    </table>
</div>
</div>
</form>




<?php
    include 'includes/footer.php';
?>