<?php
    include "base.php";
?>
<?php

if (isset($_GET['del_id']))
{    
    $query = "DELETE FROM student WHERE id =" .$_GET['del_id'];
    $result = mysqli_query($connect,$query);  
    header("location:table.php");    
}
else header("location:table.php")

?>

