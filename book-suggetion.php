<?php
$username="root";
$password="";
$database="bookshop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$book_name =$_POST['book_name'];
$sql = "SELECT book_name FROM book_mast where book_name LIKE '%$book_name%'";
$result = mysqli_query($sql);

while($row = mysqli_fetch_array($result)){
	echo "<p>".$row['book_name']."</p>";
}

$conn->close();
?>
?>