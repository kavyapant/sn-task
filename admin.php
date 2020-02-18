
<?php
    session_start();
	if(!isset($_SESSION['is_logged_in'])){
    // redirect them to your desired location
    header('location: index.html');
    exit;
}

?>

<html>
<body>

<form action="welcome.php" method="post">
Name of Player A: <input type="text" name="aname" ><br>
Name of PLayer B: <input type="text" name="bname" ><br>
Winner: <input type="text" name="winner"><br>


<input type="submit">


</form>

</body>
</html>