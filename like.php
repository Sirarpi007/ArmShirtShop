<?php
    include "base.php";
?>
<?php
$query="SELECT * FROM student WHERE lastname LIKE '%յան%'";
$result=mysqli_query($connect,$query);
if (mysqli_num_rows($result )>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<input type='text' value=".$row['lastname']."'><br>";
    }
}
?>