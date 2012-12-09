<!doctype html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Groupon API</title>
</head>
<body>

<form action='results.php' method="get">
<em><h2>Type in the Groupon Type or Zip code to get relevant search results from Groupon:</em></h2><br/>

Zip Code:<br/>
<input type='text' name='zip' />

<br/><br/>

Type:<br/>
<select name="channel">
	<option value="getaways">getaways</option>
	<option value="goods">goods</option>
	<option value="occasions">occasions</option>
</select>


<input type='submit'>
</form>

</body>
</html>