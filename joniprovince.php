<?php
    include "base.php";
?>
<?php
$query='SELECT * FROM student INNER JOIN province ON student.province= province.id ';
$result=mysqli_query($connect,$query);
if ($result){
    while($row=mysqli_fetch_assoc($result)){
        echo "<input type='text' value=".$row['firstname']."_".$row['id'].".".$row['city']."><br>";
    }

}


?>    