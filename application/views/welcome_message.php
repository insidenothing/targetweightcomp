<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to TargetWeightComp.com</title>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	 <script>
$(function() {
$( "#datepicker" ).datepicker({
numberOfMonths: 3,
showButtonPanel: true
});
});
</script>
</head>
<body>
<script>
function updateEnd(){
	var goal = document.querySelector('#goal').value;
	var datepicker = document.querySelector('#datepicker').value;
	var datepicker = document.querySelector('#type').value;
	var direction = document.querySelector('#direction').value;
	document.getElementById('final').innerHTML = goal + ' ' + datepicker + ' ' + type + ' ' + direction;
}
</script>
<div id="container">
	<h1>Welcome to TargetWeightComp.com</h1>

	<div id="body">
		<p>This site will be dedicated to thoes frendly competitions, for what we will call "health points", most will play for around 100.</p>
		<p>So the only questions to answer are:</p>
		<table>
			<tr>
				<td>E-Mail</td>
				<td><input type="input"></td>
			</tr>
			
			<tr>
				<td>Nickname</td>
				<td><input type="input"></td>
			</tr>
			
			<tr>
				<td>Target Date</td>
				<td><input type="text" id="datepicker" onBlur="updateEnd();" /></td>
			</tr>
			
			<tr>
				<td>Current Weight</td>
				<td><input type="input"></td>
			</tr>
			
			<tr>
				<td>Target Goal</td>
				<td><input id="goal" onKeyUp="updateEnd();" type="input"><select id="type"><option value="pounds">lbs.</option><option value="precent">%</option></select><select id="direction"><option>Loss</option><option>Gain</option><option>Hold</option></select></td>
			</tr>
			<tr>
				<td>Ok so lets begin...</td>
				<td><input type="submit" value="Start a new group, join a public group or enter invite code for private group."></td>
			</tr>
		</table>
		<code><span id="final"></span></code>


		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>