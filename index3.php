<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name="port";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM port where 1" ;
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo  "<table>";
   

foreach ($data as $row) {

      echo '<tr>';

      echo '<td>';  echo "<p>id: " . $row['sno'] . "</p>";   echo '</td';

    
    
      echo '<tr>'; echo '<th>';  echo '<td>';   echo "<p>name= " . $row['name'] . "</p>";  echo '</th>'; echo '</
      td>';   echo '</tr';
      echo '<tr>';  echo '<td>';  echo "<p>email:  " . $row['email'] .  "</p>";  echo '</td>'; echo '</tr';
      echo '<tr>';  echo '<td>'; echo "<p>subject : " . $row['subject'] .  "</p>"; echo '</td>';  echo '</tr';
      echo '<tr>'; echo '<td>';  echo "<p>message=  " . $row['message'] .  "</p>"; echo '</td>';  echo '</tr';
    
      echo '</tr>';


    
}
echo "</table>";

 
?>