<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Curd</title>
	<script type="text/javascript" src="js/jquery331.min.js"></script>
	<script type="text/javascript" src="js/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="css/jquery.modal.min.css" />
	
<style type="text/css">
table { border-collapse: collapse; text-align:center;}
table, th, td { border: 1px solid black;}
td,th {padding:5px;}
button {margin:5px; padding:5px; border-radius: 6px; cursor:pointer;}
a {text-decoration:none; color:black;}
input {padding:5px; margin-bottom:5px;}
</style>

</head>
<body>

<button onclick="clearall()">Add Person</button>

<div id="addmodal" class="modal">
	<form id="addform" action="">
	<input type="text" id="name" placeholder="name" /><br>
	<input type="text" id="age" placeholder="age" /><br>
	<input type="text" id="profession" placeholder="profession" /><br>
	<button id="save"><a href="" rel="modal:close">Save</a></button>
	</form>
</div>

<div id="deletemodal" class="modal">
	<h4 style="color:firebrick;">Are you sure to Delete this ?</h4>
	<button id="delete" onclick="deleteconfirm()" rel="modal:close"><a style="color:LimeGreen;" href="" rel="modal:close">Yes</a></button>
	<button><a href="" style="color:crimson;" rel="modal:close">No</a></button>
</div>

<div id="editmodal" class="modal">

</div>

<?php include('main_form.php') ?>

<script type="text/javascript">
	$(document).ready(function(){
		$("button#save").click(function(){
			var name = document.getElementById("name").value;
			var age = document.getElementById("age").value;
			var profession = document.getElementById("profession").value;
			$("#main_content").load("add_person.php", {
				name : name,
				age : age,
				profession : profession
			});
		});
		
	});

	
	var id_delete;
	function deletedata(id)
	{
		$('#deletemodal').modal();
		this.id_delete = id;

	}
	
	function deleteconfirm()
	{
		$("#main_content").load("delete.php", {
			id : id_delete
		});
	}
	
	function clearall()
	{
		$('#addform').trigger("reset");
		$('#addmodal').modal();
	}

	function editdata(id,r)
	{
		var name = document.getElementById("data-table").rows[r].cells[0].innerHTML;
		var age = document.getElementById("data-table").rows[r].cells[1].innerHTML;
		var profession = document.getElementById("data-table").rows[r].cells[2].innerHTML;
		var eform = '<form id="editform" action="">';
		eform+='<input type="hidden" id="id-edit" /><br>';
		eform+='<input type="text" id="name-edit" /><br>';
		eform+='<input type="text" id="age-edit" /><br>';
		eform+='<input type="text" id="profession-edit" /><br>';
		eform+='<button id="update" onclick="updatedata()"><a href="" rel="modal:close">Update</a></button>';
		eform+='</form>';
		$('#editmodal').html(eform);
		$('input#id-edit').val(id);
		$('input#name-edit').val(name);
		$('input#age-edit').val(age);
		$('input#profession-edit').val(profession);
		$('#editmodal').modal();
	}
	
	function updatedata()
	{
		var id = document.getElementById("id-edit").value;
		var name = document.getElementById("name-edit").value;
		var age = document.getElementById("age-edit").value;
		var profession = document.getElementById("profession-edit").value;
		
		$("#main_content").load("update_person.php", {
			id : id,
			name : name,
			age : age,
			profession : profession
		});
	}
	

</script>

</body>
</html>