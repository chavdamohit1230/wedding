<?php

        include("connection.php");

        $query="select * from adminlogin";

        $mm=mysqli_query($con,$query);

        $result=mysqli_num_rows($mm);

            echo "<table border='2px' height='24%' width='20%'>";

            echo "<h3> Data about the admine </h3>";

            echo "<tr align='center'><td><b>usetname</b></td>
            <td><b>password</b></td></tr>";

        
		while($r=mysqli_fetch_assoc($mm))

            
        echo "<tr align='center'><td>".$r['user_name']."</td>". "<td>".$r['password']."</td>";

        ;
        
        echo "</table>";
    

        ""


?>
