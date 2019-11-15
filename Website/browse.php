<?php
//including the database connection file
include_once("config.php");


if (isset($_POST['category']))
{
  $category= $_POST['category'];

$query =  "SELECT * FROM books where category='$category'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

echo'<html>
<head>  
  <title>Homepage</title>
</head>

<body>';


  echo'<table width="80%" >';

  echo'<tr bgcolor="grey">
    <td>Name</td>
    <td>Author</td>
    <td>Category</td>
    <td>Price</td>
    <td>Image</td>
    
  </tr>';

  



 while($res = mysqli_fetch_array($result)) {     
    echo "<tr>";
    echo "<td>".$res['bname']."</td>";
    echo "<td>".$res['author']."</td>";
    echo "<td>".$res['category']."</td>"; 
    echo "<td>".$res['price']."</td>";
      echo "<td>";
   echo '<img src="data:image/jpeg;base64,'.base64_encode( $res['image'] ).'"/ height="200" width="150">';
    echo "</td>";
    echo "</tr>";
}
} 

echo'</table>
</body>
</html>';
?>

