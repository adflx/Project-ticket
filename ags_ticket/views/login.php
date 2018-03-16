<!DOCTYPE html>
<html lang="en">

<head>
		<?php
	include "metaconfig.php";
	?>
	<title>AGS Ticketing</title>
		<?php
		include "bootstrapconfig.php";
		?>
	
</head>

<body>
<div class="container-fluid">

	

	<div>
		<?php
			include "title.php";
			?>
		
	</div>		
	
	
	
		<div class="panel panel-default">

	<div class="panel-heading">
	
	<h1 class="text-center">Login</h1>
	</div>
	
	<div class="panel-body">
	<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-4 col-md-offset-4">
		<form action="" method="post">
				<?php if(isset($_SESSION['error'])) {
                echo '<p style="color: red">';
				echo $_SESSION['error'];
				echo '</p>';
				}
	
				?>
				<p>Username: 
				<br/><input type="text" name="idnum" required="required"/>
				</p>
				<p>Password:
					<br /><input type="password" name="password" required="required"/>
				</p>	
				
				<p>
					<input type="submit" value="Login" />
				</p>
		</form>
	</div>
	
	<div class="col-sm-1">
	</div>
	
	</div>
	</div>
	<div class="panel-footer">
	 <?php 
	 //include "footer.php";
	 ?>
	</div>
	
	</div>
	
	</div>
	
	
</body>
</html>