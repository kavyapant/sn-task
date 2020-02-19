<html>
<body>

 <?php 

$servername = "localhost";
$username = "kavya";
$password = "KavyaPant1!";
$dbname = "assignment";
 
$p1=strtolower(htmlspecialchars($_POST["aname"]));
$p2=strtolower(htmlspecialchars($_POST["bname"]));
$w=strtolower(htmlspecialchars($_POST["winner"]));

$k=0;
$conn = new mysqli($servername,$username, $password,$dbname);
//Check whether name of Player A has sepcials charecters or Integer 
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $p1)||preg_match('~[0-9]+~', $p1))
    {
        echo " Name of player A contains specials charecters or numbers, Please Re enter";
        echo "<br>";
        $k=1;

    }
    //Check whether name of Player B has sepcials charecters or Integer 
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $p2)||preg_match('~[0-9]+~', $p2))
        {
            echo " Name of player B contains specials charecters or numbers, Please Re enter";
            echo "<br>";
            $k=1;
        }
        //Check whether name of Winner has sepcials charecters or Integer 
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $w)||preg_match('~[0-9]+~', $w))
            {
                echo " Name of Winner contains specials charecters or numbers, Please Re enter";
                echo "<br>";
                $k=1;
            }
            //Check that winner name matches with either player A name or player B name
            if($w!=$p1 && $w!=$p2)
            {
               
                echo " Name of winner does not match with name of the participating players";
                $k=1;
            }
           
//if all the above conditions are satisfied insert values entered by admin to database 
            if($k==0){
if ($conn->connect_error) {
    echo "die";
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "INSERT INTO race VALUES ('$p1', '$p2','$w')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
$conn->close();
            }
 ?>

</body>
</html>