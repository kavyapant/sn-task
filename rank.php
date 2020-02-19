 <html>
     <body>
         <?php
          $servername = "localhost";
          $username = "kavya";
          $password = "KavyaPant1!";
          $dbname = "assignment";
              
        $conn = new mysqli($servername,$username, $password,$dbname);
        
        if ($conn->connect_error) {
            echo "die";
            die("Connection failed: " . $conn->connect_error);
        }
        $a=array();
        //Sql query to get number of matches won by each player and store in array 
        $sql = "SELECT winner,count(aname) as c FROM race group by winner ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                $a[$row["winner"]]=$row["c"];
                
                 
            }
        } else {
            echo "0 results";
        }
        //sort array in descending order to generate rank of each player
       asort($a);
       $a=array_reverse($a);
       $r=1;
       $n=count($a);
       $newArray = array_keys($a);
       $newArray2 = array_values($a);
       
       
       for($x=0;$x<$n;$x++)
       {
           echo "Rank : " . $r. " Name: ". $newArray[$x] ." Number of races won : ". $newArray2[$x];
           $r=$r+1;
           echo " <br>";
       }


        $conn->close();
         ?>
    <br>
   <a href="index.html">Back to the homepage</a>

    </body>
    </html>
        