<!DOCTYPE html>
<html>
<head>
	<title>Compiler</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="user.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		    <div class="navbar-header">
			    <a class="navbar-brand" href="#">Online Compiler</a>
		    </div>
		</div>
	</nav>
	<div class="container">
		<form action="#">
			<div class="form-group">
				<label for="lang">Language:</label>
				<select class="form-control" id="lang">
				    <option>C</option>
					<option>CPP</option>
					<option>PYTHON</option>
					<option>JAVA</option>
					<option>PHP</option>
					<option>RUBY</option>
				</select>
			</div>
		  	<div class="form-group">
				<label for="source">Source Code:</label>
				<textarea class="form-control" rows="10" id="source" required></textarea>
		  	</div>
			<button type="submit" id="compile" class="btn">Run</button>
		</form>
	</div>
	<br><br>
	<div class="container">
		<pre id="result">
You haven't yet compiled
		</pre>
	</div>
</body>
</html>
