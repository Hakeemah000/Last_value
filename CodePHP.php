<!--*********************************************-->

<!--The condition I wrote in my code-->

<?php

$result = $conn->query($q);

if ($result->num_rows >0 ) {
    //Output data of each row
  while ($row = $result->fetch_assoc()) {
     echo "  " . $row["directions"] ;
   }
} else {
  echo "No results found";
}

?>

