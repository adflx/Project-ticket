<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include "metaconfig.php";
	?>
	<title>Payment Confirmation</title>
	<?php
	include "bootstrapconfig.php";
	?>
</head>
<body>


<div class="container-fluid">
			<div class="container-fluid">
		<?php
			include "title.php";
			include "navin.php";
			
			?>
		
	</div>
	<div class="panel panel-default">
	
		
		<div class="panel-heading">
			<h1 class="text-center">Payment Confirmation</h1>
		</div>
		
		<div class="panel-body">
		<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
	
	<p>Payment Confirmation Successful</p>
	<a href="member.php?request=back" class="btn btn-info btn-block" role="button">
		Back
		</a>
		</div>
		<div class="col-sm-1">
	</div>
	</div>

		</div>
	
		<div class="panel-footer">
		</div>
	
	</div>
</div>


	
</body>
</html>