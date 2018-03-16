<!DOCTYPE html>
<html lang="en">
<head>
		<?php
	include "metaconfig.php";
	?>
	<title>AGS Tickets</title>
		<?php
		include "bootstrapconfig.php";
		?>
	
</head>

	
	

<body>

<div class="container-fluid">

	

	
		<?php
			include "title.php";
			include "navin.php";
			?>
		
			
	
	
	
		<div class="panel panel-default">

	<div class="panel-heading">
	
	<h1 class="text-center">Dashboard</h1>
	</div>
	
	<div class="panel-body">
	<div class="row">
	<div class="col-sm-1">
	</div>
		<div class="col-sm-10">
	
		<h3>Ticket Activity</h3>
		<p>Select the starting time and period for the system activity graph</p>
		
		<form class="well form-inline" id="time-frame-form">
			<label> Report Timeline: 
			<input type="text" class="dp input-medium search-queryhasDatepicker" name="start" placeholder="Last month" id="dp1521112753946">
			<button type="button" class="ui-datepicker-trigger">
			</button>
			</label>
			
			<label>
			Period:
				<select>
					<option value="now" seleted="selected">Up to today</option>
					<option value="+7 days">One Week</option>
					<option value="+14 days">Two Weeks </option>
					<option value="+1 month">One Month </option>
					<option value="+3 months">One Quarter </option>
				</select>
			</label>
			<button class="btn" type="submit">Enter</button>
		</form>
		
		<div style="position:relative">
			<div id="line-chart-here" style="height:300px">
				<svg height="316" version="1.1" width="938" xmlns="http://www.w3.org/2000/svg" style="overflow:hidden; position: relative; left: -0.9875px; top: -0.9875px;">
			</div>
		</div>
		
		<h3>Statistics</h3>
		<p>Statistics of tickets organized by department,help topic, and staff.</p>
		<ul class="nav nav-tabs" id="tabular-navigation">
			
			<li>
				<a table-group="dept" href="#">Department</a>
			</li>
			<li>
				<a table-group="topic" href="#">Topics</a>
			</li>
			<li>
				<a table-group="topic" href="#">Staff</a>
			</li>
			
		</ul>
		<div id="table-here">
			<table class="table table-condensed table-striped">
				<thead>
					<tr>
						<th>Department</th>
						<th>Opened</th>
						<th>Assigned</th>
						<th>Overdue</th>
						<th>Closed</th>
						<th>Reopened</th>
						<th>Service Time</th>
						<th>Response Time</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
			
		</div>
		<div class="col-sm-1">
	</div>
	</div>
	</div>
	<div class="panel-footer">
	 <?php 
	 //include footer.php;
	 ?>
	</div>
	
	</div>
	
	</div>
	
	
</body>
</html>