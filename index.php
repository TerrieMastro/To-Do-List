<?php
	//connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'to-do');
	if (isset($_POST['submit'])){
		$task = $_POST['task'];
	mysqli_query($db, "INSERT INTO tasks(task) VALUES ('$task')");
	header('location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="heading">
			<h2>To Do List</h2>
		</div>
		<form method="POST" action="index.php">
			    <input type="text" 
                     name="title" 
                     style="border-color: #000000"
                     placeholder="Title" />
					     <br><input type="text" 
                     name="title" 
                     style="border-color: #000000"
                     placeholder="description" /></br>
			<button type="submit" class="add_btn" name="submit">Add Item</button>
		</form>
		<table>
			<thead>
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="task">Mow</td>
					<td class="task">Front and Back</td>
					<td class="delete">
						<a href="#">x</a>
					</td>
				</tr>
				<tr>
					<td class="task">Sweeping and Mopping</td>
					<td class="task">Kitchen</td>
					<td class="delete">
						<a href="#">x</a>
					</td>
				</tr>
				<tr>
					<td class="task">Trim Hedges</td>
					<td class="task">Front Yard</td>
					<td class="delete">
						<a href="#">x</a>
					</td>
				</tr>
				<tr>
					<td class="task">Shopping</td>
					<td class="task">Groceries</td>
					<td class="delete">
						<a href="#">x</a>
					</td>
				</tr>
				<tr>
					<td class="task">Pay Bills</td>
					<td class="task">Utility and Credit Card</td>
					<td class="delete">
						<a href="#">x</a>
					</td>
				</tr>
				<tr>
					<td class="task">Parent Conference</td>
					<td class="task">Kid's School at 4pm</td>
					<td class="delete">
						<a href="#">x</a>
					</td>
				</tr>
			</tbody>
		</table>
</body>
</html>