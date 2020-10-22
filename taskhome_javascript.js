$(document).ready(function(){//this ensures the page is loaded before attempting any .js stuff
alert("Hello!");//this lets me know the .js is connected correctly
  
 //I cannot access list elements by class to modify after they are created and I have no idea why
$('.btn').submit(function(){
	alert("SUCCESS");
	event.preventDefault();	
});

//This creates the new task and adds it to the list  
$('#add_task_form').submit(function(){
	var task = $("#new_task");
	var list_el = "<li> <div class='input-group'> <input class='form-control' type='text' placeholder='"+ task.val() +"' readonly=''><div class='input-group-append'><input type='submit' class='btn input-group-text' name='claim' value='claim'/></div></div></li>";
	$("#task_list").append(list_el);
	
	$('.btn').submit(function(){
	alert("SUCCESS");
	event.preventDefault();	
	});
	
	console.log(document);
    event.preventDefault();
});

});//documentReady event

//Note: I attempted .on notation with no additional success
