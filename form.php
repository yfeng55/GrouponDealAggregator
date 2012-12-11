<!doctype html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Groupon API</title>
</head>
<body>

<div id="form">

<form action='results.php' method="get">
<h1>Search for Relevant Deals on Groupon:</h1>

<h2>Zip Code:</h2>
<input type='text' name='zip'  class="formitem"/>

<br/><br/>

<h2>Type:</h2>
<select name="channel" class="formitem">
	<option value="getaways">getaways</option>
	<option value="goods">goods</option>
	<option value="occasions">occasions</option>
</select>

<br/><br/>

<input type='submit' class="button">
</form>

</div>

</body>
</html>