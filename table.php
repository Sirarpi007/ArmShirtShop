<?php
    include "base.php";
    $query = 'SELECT student.*, kit.name AS kit_name, province.city 
              FROM student 
              INNER JOIN kit ON student.kit_id = kit.id
              INNER JOIN province ON student.province = province.id';

    $result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Directory</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            font-size: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #ff5733;
            color: white;
        }
        .action-links a {
            padding: 8px 14px;
            margin: 5px;
            border-radius: 8px;
            color: white;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
            transition: 0.3s;
        }
        .update-btn {
            background: #f39c12;
            box-shadow: 0px 4px 10px rgba(243, 156, 18, 0.3);
        }
        .delete-btn {
            background: #e74c3c;
            box-shadow: 0px 4px 10px rgba(231, 76, 60, 0.3);
        }
        .update-btn:hover {
            background: #e67e22;
            box-shadow: 0px 5px 12px rgba(230, 126, 34, 0.4);
        }
        .delete-btn:hover {
            background: #c0392b;
            box-shadow: 0px 5px 12px rgba(192, 57, 43, 0.4);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Directory</h2>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Province</th>
                <th>Address</th>
                <th>Age</th>
                <th>Email</th>
                <th>Kit</th>
                <th>Actions</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['adr']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['mail']; ?></td>
                <td><?php echo $row['kit_name']; ?></td>
                <td class="action-links">
                    <a href="/nma/update.php?id=<?php echo $row['id']; ?>" class="update-btn">Update</a>
                    <a href="/nma/delete.php?del_id=<?php echo $row['id']; ?>" class="delete-btn">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
