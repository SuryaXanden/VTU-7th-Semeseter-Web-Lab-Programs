<?php
//$rc = $aip = 0;

if($aip!=0)
{
	echo "<table>";
	for($i = 0 ; $i < $c ; $i++)
	{
		echo "<tr>";
		for($j = 0; $j <$r ; $j++)
		{
			echo "<td>".$_GET[$i."".$j]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";	
}

if(isset($_GET['r']) && isset($_GET['c']) && !$rc)
{
	$r = $_GET['r'];
	$c = $_GET['c'];
	
	if($r>0 && $c>0 && !$aip)
	{
		$rc = 1;//rows and coloums are set
		echo "<form method=\"GET\"><table>";
		for($i = 0 ; $i < $r ; $i++)
		{
			echo "<tr>";
			for($j = 0; $j <$c ; $j++)
			{
				echo "<td><input type=\"number\" name=".$i.$j."></td>";
			}
			echo "</tr>";
		}
		echo "</table><input type=\"submit\"></form>";
		$aip = 1;//array is set
	}
}
else
{
?>
<form method="GET">
<input placeholder="Rows" name="r" type="number" value="<?php if(isset($_GET['r'])) echo $_GET['r'];?>">
&Tab;
<input placeholder="Cols" name="c" type="number" value="<?php if(isset($_GET['c'])) echo $_GET['c'];?>">
<input type="submit">
</form>
<?php
}
?>
