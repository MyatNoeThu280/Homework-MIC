<!DOCTYPE html>
<html>
<head>
	<title>Chess Board</title>
<style type="text/css">
h2{
	text-align: center;
	font-size:50px;
}
table{
	margin-left:400px;
	width:700px;
	height:600px;
}
</style>
</head>
<body>
	<h2>Chess Board</h2>
	<table cellspacing="0px" cellpadding="0px" border="1px">
<?php
for($row=1;$row<=8;$row++)
{
	echo "<tr>";
	for($column=1;$column<=8;$column++)

	{
		$total=$row+$column;
		if($total%2==0)
		{
			echo "<td bgcolor=#FFFFFF></td>";
		}
		else
		{
			echo "<td bgcolor=#000000></td>";
		}
	}
	echo "</tr>";
}
?>
</table>
</body>
</html>