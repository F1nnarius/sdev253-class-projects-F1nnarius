<?php
	$pictures = array('cat-1113335_340.png', 'emoticon-937609_340.png', 'frog-2495715_340.png');
	shuffle($pictures);
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Homers Homework</title>
	<body>
		<h1> Homer's Homerwork</h1>
		<div align="center">
		<table stlye="width: 100%; border:0">
			<tr>
			<?php
			for ($i = 0; $i <3; $i++) {
				echo "<td stlye=\width: 33%; text-align: center\">
					<img src=\"";
				echo $pictures[$i]
				echo "\"></td>";
				}
				?>
				</tr>
			</table>
		</div>
	</body>				
</html>