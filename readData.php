<?php  
	require "libs/loadSheet.php";
    require "libs/sheetData.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Momento 0</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/readData.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="js/tableHeadFixer.js"></script>
	<script type="text/javascript" src="js/readData.js"></script>
	<style>
			#parent {
				height: 1000px;
			}
		</style>
	<script>
		$(document).ready(function() {
			$("#fixTable").tableHeadFixer();
		});
	</script>
</head>
<body>
	<form >
		<label for="file"> Cargar Excel</label>
		<input type="file" id="file" name="file" multiple>
	</form>
	<div id="parent">
	<table id="fixTable" class="table">
		<thead>
			<tr>
				<?php
                    require "libs/fillHeaders.php"
				 ?>	
			</tr>
		</thead>
		<tbody>
			<?php
                require "libs/fillBody.php"
			?>				 
		</tbody>
	</table>
	</div>
</body>
</html>