
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
Name of Player A: <input type="text" name="aname" required ><br>
Name of Player B: <input type="text" name="bname" required ><br>
Winner: <input type="text" name="winner" required><br>


<input type="submit">
<br>
<a href="index.html">Back to the homepage</a>

</form>

</body>
</html>