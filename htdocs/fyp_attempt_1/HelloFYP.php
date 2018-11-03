<!DOCTYPE html>
<html>
<body>

<?php 
// 1. database credentials
$host = "localhost";
$db_name = "fypDatabase";
$username = "root";
$password = "SklBpePBjViLGWj6";
 
// 2. connect to database
$con = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
 
// 3. prepare select query
$query = "SELECT id, name, age, role, team, division FROM employee WHERE id = ? LIMIT 0,1";
$stmt = $con->prepare( $query );
 
// 4. sample product ID
$id=1;
 
// 5. this is the first question mark in the query
$stmt->bindParam(1, $id);
 
// 6. execute our query
$stmt->execute();
 
// 7. store retrieved row to the 'row' variable
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
// 8. show data to user
echo "<div>Name: " . $row['name'] . "</div>";
echo "<div>Age: " . $row['age'] . "</div>";
echo "<div>Role: " . $row['role'] . "</div>";
?>

</body>
</html>