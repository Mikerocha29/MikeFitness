<?php
    include 'includes/header.php';
?>

<h1> Edit </h1>
<?php

    if(isset($_GET['id']))
	{
		$Id = $_GET['id'];
		$query = "SELECT * FROM users WHERE Id = '$Id' ";
		$result = mysqli_query($con, $query);
		
		if(mysqli_num_rows($result) > 0)
		{
			$user = mysqli_fetch_array($result)	;	
			
			if(isset($_POST['update']))
			{
				$id = $_POST['Id'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				
				
				$sql = "UPDATE users SET name = '$name', email = '$email'  WHERE Id = '$id' ";
				$result = mysqli_query($con, $sql);	
				
				header("Location: members.php");
            	exit();
				
			}			
		}						
	}



?>

<form method="post">
		<div class="row mb-3">
						<label class="col-sm-3 col-form-label"> ID  </label>
				<div class="col-sm-6">
					<input type="text"  class="form-control" name="Id" value=" <?= $user['Id']; ?>">
				</div>
		</div>
		<div class="row mb-3">
				<label class="col-sm-3 col-form-label"> Name  </label>
				<div class="col-sm-6">
						<input type="text" class="form-control" name="name" value="<?= $user['name']; ?>">
				</div>
		</div>
		<div class="row mb-3">
				<label class="col-sm-3 col-form-label"> Email  </label>
				<div class="col-sm-6">
						<input type="text" class="form-control" name="email" value="<?= $user['email']; ?>">
				</div>
		</div>
		<div class="row mb-3">
				<div class="offset-sm-3 col-sm-3 d=grid">
						<button type="submit" name="update" class="btn btn-primary"> Update </button>
				</div>
		</div>

</form>


<?php
    include 'includes/footer.php';
?>