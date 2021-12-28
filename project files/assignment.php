<?php
  include('assignment.html');
?>

<?php
 ini_set("display_errors", "1"); error_reporting(E_ALL);
 $mysqli = new mysqli('127.0.0.1', 'root', '', 'ssg');
 if ($mysqli -> connect_errno) {
   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
   exit();
 }
 $stmt = $mysqli -> prepare("SELECT `firstName`, `secondName`, `otherNames`, `comment` FROM comments WHERE 1");
    $stmt -> execute();
    if ($result = $stmt -> get_result()){
        
        $row = $result -> fetch_row();
        $name1 = $row[0]." ".$row[1]." ".$row[2].": ";
        echo "<script>
        document.getElementById('commentor1').innerHTML = '".$name1."';
        document.getElementById('comment1').innerHTML = '".$row[3]."';

        </script>
        ";

        $row = $result -> fetch_row();
        $name2 = $row[0]." ".$row[1]." ".$row[2].": ";
        echo "<script>
        document.getElementById('commentor2').innerHTML = '".$name2."';
        document.getElementById('comment2').innerHTML = '".$row[3]."';

        </script>
        ";
    }

    $stmt2 = $mysqli -> prepare("SELECT * FROM `contents` WHERE 1");
    $stmt2 -> execute();
    if ($result2 = $stmt2 -> get_result()){
        
        $row2 = $result2 -> fetch_row();
        //  echo $row2[1];
        // echo "<script>
        // document.getElementById('poultryText').innerHTML = ".$row2[0].";

        // </script>
        // ";
        
    }
        
    $result -> free_result();
    $result2 -> free_result();


 ?>