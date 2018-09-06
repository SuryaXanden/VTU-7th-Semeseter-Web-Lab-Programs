<title>Calculator</title>
<center>
<h1>Calculator</h1>
<?php
$total = 0;
if(isset($_POST['n1']) && isset($_POST['n2']))
{
	if($_POST['op'] == 'a')
		$total = $_POST['n1'] + $_POST['n2'];	
	if($_POST['op'] == 's')
		$total = $_POST['n1'] - $_POST['n2'];	
	if($_POST['op'] == 'm')
		$total = $_POST['n1'] * $_POST['n2'];	
	if($_POST['op'] == 'd')
		if($_POST['n2']!=0)
			$total = $_POST['n1'] / $_POST['n2'];
		else
			$total = 0;
		echo "<script>document.querySelector(\"#result\").text() = ".$total.");</script>";
}
?>
<form method="POST">
	<input name="n1" type="number" placeholder="Number 1" step=0.0001 value="<?php if(isset($_POST['n1'])) echo $_POST['n1'];?>">
	<br>
	<select name="op">
		<option value="a">+</option>
		<option value="s">-</option>
		<option value="m">*</option>
		<option value="d">/</option>
	</select>
	<br>
	<input name="n2" type="number" placeholder="Number 2" step=0.0001 value="<?php if(isset($_POST['n2'])) echo $_POST['n2'];?>">
	<br>
	<input type="submit" value="Calculate">
	<br>
	<input value="<?php echo $total;?>" disabled id="result" placeholder="Result">
</form>
