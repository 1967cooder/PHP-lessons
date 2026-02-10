<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/


//Step 1 and 2 Done in PHPmyadmin

// Step 3/see the code below) Insert Data (can be done also in PHPmyadmin)
// - Свързване с базата данни. 
$servername = "db";          // името на MySQL контейнера в Docker
$username = "lionUser";          // потребител
$password = "lionPass"; // паролата от docker-compose
$dbname = "lionDB";          // името на базата

$conn = new mysqli($servername, $username, $password, $dbname);

//- Проверка за връзка
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// - SELECT query
$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

// - Проверка дали има редове и извеждане
if ($result->num_rows > 0) {
    echo "<h2>Users List:</h2>";
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>ID: " . $row["id"] . " - Username: " . $row["username"] . " - Password: " . $row["password"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "0 results";
}

// - Затваряне на връзката
$conn->close();


	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
