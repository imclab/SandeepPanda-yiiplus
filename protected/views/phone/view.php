<html>
	<head>
		<title>The Gadget Store</title>
	</head>
	<body>
	<h2>Details for <?php echo $phone->name; ?></h2>
	<hr/>
	<div>
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?php echo $phone->name; ?></td>
			</tr>
			<tr>
				<td>Price</td>
				<td>:</td>
				<td>$<?php echo $phone->price; ?></td>
			</tr>
			<tr>
				<td>OS</td>
				<td>:</td>
				<td><?php echo $phone->os; ?></td>
			</tr>
			<tr>
				<td>Camera</td>
				<td>:</td>
				<td><?php  echo $phone->camera; ?></td>
			</tr>
			<tr>
				<td>Screen Size</td>
				<td>:</td>
				<td><?php echo $phone->screen_size; ?></td>
			</tr>
		</table>
	</div>
	</body>
</html>