<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> 
		ENSE374 Login Page
		</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
			integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>

	<body>
			
			<!--********WHAT THE ELEMENTS SHOULD LOOK LIKE IN VARIOUS STATES *******-->
			<div class="card-body">
			<h2> 5 states of list items </h2>
				<!-- UNCLAIMED TASK -->
				<div class="input-group">
						<input class="form-control" type="text" placeholder="unclaimed task" readonly=""/>
					<div class="input-group-append">
						<input type="submit" class="input-group-text" name = "claim" value="Claim"/>
					</div>
				</div>
				
				
				<!-- CLAIMED TASK BY ME-->
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input"/>
						</div>
					</div>
						<input class="form-control" type="text" placeholder="claimed task by me - INCOMPLETE" readonly=""/>
					<div class="input-group-append">
						<input type="submit" class="input-group-text" name = "abandon" value="Abandon"/>
					</div>
				</div>
				
				
				<!-- COMPLETED BY ME -->
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" checked/>
						</div>
					</div>
						 <p class="form-control"><s>COMPLETED BY ME</s></p>
				</div>
		
		
				<!-- CLAIMED BY ANOTHER -->
				<div class="input-group">
						<input class="form-control" type="text" placeholder="claimed task by another - INCOMPLETE" readonly=""/>
				</div>
				
				<!-- COMPLETED BY ANOTHER -->
				<div class="input-group">
						 <p class="form-control"><s>COMPLETED BY SOMEONE ELSE</s></p>
				</div>
			</div>
		
			<!--**************THE PART THAT ACTUALLY DOES SOMETING*********-->
			<div class="card-body">
				<h2> NON-STATIC ITEMS </h2>
				
				<!-- This is the list that contains the newly created tasks-->
				<ul id="task_list">
				</ul>
				
				<!-- This is the form that allows you to submit new tasks, see .js-->
				<form id="add_task_form">
					<div class="input-group">
						<input type="text" id="new_task" class="form-control" placeholder="Add task"/>
						<div class="input-group-append">
							<input type="submit" class="input-group-text" name="submit" value="submit"/>
						</div>
					</div>
				</form>
				
				
				
			</div>
		
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
				crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
				crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
			integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" 
				crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" 
			integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="taskhome_javascript.js"></script><!-- my .js -->
	</body>
	
</html>