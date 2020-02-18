<html>
<body>

 <?php 

$servername = "localhost";
$username = "kavya";
$password = "KavyaPant1!";
$dbname = "assignment";
 
$p1=$_POST["aname"];
$p2=$_POST["bname"];
$w=$_POST["winner"];


$conn = new mysqli($servername,$username, $password,$dbname);

if ($conn->connect_error) {
    echo "die";
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "INSERT INTO race VALUES ('$p1', '$p2','$w')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
$conn->close();
 ?>

</body>
</html>