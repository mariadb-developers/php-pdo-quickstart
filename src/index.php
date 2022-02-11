<?php
// Include the database connection file
include_once("config.php");

class Contact {
	public $id;
	public $name;
	public $age;
	public $email;
}

// Fetch contacts (in descending order)
$contacts = $pdo->query( "SELECT * FROM contacts ORDER BY id DESC")->fetchAll(PDO::FETCH_CLASS, 'Contact');

?>
<html>
<head>	
	<title>MariaDB Rolodex</title>
	<link rel="stylesheet" href="styles.css" />
</head>
<body>
	<table>
		<tr>
			<td>Name</td>
			<td>Age</td>
			<td>Email</td>
			<td><a class="button" href="add.php">Add Contact</a></td>
		</tr>
		<?php
		// Print contacts 
		foreach($contacts as $contact) { 		
			echo "<tr>";
			echo "<td>".$contact->name."</td>";
			echo "<td>".$contact->age."</td>";
			echo "<td>".$contact->email."</td>";	
			echo "<td><a href=\"edit.php?id=$contact->id\">Edit</a> | <a href=\"delete.php?id=$contact->id\" onClick=\"return confirm('Are you sure you want to delete this contact?')\">Delete</a></td>";		
		}
		?>
	</table>
</body>
</html>
