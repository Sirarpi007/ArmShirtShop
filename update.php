<?php
    include "table.php";
?>

<?php

if (isset($_GET['id']))
{    
    $query = "SELECT * FROM student WHERE id =".$_GET['id'];
    $result = mysqli_query($connect,$query);  
    header("Location:table.php");    
}
else{
    header("Location:table.php");
}

if ($result) {
    $row = mysqli_fetch_assoc($result);    
    echo "<form method = 'POST'> <input type = hidden name = 'id' value =".$row['id'].">
            <input type = text name = 'name' value =".$row['firstname'].">
            <input type = text name = 'lastname' value =".$row['lastname'].">
            <input type = number name = 'id' value =".$row['age'].">
            <input type = mail name = 'mail' value =".$row['mail'].">
            </form>";
}
if (isset($_POST['sub'])) {
    $query = "UPDATE student SET firstname =".$_POST['fname']."last =".$_POST['lname']."age =".$_POST['age']."mail =".$_POST['mail'];
}

?>