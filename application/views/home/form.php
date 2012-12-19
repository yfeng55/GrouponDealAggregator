<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo URL::to_asset('css/style.css') ?>">
<title>Groupon API</title>
</head>
<body>

<div id="form">

<form action="<?php echo URL::to('groupon/results') ?>" method="get">
<h1>Search for Relevant Deals on Groupon:</h1>

<h2>Zip Code:</h2>
<input type='text' name='zip'  class="formitem"/>

<br/><br/>

<h2>Deal Type:</h2>
<select name="channel" class="formitem">
	<option value="getaways">getaways</option>
	<option value="goods">goods</option>
	<option value="occasions">occasions</option>
</select>

<br/><br/>

<input type='submit' class="button">
</form>

</div>

<div id="quicklinks">
	<a href="#" id="90007" class="quicklink">Los Angeles</a>
	<a href="#" id="10036" class="quicklink">New York</a>
	<a href="#" id="60601" class="quicklink">Chicago</a>
</div>

<?php

?>


<br style="clear:both"/>

<div id="ajaxresults"></div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="<?php echo URL::to_asset('js/ajax.js') ?>"></script>
</body>
</html>